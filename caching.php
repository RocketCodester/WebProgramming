<?php
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Thu, 31 May 1984 04:35:00 GMT");

// 30 Days from now
$date = gmdate("D, j M Y H:i:s", time() + 2592000);
header("Expires: " . $date . " UTC");
header("Cache-Control: Public");
header("Pragma: Public");