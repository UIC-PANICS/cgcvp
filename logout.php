<?php
session_start();
include 'function.php';
@setcookie(login, NULL);
/*
session_destroy();
*/
redirect('/');
?>