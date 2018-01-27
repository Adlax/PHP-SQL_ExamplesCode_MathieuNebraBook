<?php
header("Content-type: image/jpeg");

$source = imagecreatefrompng("logo.png");
$destination = imagecreatefromjpeg("couchersoleil.jpeg");

$largeur_source = imagesx($source);
$hauteur_source = imagesy($source);
$largeur_destination = imagesx($destination);
$hauteur_destination = imagesy($destination);

$destination_x = $largeur_destination - $largeur_source;
$destination_y = $hauteur_destination - $hauteur_source;

imagecopymerge($destination,$source,$destination_x,$destination_y,0,0,$largeur_source,$hauteur_source,60);

imagejpeg($destination);
?>

