<?php
function Dire_Bonjour($nom)
{
	echo 'Bonjour '.$nom.' <br\>';
}
Dire_Bonjour(Annie);
Dire_Bonjour(Bob);
?>

<?php

function Calcul_Volume_Cone($rayon,$hauteur)
{
	return 3.14*$rayon*$rayon*$hauteur/3;
}
$vol;
$vol=Calcul_Volume_Cone(3,1);
echo 'Le volume d\'un cone de rayon 3 et de hauteur 1 vaut ; '.$vol.' units arb <br\>';
?>

