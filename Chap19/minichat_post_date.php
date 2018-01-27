<?php
try
{	
	$bdd=new PDO('mysql:host=localhost;dbname=test','root','');
	
}
catch(Exception $e)
{	
	die('Erreur : ' . $e->getMessage());
}

$req=$bdd->prepare('INSERT INTO minichat (pseudo,message,date)VALUES (:pseudo,:message, NOW())');
$req->execute(array(
		    'pseudo'=>$_POST['pseudo'],
		    'message'=>$_POST['message'])) or die(print_r($req->errorInfo()));
header('Location: minichat_date.php');
?>





