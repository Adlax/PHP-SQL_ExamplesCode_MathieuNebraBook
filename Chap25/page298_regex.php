<?php

if(preg_match("#e+#","eee"))
{
	echo "VRAI". "<br />";
}
else
{
	echo "FAUX". "<br />";
}


if(preg_match("#u?#","ooo"))
{
	echo "VRAI". "<br />";
}
else
{
	echo "FAUX". "<br />";
}


if(preg_match("#[0-9]+#","magnifique"))
{
	echo "VRAI". "<br />";
}
else
{
	echo "FAUX". "<br />";
}


if(preg_match("#^Yaho+$#","Yahooo"))
{
	echo "VRAI". "<br />";
}
else
{
	echo "FAUX". "<br />";
}


if(preg_match("#^Bla(bla)*$#","Blablablabla"))
{
	echo "VRAI". "<br />";
}
else
{
	echo "FAUX". "<br />";
}



?>

