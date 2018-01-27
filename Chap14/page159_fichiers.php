<?php
$monfichier=fopen('U:\Programs\xampp\htdocs\tests\Files\compteur.txt','r+');
$contenu_ligne=fgets($monfichier);
echo 'la premiere ligne de compteur.txt contient ; ' . $contenu_ligne ; 



$contenu_ligne=$contenu_ligne + 1 ;
fseek($monfichier,0);
fputs($monfichier,$contenu_ligne);
fclose($monfichier);

echo 'la premiere ligne de compteur.txt contient maintenant ; ' . $contenu_ligne ; 

?>

