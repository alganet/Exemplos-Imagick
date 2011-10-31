<?php

$image = new Imagick('goiania.png');
$image->thumbnailImage(600, 600, true);
$image->setFormat("gif");
$w = $image->getImageWidth();
$h = $image->getImageHeight();
foreach (range(0, 10) as $n) {
    $frame = clone $image;
    $frame->liquidRescaleImage($w, $h-($n*20), 2, 10);
    $image->newImage($w, $h, "white");
    $image->compositeImage($frame, 
                           Imagick::COMPOSITE_OVER, 0, 0);
    $image->setImageDelay(30);
}
header('Content-Type: image/gif');
echo $image->getImagesBlob();
