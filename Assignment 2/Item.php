<?php
$xml=simplexml_load_file("Item.xml")
foreach($xml->item as $itm)
{
	echo"Item name=$itm->itemname"."<br>";
	echo"Item price=$itm->itemprice"."<br>";
	echo"quantity=$itm->quantity"."<br>";
}
?>
