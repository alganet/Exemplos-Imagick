<?php

$image = new Imagick('goiania.png');
$image->cropThumbnailImage(400, 400);
$image->vignetteImage(0, 0, 2, 2);
header('Content-Type: image/png');
echo $image;
