<?php
include_once('page323_Membre.class.php');

$membre=new Membre();
$membre->setPseudo('Baltringue qui schlingue');
$membre->setEMail('h.videlier@gmail.com');

echo 'hé toi ' . $membre->getPseudo() . ' je vais te bannir tiens prend ca !';
$membre->bannir();
