<?php 
    if (isset($_POST['submit-reg'])) {
        require __DIR__.'/dbh.php';

        $mail = $_POST['mail'];
        $sql = "SELECT * FROM `bio_data` WHERE mail=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../admin_reg.php?prepare1");
            exit();
        } else {
            // Start of existence...
            mysqli_stmt_bind_param($stmt, 's', $mail);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resut = mysqli_stmt_get_result($stmt);
            $result = mysqli_stmt_num_rows($stmt);
            if ($result > 0) {
                if ($row = mysqli_fetch_assoc($resut)) {
                    $a_id = $row['p_id'];
                    $sql = "INSERT INTO `admin` (`status`, `p_id`) VALUES (?, ?)";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        header ("location: ../admin_reg.php?pleaseunavailable");
                        exit();
                    } else {
                        mysqli_stmt_bind_param($stmt, 'si', $status, $a_id);
                        mysqli_stmt_execute($stmt);
                        header("location: thanks.php?success");
                        exit();
                    }
                }
                mysqli_stmt_close($stmt);
                mysqli_close($conn);
            }  else {
                // there are no results in rows in the column
                $passwordHashed = password_hash($secret_phase, PASSWORD_DEFAULT);
                mysqli_stmt_bind_param($stmt, 'sssssssss', $fname, $surname, $mname, $tel_no, $d_o_b, $mail, $gender, $marital_status, $passwordHashed);
                mysqli_stmt_execute($stmt);
                $last_id = mysqli_insert_id($conn);
                if (!isset($last_id)) {
                    header("location: ../admin_reg.php?lastidnotgotten");
                    exit();
                } else {
                    $sql = "INSERT INTO `admin` (`status`, `p_id`) VALUES (?, ?)";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        header("location: ../admin_reg.php?prepare3");
                        exit();
                    } else {
                        mysqli_stmt_bind_param($stmt, 'ss', $status, $last_id);
                        mysqli_stmt_execute($stmt);
                        header("location: ../thanks.php");
                        exit();
                    }
                }
                mysqli_stmt_close($stmt);
                mysqli_close($conn);
            }
        }
    } else {
        header("location: ..admin_reg.php?malicious");
        exit();
    }

        // Javascript for Validation...

        