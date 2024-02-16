<?php
session_start();
$_SESSION['page_access_count']++;
echo "Page accessed ".$_SESSION['page_access_count']." times.";
?>