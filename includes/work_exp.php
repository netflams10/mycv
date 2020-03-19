<?php
    session_start();
    if (isset($_POST['exp-submit'])) {

        // db connection...
        require __DIR__.'/dbh.php';

        $p_id = $_SESSION['user_id'];
        foreach ($_POST AS $key => $value) {
            $$key = $value;
        }
        foreach ($organisation AS $edukey => $eduvalue) {
            
            $sql = "INSERT INTO `work_exp` (organisation, from_date, to_date, post_and_responsibility, p_id, date_updated) VALUES ('".$organisation[$edukey]."', '".$from_date[$edukey]."', '".$to_date[$edukey]."', '".$qualification[$edukey]."', '".$p_id."', NOW())";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                header("location: ../pages/work_experience.php");
                exit();
            } else {
                header("location: ../pages/work_experience.php?sqlerror");
            }
        }
    } else {
        header("location: ../pages/index.php");
        exit();
    }