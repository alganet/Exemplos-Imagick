<?php

$image = new Imagick('goiania.png');
$image->cropThumbnailImage(400, 400);
$image->setImageOpacity(0.5);
header('Content-Type: image/jpg');
echo $image;
