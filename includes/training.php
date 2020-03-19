<?php
        if (isset($_POST['taint-submit'])) {

            // db connection...
            require __DIR__.'/dbh.php';
    
            $we_id = $_SESSION['user_id'];
            foreach ($_POST AS $key => $value) {
                $$key = $value;
            }
            foreach ($organisation AS $edukey => $eduvalue) {
                
                $sql = "INSERT INTO `work_exp` (organisation, from_date, to_date, qualification, we_id, date_updated) VALUES ('".$organisation[$edukey]."', '".$from_date[$edukey]."', '".$to_date[$edukey]."', '".$qualification[$edukey]."', '".$we_id."', NOW())";
                $query = mysqli_query($conn, $sql);
                if ($query) {
                    header("location: ../pages/taining.php");
                    exit();
                } else {
                    header("location: ../pages/taining.php?sqlerror");
                }
            }
        } else {
            header("location: ../pages/index.php");
            exit();
        }