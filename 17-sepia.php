<?php

$image = new Imagick('goiania.png');
$image->cropThumbnailImage(400, 400);
$image->sepiaToneImage(80);
header('Content-Type: image/png');
echo $image;
