<?php

$image = new Imagick('video.mpg[5]');
$image->setFormat("png");
$image->setResourceLimit(Imagick::RESOURCETYPE_MEMORY, 5);
header('Content-Type: image/png');
echo $image;
