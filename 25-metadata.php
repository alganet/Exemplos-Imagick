<pre><?php

$image = new Imagick('metadata.jpg');
print_r($image->getImageProperties());
