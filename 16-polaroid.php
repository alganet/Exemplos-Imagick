<?php

$image = new Imagick('goiania.png');
$image->cropThumbnailImage(400, 400);
$image->polaroidImage(new ImagickDraw("white"), 25);
header('Content-Type: image/png');
echo $image;
