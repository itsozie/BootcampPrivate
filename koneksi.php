<?php

function conn(){

    $host = "localhost";
    $name = "ivenapp";
    $user = "root";
    $password = "";

    try {
        return new mysqli($host,$user,$password,$name);
    } catch (Exception $e) {
        require_once('View/main/error.php');
    }

}