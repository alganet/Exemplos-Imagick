<?php

$image = new Imagick('goiania.png');
$image->cropImage(400, 400, $pointX = 0, $pointY = 0);
header('Content-Type: image/png');
echo $image;
