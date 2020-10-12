<?php
 require('connection.php');
 if (isset($_POST['login']) && $_POST['login'] && isset($_POST['password']) && $_POST['password']) {
    $login = $_POST['login'];
    $pasword = $_POST['password'];
    $id = login($login,$pasword);
    if($id != 0){
       echo json_encode(array('success' => 1));
    }else {
        echo json_encode(array('success' => 0));
    }
 }
 function login($login,$pasword){
     $sql = "SELECT * From users where username=? and pasword=?";
     $req = $GLOBALS['Db']->prepare($sql);
     $req->execute(array($login,$pasword));
     ;
      $id = 0;
    
         while( $row = $req->fetch()){
             $id = $row['id_user'];
         }
     return $id;
 }
 
?>