<?php
if(isset($_POST['texte']))
{
	$texte=stripslashes($_POST['texte']);

	$texte=htmlspecialchars($texte);

	$texte=nl2br($texte);

	$texte=preg_replace('#\[b\](.+)\[/b\]#isU','<strong>$1</strong>',$texte);

	$texte=preg_replace('#\[i\](.+)\[/i\]#isU','<em>$1</em>',$texte);

	$texte=preg_replace('#\[color=(red|green|blue|yellow|purple|olive)](.+)\[/color\]#isU','<span style="color:$1">$2</span>',$texte);

	$texte=preg_replace('#http://[a-z0-9._/-]+#i','<a href="$0">$0 </a>',$texte);

	echo $texte.'<br /><hr/>';
}
?>

<p>
	Bienvenue dans le parser <br />
</p>

<p>
amusez vous a rentrer du bbcode
</p>
  

<blockquote style="font-size:0.8em">
	<p>
	Je suis un gros [b] zero [/b] et pourtant j'ai réussi a [i] comprendre [/i] sur http://www.siteduzero.fr <br />
Je vous [b] [color=green] recommande [/color] [/b] d'aller sur ce site et faire ca [i] [color=purple] vous aussi [/color] [/i]!
	</p>
</blockquote>

<form method="post">
	<p>
	<label for="texte"> Entrer votre texte ici : </label> <br /> : 
	<textarea id="texte" name="texte" cols="50" rows="8"> </textarea> <br />
	<input type="submit" value="tester" />
	</p>
</form>


	




	
