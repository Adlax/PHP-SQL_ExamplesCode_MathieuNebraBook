<?php

if(preg_match("#e{2,}#","eee"))
{
	echo "VRAI". "<br />";
}
else
{
	echo "FAUX". "<br />";
}


if(preg_match("#^Bla(bla){4}$#","Blablablabla"))
{
	echo "VRAI". "<br />";
}
else
{
	echo "FAUX". "<br />";
}


if(preg_match("#^[0-9]{6}$#","75695645"))
{
	echo "VRAI". "<br />";
}
else
{
	echo "FAUX". "<br />";
}


?>
