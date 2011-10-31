<?php

$image = new Imagick('goiania.png');
header('Content-Type: image/png');
echo $image;
