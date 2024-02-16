<html>
<body bgcolor=skyblue>
	<form method=get>
	<font size=3 color=black>
	<pre>
	<center><h2>Enter Employee Details:</h2><br>
	Emp no:<input type=text name=eno>
	Name:<input type=text name=enm>
	Address:<input type=text name=eadd>
	<input type=submit value=show name=submit>
	</center>
	</pre>
	</font>
	</form>
<body bgcolor=pink>
<font size=3 color=black>
<?php
	session_start();
	$_SESSION['eno']=$_GET['eno'];
	$_SESSION['enm']=$_GET['enm'];
	$_SESSION['eadd']=$_GET['eadd'];
?>
<html>
<body>
 <form method=post>
 <pre>
 	<center><h2>Enter Earnings of Employee:</h2>
 	Basic:<input type=text name=e1>
  	DA:<input type=text name=e2>
   	HRA:<input type=text name=e3>
   	<input type=submit value=Next>
   	</center>
   	</pre>
   	</form>
 </body>
</html>

<body bgcolor=gray>
<font size=3 color=black>
 <?php 
 	
 	$e1=$_POST['e1'];
 	$e2=$_POST['e2'];
 	$e3=$_POST['e3'];
 	echo"<h3> Employee Details</h3>";
 	echo"Emp no.:".$_SESSION['eno']."<br>";
 	echo"Emp name:".$_SESSION['enm']."<br>";
 	echo"Emp Address:".$_SESSION['eadd']."<br><br>";
 	echo"Basic:".$e1."<br>";
 	echo"DA:".$e2."<br>";
 	echo"HRA:".$e3."<br>";
 	$total=$e1+$e2+$e3;
 	echo"<h2>Total Earnings are:".$total."</h2>";
 ?>
 	
 	

 	

	
	 
	
