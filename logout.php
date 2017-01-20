<?php
$url = "/";
@setcookie(login, NULL);
echo "<script language='javascript' type='text/javascript'>";
echo "window.location.href='$url'";
echo "</script>";
?>