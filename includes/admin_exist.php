<?php 
    if (isset($_POST['submit-reg'])) {

        require __DIR__.'/dbh.php';

        $mail = $_POST['mail'];

        $sql = "SELECT * FROM `bio_data` WHERE mail=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../admin_reg.php?unprepare");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, 's', $mail);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_array($result)) {
                $id = $row['p_id'];
                if (isset($id)) {
                    $sql = "INSERT INTO `admin` (`status`, `p_id`) VALUES (?, ?)";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        header("location: ../admin_reg.php?unprepare2");
                        exit();
                    } else {
                        $status = 'admin';
                        mysqli_stmt_bind_param($stmt, 'si', $status, $id);
                        mysqli_stmt_execute($stmt);
                        header("location: ../thanks.php");
                        exit();
                    }
                } else {
                    header("location: ../admin_reg.php?lielie");
                    exit();
                }
            } else {
                header("location: ../admin_reg.php?toolie");
                exit();
            }
        }
    } else {
        header("location: ../admin_reg.php?maliciousperson");
        exit();
    }