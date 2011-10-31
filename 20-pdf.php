<?php

$image = new Imagick('document.pdf[5]');
$image->setFormat("png");
header('Content-Type: image/png');
echo $image;
