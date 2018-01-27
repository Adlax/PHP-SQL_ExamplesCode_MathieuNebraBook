<?php
$chaine='Je suis une chaine de caracteres';
$long;
$long=strlen($chaine);
echo 'La chaine de caracteres contient '.$long.'caracteres <br \>';
?>

<?php
$new_string = str_replace('b','p','bim bam boum');
echo $new_string.'<br \>';
?>

<?php
echo 'La chaine suivante va etre shuffelisee ; Je suis un gros homow <br \>';
$string = 'Je suis un gros homow';
echo str_shuffle($string).'<br \>';
?>


<?php
//echo 'Om va passer la phrase suivante en minuscule ; JE SUIS CHIANT <br\>'
//$string = 'JE SUIS CHIANT';
//echo strtolower($string);
?>


<?php
$annee = date('Y');
$mois = date('m');
$jour = date('d');
$heure = date('H');
$min = date('i');

echo 'La date est ; '.$jour.'/'.$mois.'/'.$annee.' et l\'heure est ; '.$heure.'/'.$min;

?>

