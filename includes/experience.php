<?php
    session_start();
    if (isset($_POST['exp-submit'])) {

        // db connection...
        require __DIR__.'/dbh.php';

        $we_id = $_SESSION['user_id'];
        foreach ($_POST AS $key => $value) {
            $$key = $value;
        }
        foreach ($institution_type AS $edukey => $eduvalue) {
            
            $sql = "INSERT INTO `edu_qua` (organisation, from_date, to_date, qualification, p_id, date_updated) VALUES ('".$institution_type[$edukey]."', '".$from_date[$edukey]."', '".$to_date[$edukey]."', '".$qualification[$edukey]."', '".$we_id."', NOW())";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                header("location: ../pages/edu_qua.php");
            } else {
                header("location: ../pages/edu_qua.php?sqlerror");
            }
        }
    } else {
        header("location: ../pages/index.php?errorisnotloading");
        exit();
    }




