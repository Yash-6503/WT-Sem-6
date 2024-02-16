<?php
$pageAccessCount = isset($_COOKIE['page_access_count']) ? 
$_COOKIE['page_access_count'] + 1 : 1;
setcookie('page_access_count', $pageAccessCount);
echo ("Page accessed $pageAccessCount times.");
?>