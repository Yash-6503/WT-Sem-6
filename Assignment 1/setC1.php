<html>
<body bgcolor=#67158>
	<form method=get>
	<font size=4 color=white>
	<pre>
	<center><h2>Enter Customer Details:</h2><br>
	Name:<input type=text name=cnm>
	Address:<input type=text name=cadd>
	Mobile no:<input type=text name=mob>
	<input type=submit value=show name=submit>
	</center>
	</pre>
	</font>
	</form>
<body bgcolor=pink>
<font size=4 color=white>
<?php
	session_start();
	$_SESSION['cnm']=$_GET['cnm'];
	$_SESSION['cadd']=$_GET['cadd'];
	$_SESSION['mob']=$_GET['mob'];
?>
<html>
<body>
 <form method=post>
 <pre>
 	<center><h2>Enter Products details:</h2>
 	ProdName:<input type=text name=e1>
  	QTY:<input type=text name=e2>
   	Rate:<input type=text name=e3>
   	<input type=submit value=Next>
   	</center>
   	</pre>
   	</form>
 </body>
</html>

<body bgcolor=gray>
<font size=4 color=white>
 <?php 
 	
 	$e1=$_POST['e1'];
 	$e2=$_POST['e2'];
 	$e3=$_POST['e3'];
 	echo"<center><h3><u>Customer Details</u></h3>";
 	echo"Customer name.:".$_SESSION['cnm']."<br>";
 	echo"Address:".$_SESSION['cadd']."<br>";
 	echo"Mobile No:".$_SESSION['mob']."<br><br>";
 	echo"Product name:".$e1."<br>";
 	echo"Qty:".$e2."<br>";
 	echo"Rate:".$e3."<br>";
 	$total=$e2*$e3;
 	echo"<h2>Total:".$total."</h2></center>";
 	
 ?>
 	
 	

 	

	
	 
	
