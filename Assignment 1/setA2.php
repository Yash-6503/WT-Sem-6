<html>
<head></head>
	<body>
	<form method=post>
	<pre>	
	Enter text			 	  :<input type=text name=t1><br>
	Enter style				 : <select name=t2>
							 
							 <option value=b>Bold</option>
							 <option value=i>Italic</option>
							 <option value=u>underline</option>
							 </select><br>
	Enter background color 		 	:<select name=t3>
							 
							 <option value=white>White</option>
							 <option value=pink>Pink</option>
							 <option value=yellow>Yellow</option>
							 </select><br>
	Enter size				 :<select name=t4>
							
							 <option value=4>4</option>
							 <option value=6>6</option>
							 <option value=2>2</option>
							 </select><br>
	Enter font color		  :<select name=t5>
							
							 <option value=red>Red</option>
							 <option value=blue>Blue</option>
							 <option value=black>Black</option>
							 </select><br>
	<input type=submit name=btn value=submit>
	</pre>
	</form>
	</body>
</html>
<?php
	if(isset($_POST['btn']))
	{
	setcookie('text',$_POST['t1']);
	setcookie('style',$_POST['t2']);
	setcookie('bgcolor',$_POST['t3']);
	setcookie('size',$_POST['t4']);
	setcookie('color',$_POST['t5']);
	echo"<html><form method=post>Your settings:text=".$_POST['t1'];
	echo"<br>style=".$_POST['t2'];
	echo"<br>Bgcolor=".$_POST['t3'];
	echo"<br>size=".$_POST['t4'];
	echo"<br>font color=".$_POST['t5']."<br>";
	echo"<br></html><br>";
	
?>

<?php
	$text=$_COOKIE['text'];
	$s=$_COOKIE['style'];
	$b=$_COOKIE['bgcolor'];
	$sz=$_COOKIE['size'];
	$c=$_COOKIE['color'];
	echo"<html><body bgcolor=$b><font size=$sz color=$c><$s>$text</$s></font></body></html>";
	}
?>
