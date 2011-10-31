<?php

$image = new Imagick('goiania.png');
$image->cropThumbnailImage(400, 400);
$image->charcoalImage(1, 1);
header('Content-Type: image/png');
echo $image;
