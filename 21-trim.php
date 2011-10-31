<?php

$image = new Imagick('document.pdf[5]');
$image->setFormat("png");
$image->trimImage(0);
header('Content-Type: image/png');
echo $image;
