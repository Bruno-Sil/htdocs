<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 255, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 440, 350, "Bruno Santos", $titleColor);
imagestring($image, 4, 370, 370, "Concluido em: ".date("d/m/y"), $titleColor);

header("Content-Type: image/jpeg");

imagejpeg($image);
imagedestroy($image);

?>