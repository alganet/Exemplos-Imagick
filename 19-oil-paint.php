<?php

$image = new Imagick('goiania.png');
$image->cropThumbnailImage(400, 400);
$image->oilPaintImage(3);
header('Content-Type: image/png');
echo $image;
