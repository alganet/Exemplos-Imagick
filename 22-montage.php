<?php

$image = new Imagick('document.pdf[3-6]');
$image->setFormat("png");
$image = $image->montageImage(new ImagickDraw, '4x1', null, 
                           Imagick::MONTAGEMODE_FRAME, '0');
header('Content-Type: image/png');
echo $image;
