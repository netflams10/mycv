<?php
        if (isset($_POST['refree-submit'])) {

            // db connection...
            require __DIR__.'/dbh.php';
    
            $we_id = $_SESSION['user_id'];
            foreach ($_POST AS $key => $value) {
                $$key = $value;
            }
            foreach ($name AS $edukey => $eduvalue) {
                
                $sql = "INSERT INTO `training` ( `name`, position, work_address, phone_number, mail, p_id, date_updated) VALUES ('".$name[$edukey]."', '".$position[$edukey]."', '".$work_address[$edukey]."', '".$phone_number[$edukey]."', $mail[$edukey], '".$we_id."', NOW())";
                $query = mysqli_query($conn, $sql);
                if ($query) {
                    header("location: ../pages/refrees.php");
                    exit();
                } else {
                    header("location: ../pages/refrees.php?sqlerror");
                }
            }
        } else {
            header("location: ../pages/index.php");
            exit();
        }