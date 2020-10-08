<?php
$servername='localhost';
    $username = 'root';
    $password = "";
    $database='souscription';
    $host = "mysql:host=$servername;dbname=$database;charset=utf8";
    $dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
    try { 
        $my_Db_Connection = new PDO($host, $username, $password, $dsn_Options);
       
      } catch (PDOException $error) {
        echo 'Connection error: ' . $error->getMessage();
        
      }
?>