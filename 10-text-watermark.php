<?php

$image = new Imagick('goiania.png');
$image->cropThumbnailImage(400, 400);
$image->roundCorners(10, 10);

$draw = new ImagickDraw;
$draw->setFontSize(20);
$draw->setGravity(Imagick::GRAVITY_SOUTHEAST);
$draw->setFillOpacity(0.5);

$image->annotateImage($draw, 10, 10, 0, "Mágica!");

header('Content-Type: image/png');
echo $image;
