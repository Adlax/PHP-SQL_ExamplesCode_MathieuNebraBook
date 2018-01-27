<?php

if(isset($_FILES['fichier_upload']) AND $_FILES['fichier_upload']['error']==0)
{
	if($_FILES['fichier_upload']['size']<=1000000)
	{
		$infos_fichier=pathinfo($_FILES['fichier_upload']['name']);
		$extension=$infos_fichier['extension'];
		$extensions_autorisees=array('jpeg','jpg','gif','png');
		
		echo '<pre>' ;
		print_r($extensions_autorisees);
		echo '</pre>';
		
		if( in_array($extension,$extensions_autorisees) )
		{
			
			echo ' L envoi a reussi ';
		}
		
	}

}
?>