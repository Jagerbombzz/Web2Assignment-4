<?php


// database Connection variables
define('HOST', 'localhost'); // Database host name ex. localhost
define('USER', 'mowanj1'); // Database user. ex. root ( if your on local server)
define('PASSWORD', '1000023931'); // Database user password  (if password is not set for user then keep it empty )
define('DATABASE', 'mowanj1_Assign4'); // Database Database name

function DB()
{
    try {
        $db = new PDO('mysql:host='.HOST.';dbname='.DATABASE.'', USER, PASSWORD);
        return $db;
    } catch (PDOException $e) {
        return "Error!: " . $e->getMessage();
        die();
    }
}
?>