<?php 
include 'function.php';

	$link = mysqli_connect('localhost', 'root', '','vt');//链接数据库
	mysqli_select_db($link,"vt");
	mysqli_query($link,'set name utf8');
	$sql = "select username from user where username = '@$_COOKIE['login']'";
	$result = mysqli_query($link,$sql);
	$num = mysqli_num_rows($result);//判断是否存在这一rows
	if($num)
            {  
                redirect('mis.php');
            }  
    else  
    	    {  
                redirect('index.php');
            }  

    // $cook = "admin";
    // if (@$_COOKIE['login'] != $cook){
    // redirect('index.php');
    // } 

?>