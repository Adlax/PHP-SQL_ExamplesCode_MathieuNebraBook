<p>
	<?php
	if (isset($_POST['mail']))
	{
		$_POST['mail']=htmlspecialchars($_POST['mail']);
		
		if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$_POST['mail']))
		{
			echo 'Le mail'.$_POST['mail'].' est un mail <strong>valide</strong> <br />!';
		}
		else
		{
			echo 'Le mail'.$_POST['mail'].' est un mail <strong>invalide</strong> <br />!';
		}
	}
	?>
</p>


<form method="post">
	<p>
		<label for="mail"> Entrez votre mail ici ; </label>: <input id="mail" name="mail" /><br />
		<input type="submit" value="Verifier la validité du mail" />
	</p>
</form>

		

