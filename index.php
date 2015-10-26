<?php
session_start(); // On démarre la session AVANT toute chose
include_once('modele/connexion_sql.php');

if (isset($_SESSION['id']))
{
	include_once('controleur/index.php');
}
elseif (isset($_GET['id'])) 
{
	//On ferme la session vide
	session_destroy();

	// On démarre la réelle session
	session_start();
    $_SESSION['id'] = $_GET['id'];
    $_SESSION['nickname'] = $_GET['nick'];
    
    // On redirige sur l'accueil
	include_once('controleur/index.php');
}

else
{   
	// On redirige sur la page de login
	header('Location: controleur/login.php');
}