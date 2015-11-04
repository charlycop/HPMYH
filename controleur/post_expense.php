<?php
session_start(); // On démarre la session AVANT toute chose
include_once('../modele/connexion_sql.php');

// On sécurise le titre  et l'id du billet avant l'injection dans la bdd
$description = htmlspecialchars($_POST['expense']);
$price = (int) $_POST['price'];
$id_membre = (int) $_SESSION['id'];

// On insert la dépense
include_once('../modele/post_expense.php');

if (post_expense($description, $price, $id_membre))
{
	//On retourne sur la liste des billets
	header('Location: ../index.php');
}

else
{
	echo 'Huho, problem please ask Charly';
}