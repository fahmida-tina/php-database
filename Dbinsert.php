<?php
require "DBconnect.php";

 function register($username, $password){
       $conn =connect();
    $sql = $conn->prepare("INSERT INTO user (username, password) VALUES (?, ?)");
    $sql-> bind_param("ss",$username, $password);
    $username ='you';
    $password ='098';
    $response = $sql->execute();
    var_dump($response);
        $sql->close();
    $conn->close();
  
}

 

?>












