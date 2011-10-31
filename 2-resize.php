<?php

$image = new Imagick('goiania.png');
$image->scaleImage(400, 400);
header('Content-Type: image/png');
echo $image;
