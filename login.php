<?php  
    session_start();
    include 'function.php';
    if(isset($_POST["submit"]) && $_POST["submit"] == "Sign in")  
    {  
        $user = $_POST["username"];
        $psw = $_POST["password"];
        if($user == "" || $psw == "")  
        {  
            echo "<script>alert('Input Username or Password!'); history.go(-1);</script>";  
        }  
        else  
        {  
			$link = mysqli_connect('localhost', 'root', '','vt');//链接数据库
			mysqli_select_db($link,"vt");
			mysqli_query($link,'set name utf8');
			$sql = "select username from user where username = '$_POST[username]'";
			$result = mysqli_query($link,$sql);
			$num = mysqli_num_rows($result);
            if($num)
            {  
                $row = mysqli_fetch_array($result);  //将数据以索引方式储存在数组中  
                /*echo $row[0];  */
                $_SESSION['LoginUsername'] = $row[0];
                setcookie("login","$row[0]",time()+3600); //将登陆信息以Cookie形式储存1天
                redirect('mis.php');
            }  
            else  
            {  
                echo "<script>alert('Username or Password Error!');history.go(-1);</script>";  
            }  
        }  
    }  
    else  
    {  
        echo "<script>alert('Network Error!'); history.go(-1);</script>";  
    }
?>  