<?php
$prenoms = array('Francois','Michel','Nicole','Veronique','Benoit');
for($num=0;$num<5;$num++)
{
	echo $prenoms[$num].'<br \>';
}
echo '<br \> FIN <br \>';
?>

<?php
$prenoms2[0]='Francois';
$prenoms2[1]='Michel';
$prenoms2[2]='Nicole';

foreach($prenoms2 as $element)
{
	echo $element.'<br \>';
}
echo '<br \>'. 'FIN'. '<br \>';
?>

<?php
$prenoms3[]='Francois';
$prenoms3[]='Michel';
$prenoms3[]='Bob';

foreach($prenoms3 as $element)
{
	echo $element.'<br \>';
}
echo '<br \> FIN <br \>';
?>



<?php
$coordonees=array(
					'prenom'=>'Francois',
					'nom'=>'Dupont',
					'adresse'=>'3 rue de ma teube',
					'ville'=>'Marseille');
					
foreach($coordonees as $element)
{
	echo $element.'<br \>';
}
echo '<br \> FIN <br \>';				
?>

<?php
$coordonees['prenom']='Francois';
$coordonees['nom']='Dupont';
$coordonees['adresse']='3 rue de ma teube';
$coordonees['ville']='Marseille';

foreach($coordonees as $cle => $element)
{
	echo '['.$cle.']'.$element.'<br \>';
}			
?>

<?php
$coordonees['prenom']='Francois';
$coordonees['nom']='Dupont';
$coordonees['adresse']='3 rue de ma teube';
$coordonees['ville']='Marseille';

echo '<pre>';
print_r($coordonees);
echo '<pre>';
?>

<?php
$coordonees['prenom']='Francois';
$coordonees['nom']='Dupont';
$coordonees['adresse']='3 rue de ma teube';
$coordonees['ville']='Marseille';

if (array_key_exists('nom',$coordonees))
{
	echo 'array key exists a bien trouve la clef "nom" dans l\'array coord';
	echo '<br \> FIN <br \>';
}
if (array_key_exists('pays',$coordonees))
{
	echo 'array key exists a bien trouve la clef "pays" dans l\'array coord';
	echo '<br \> FIN <br \>';
}
if(in_array('Dupont',$coordonees))
{
	echo 'in array a bien trouve la valeur "Dupont" dans l\'array coord';
	echo '<br \> FIN <br \>';
}
if(in_array('Marseille',$coordonees))
{
	$position;
	$position = array_search('Marseille',$coordonees);
	echo 'la valeur "Marseille" est bien dans le tableau et sa position de cle est ; '.$position.'<br \>';
	
}
echo '<br \> FIN <br \>';
?>

