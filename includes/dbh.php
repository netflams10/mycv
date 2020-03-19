<?php 
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'mycv';
    
    $conn = mysqli_connect($host, $user, $password, $dbname);
    mysqli_set_charset($conn, 'utf-8');

    if (!($conn)) {
        die("Couldn't Connect to DB<br>" . mysqli_connect_error($conn));
    }
    
    // try {
    //     $dsn = 'mysql:host=' . $host . ';$dbname=' . $dbname;
    //     // Instance of PDO creation
    //     $conn = new PDO($dsn, $user, $password);
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // } catch (PDOException $e) {
    //     echo "Connection failed: " . $e->getMessage();
    // }