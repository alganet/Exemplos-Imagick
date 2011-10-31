<?php

$image = new Imagick('goiania.png');
$image->liquidRescaleImage(400, 400, 10, 10);
header('Content-Type: image/png');
echo $image;
