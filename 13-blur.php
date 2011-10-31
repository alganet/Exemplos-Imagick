<?php

$image = new Imagick('goiania.png');
$image->cropThumbnailImage(400, 400);
$image->blurImage(5, 10);
header('Content-Type: image/png');
echo $image;
