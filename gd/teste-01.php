<?php

header("Content-Type: image/png");

$image = imagecreate(256, 256);

$black = imagecolorallocate($image, 0, 255, 255);
$red = imagecolorallocate($image, 255, 0, 0);

imagestring($image, 5, 60, 60, "Curso de PHP 7", $red);

imagepng($image);
imagedestroy($image);

?>