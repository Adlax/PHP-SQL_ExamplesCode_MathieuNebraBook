<?php

if(preg_match("#[a-z]#"," Je suis un zero "))
{
	echo "VRAI". "<br />";
}
else
{
	echo "FAUX". "<br />";
}


if(preg_match("#[A-Z0-9]#"," je suis un zero "))
{
	echo "VRAI". "<br />";
}
else
{
	echo "FAUX". "<br />";
}

if(preg_match("#<h[2-6]>#"," <h1> je suis une balise html </h1> "))
{
	echo "VRAI". "<br />";
}
else
{
	echo "FAUX". "<br />";
}


if(preg_match("#[^A-Z0-9]#"," Je suis un ZERO "))
{
	echo "VRAI". "<br />";
}
else
{
	echo "FAUX". "<br />";
}


if(preg_match("# ^[^a-z] #" , " je suis un zero "))
{
	echo "VRAI". "<br />";
}
else
{
	echo "FAUX". "<br />";
}


?>



