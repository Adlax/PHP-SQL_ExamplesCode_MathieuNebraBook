<?php


if(preg_match("#guitare#","J'aime jouer de la guitare"))
{
	echo "VRAI". "<br />";
}
else
{
	echo "FAUX". "<br />";
}


if(preg_match("#piano#","J'aime jouer de la guitare"))
{
	echo "VRAI". "<br />";
}
else
{
	echo "FAUX". "<br />";
}


if(preg_match("#GUITARE#","J'aime jouer de la guitare"))
{
	echo "VRAI". "<br />";
}
else
{
	echo "FAUX". "<br />";
}


if(preg_match("#GUITARE#i","J'aime jouer de la guitare"))
{
	echo "VRAI". "<br />";
}
else
{
	echo "FAUX". "<br />";
}


if(preg_match("#GUITARE|piano|bAnjo#i","J'aime jouer du banjo"))
{
	echo "VRAI". "<br />";
}
else
{
	echo "FAUX". "<br />";
}


?>

