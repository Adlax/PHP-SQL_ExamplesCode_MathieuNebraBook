<p>
	<?php
	if (isset($_POST['telephone']))
	{
		$_POST['telephone']=htmlspecialchars($_POST['telephone']);

		if(preg_match("#^0[1-68]([-. ][0-9]{2}){4}$#",$_POST['telephone']))
		{
			echo 'le numero'.$_POST['telephone'].'entré est un numéro <strong>valide</strong> <br />';
		}
		else
		{
			echo 'le numero'.$_POST['telephone'].'entré est un numéro <strong>invalide</strong> <br />';
		}
	}
	?>
</p>

<form method="post">
	<p>
		<label for="telephone">Votre téléphone ? </label> : <input id="telephone" name="telephone" /> <br />;
		<input type="submit" value="Verifier le numéro entré" />
	</p>
</form>


