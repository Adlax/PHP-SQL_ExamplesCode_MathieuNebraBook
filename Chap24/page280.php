<?php
header("Content-type: image/png");
$image = imagecreate(200,50);

$orange=imagecolorallocate($image,255,128,0);
$bleu=imagecolorallocate($image,0,0,255);
$bleuclair=imagecolorallocate($image,155,227,254);
$noir=imagecolorallocate($image,0,0,0);
$blanc=imagecolorallocate($image,255,255,255);

imagestring($image,4,35,15,"Salut les nazis!",$blanc);


ImageSetPixel($image,100,100,$bleu);
//imagepng($image);

ImageLine($image,30,30,120,120,$noir);
//imagepng($image);

ImageEllipse($image,30,30,100,50,$noir);
//imagepng($image);

ImageRectangle($image,30,30,160,120,$noir);
//imagepng($image);

$points=array(10,40,120,50,160,160);
ImagePolygon($image,$points,3,$noir);
imagepng($image);

?>
