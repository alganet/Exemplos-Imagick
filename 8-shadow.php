<?php

$image = new Imagick('goiania.png');
$image->cropThumbnailImage(400, 400);

$shadow = clone $image;
$shadow->setImageBackgroundColor("black");
$shadow->shadowImage(70, 5, 3, 3);
$shadow->compositeImage($image, 
                        Imagick::COMPOSITE_OVER, 0, 0);

header('Content-Type: image/png');
echo $shadow;
