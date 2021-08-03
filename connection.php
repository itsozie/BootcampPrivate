<?php

function conn(){

    $host = "localhost";
    $name = "OOP";
    $user = "root";
    $password = " ";

   try {
       mysqli_connect('$host,$user,$password,$name');
   } catch (Exception $e) {
       header('Location: View/error.php');
   }

}