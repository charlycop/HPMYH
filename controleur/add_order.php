<?php
session_start(); // On démarre la session AVANT toute chose

// Connexion à la bdd
include_once('../modele/connexion_sql.php');

// On sécurise le titre avant l'injection dans la bdd
$order_clean = htmlspecialchars($_POST['order_description']);
$ref_clean = htmlspecialchars($_POST['order_reference']);

// On poste le nouvel order
include_once('../modele/post_order.php');
post_order($order_clean,$_SESSION['id'],$ref_clean);

// On récupère le dernier order_id
include_once('../modele/get_id_last_order.php');
$last_order=get_id_last_order();

// On s'occupe de la photo
	$uploaddirtmp = '../vue/img/orders/tmp/';
	$uploadfile = $uploaddirtmp . basename($_FILES['userfile']['name']);

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile))
{
	include_once ('resize_avatars.php');

	//Quoiqu'il arrive on efface le fichier de l'utilisateur
    unlink ($uploadfile);
}
else
{}



//On retourne sur la liste des billets
header('Location: ../index.php');