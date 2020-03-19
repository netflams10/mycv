<?php 
    if (isset($_POST['submit-reg'])) {
        require __DIR__.'/dbh.php';
        $errors = '';
        foreach ($_POST AS $key => $value) {
            $$key = $value;
            if ($value == '') {
                $errors = 'Please input all fields';
            }
            // echo '<pre>' . $key . '=>' . $value . '</pre>';
        }
        // echo $mail;
        
        if ($errors != '' ) {
            header("location: ../register.php?emptyfields");
            exit();
        } else {
            if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                header("location: ../register.php?invalidemail");
                exit();
            }
            else if ($secret_phase != $c_password) {
                header("location: ../register.php?unmatchedpassword");
                exit();
            } else {
                // $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
                $sql = "SELECT * FROM `bio_data` WHERE mail=?";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("loation: ../register.php?mysqlierror");
                    exit();
                } else {
                    mysqli_stmt_bind_param($stmt, "s", $mail);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    $resultCheck = mysqli_stmt_num_rows($stmt);
                    if ($resultCheck > 0) {
                        header("location: ../register.php?mysqlierror");
                        exit();
                    } else {
                        $sql = "INSERT INTO `bio_data` (`fname`, `surname`, `mname`, `tel_no`, `d_o_b`, `mail`, `gender`, `state_of_origin`, `marital_status`, `person_address`, `secret_phase`)
                                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                        $stmt = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            header("location: ../register.php?mysqlierror");
                            exit();
                        } else {
                            $passwordHashed = password_hash($secret_phase, PASSWORD_DEFAULT);
                            mysqli_stmt_bind_param($stmt, "sssssssssss", $fname, $surname, $mname, $tel_no, $d_o_b, $mail, $gender, $state_of_origin, $marital_status, $person_address, $passwordHashed);
                            mysqli_stmt_execute($stmt);
                            // suppose redirecttion...
                            // $last_id = $conn->lastInsertId();
                            $last_id = mysqli_insert_id($conn);
                            if(isset($last_id)) {
                                $sql = "INSERT INTO `in_search` (course_of_study, post_apply, p_id) VALUES (?, ?, ?)";
                                $stmt = mysqli_stmt_init($conn);
                                if (!mysqli_stmt_prepare($stmt, $sql)) {
                                    header("location: ../register.php?sqlerror");
                                    exit();
                                } else {
                                    // echo $last_id;
                                    mysqli_stmt_bind_param($stmt, 'sss', $course_of_study, $post_apply, $last_id);
                                    mysqli_stmt_execute($stmt);
                                    header("location: ../thanks.php");
                                    exit();
                                }
                            }
                        }
                    }
                }
                mysqli_stmt_close($stmt);
                mysqli_close($conn);

            }

        }

    } else {
        header('location: ../register.php');
    }