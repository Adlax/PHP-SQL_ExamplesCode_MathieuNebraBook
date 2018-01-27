<?php


if(preg_match("#zeros$#","Bonjour les zeros!"))
{
	echo "VRAI". "<br />";
}
else
{
	echo "FAUX". "<br />";
}


if(preg_match("#gr[aoi]s$#"," Tous les chats sont gris ! "))
{
	echo "VRAI". "<br />";
}
else
{
	echo "FAUX". "<br />";
}


if(preg_match("#[aiueoy]$#"," Je suis un zero"))
{
	echo "VRAI". "<br />";
}
else
{
	echo "FAUX". "<br />";
}


if(preg_match("#^[aiueoy]#"," Je suis un zero"))
{
	echo "VRAI". "<br />";
}
else
{
	echo "FAUX". "<br />";
}


?>

