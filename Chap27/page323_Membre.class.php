<?php
class Membre
{	
	private $pseudo;
	private $email;
	private $signature;
	private $actif;
	
	
	
	public function getPseudo()
	{
		return $this->pseudo;
	}
	
	public function setPseudo($nouveaupseudo)
	{
		if(!empty($nouveaupseudo) AND strlen($nouveaupseudo)<15)
		{$this->pseudo=$nouveaupseudo;}
	}
		
	public function setEMail($nouvelemail)
	{
		$this->email=$nouvelemail;
	}
		
	public function envoyerEMail($titre,$message)
	{
		mail($this->email,$titre,$message);
	}
		
	public function bannir()
	{
		$this->actif=false;
		$this->envoyerEMail('Vous etes banni batard !','ne revenez jamais ou c\'est la mort!...signé : moi meme ');
	}
	
	public function __destruct()
	{
		echo 'cet objet a été détruit !';
	}
}
?>
