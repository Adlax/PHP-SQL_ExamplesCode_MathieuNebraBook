<?php
try
{	
	$bdd=new PDO('mysql:host=localhost;dbname=test','root','');
	echo ' DAIJOBU DESU !<br />';
	echo ' WELCOME TO THE MATRIX !<br />';
}
catch(Exception $e)
{	
	die('Ereur : ' . $e->getMessage());
}
?>
