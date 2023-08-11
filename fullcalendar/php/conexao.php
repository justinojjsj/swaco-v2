<?php

    try{

        $conn = new PDO("mysql:host=171.18.0.3:3306;dbname=projeto-db", "root", "my-secret-pw"); 

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }

?>
