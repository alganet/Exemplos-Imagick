<?php

$image = new Imagick('goiania.png');
$image->thumbnailImage(400, 400, $preserveAspect = true);
header('Content-Type: image/png');
echo $image;
