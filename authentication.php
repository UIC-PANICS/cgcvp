<?php 
include 'function.php';
    $cook = "admin";
    if (@$_COOKIE['login'] != $cook){
    redirect('index.php');
    } 

?>