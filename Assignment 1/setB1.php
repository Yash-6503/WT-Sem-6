<html>
<head>
	<title>setb1</title>
</head>
<body bgcolor=pink>
	<form method=get>
	<font size=6 color=blue>
	<pre>
		Enter username:<input type=text name=n placeholder="username"><br>
		Enter password:<input type=password name=p placeholder="password"><br>
		<input type=submit value=Login>
	</pre>
	</font>
</body>
</html>

<body bgcolor=cyan>
	<font size=6 color=blue>
<?php
	session_start();
	$nm=$_GET['n'];
	$ps=$_GET['p'];
	if($nm==$ps)
		echo"correct<br> Login Successful<br> WELCOME!!!";
	else if(isset($_SESSION['cnt']))
	{
		echo $_SESSION['cnt']." chance";
			$_SESSION['cnt']=$_SESSION['cnt']+1;
		if($_SESSION['cnt']>3)
			echo"<br>Attempt finished";
	}
	else
	{
		$_SESSION['cnt']=1;
		echo"1 chance used Ivalid login";
	}
?>
		
	
		
