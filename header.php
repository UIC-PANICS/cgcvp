<?php
echo <<<END



END;


if (isset($_SESSION['user']))
{
	$user     = $_SESSION['user'];
	$loggedin = TRUE;
}
else $loggedin = FALSE;

if ($loggedin)
{
	echo  <<<END


	
END;
	
}
else
{
	redirect('login.php');
}

?>