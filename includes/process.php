<?php 
    if (isset($_POST['log_in'])) {

        require __DIR__."/dbh.php";
        $errors = '';

        foreach ($_POST AS $key => $value) {
            $$key = $value;
            if ($value == '') {
                $errors = 'Register with Us';
            }
            // echo '<pre>' . $key . '=>' . $value . '</pre>';
        }

        // Testing Errors
        if ($errors != '') {
            header("location: ../login.php?Infodidnotmatch");
            exit();
        } else {
            $sql = "SELECT * FROM `bio_data` WHERE mail=?";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ../login.php?siteerror");
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, 's', $mail);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if ($row = mysqli_fetch_assoc($result)){
                    $pswCheck = password_verify($secret_phase, $row['secret_phase']);
                    if ($pswCheck == false) {
                        header("location: ../login.php?Invalidpassword");
                        exit();
                    } else if ($pswCheck == true) {
                        session_start();
                        $_SESSION['user_id'] = $row['p_id'];
                        $_SESSION['email'] = $row['mail'];
                        $_SESSION['firstname'] = $row['fname'];
                        header("location: ../pages/index.php");
                        exit();
                    } else {
                        header("location: ../login.php?somethingelse");
                        exit();
                    }
                } else {
                    header("location: ../login.php?error");
                    exit();
                }
            }
        }
    } else {
        header("location: ../login.php?somethingunknown");
        exit();
    }