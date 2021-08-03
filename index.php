<?php
require_once('connection.php');

if (isset($_GET['page']) && isset($_GET['act'])) {
    session_start();
    $page = $_GET['page']; 
    $act = $_GET['act']; 
    } else{
    require_once('View/auth/Login.php');
    }
