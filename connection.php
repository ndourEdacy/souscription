<?php
$servername='localhost';
    $username = 'root';
    $password = "";
    $database='souscription';
    $host = "mysql:host=$servername;dbname=$database;charset=utf8";
    $dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
    global $Db;
    try { 
        $Db = new PDO($host, $username, $password, $dsn_Options);
       
      } catch (PDOException $error) {
        echo 'Connection error: ' . $error->getMessage();
        
      }
?>