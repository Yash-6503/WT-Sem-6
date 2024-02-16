<?php
$xml=simplexml_load_file("setA3.xml")
foreach($xml->book as $bk)
{
	echo"Book name=$bk->bookname"."<br>";
	echo"Book no=$bk->bookno"."<br>";
	echo"Author name=$bk->authorname"."<br>";
	echo"Price=$bk->price"."<br>";
	echo"Year=$bk->year"."<br>";
}
?>
