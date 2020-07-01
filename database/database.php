<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', "root");
    define('DB_PASS', "");
    define('DB_NAME', 'baitap3');

    try
    {
        $conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASS);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//        echo "Connection Successfully";
    }
    catch (PDOException $e)
    {
        echo "Connection Fail: ". $e->getMessage();
    }
?>