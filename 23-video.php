<?php

$image = new Imagick('video.mpg[5]');
$image->setFormat("png");
header('Content-Type: image/png');
echo $image;
