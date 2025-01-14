<?php
setcookie("affiliate_id", "42", time() + (86400 * 30), "/", ".budexpressnow.co", true, true);
header("Content-Type: image/png");
readfile("pixel.png"); // A transparent 1x1 image
?>
