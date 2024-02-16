<?php
	session_start();
	echo"using session view count ". $_SESSION['count']++;
?>


<?php
	if(!isset($_COOKIE['count']))
	{
	echo"Welcome to view this page";
	$cookie=1;
	setcookie("count",$cookie);
	}
	else
	{
		$cookie=++$_COOKIE['count'];
		setcookie("count",$cookie);
		echo"<br>You have viewed this page using cookie  ".$_COOKIE['count']."times";
	}
?>
