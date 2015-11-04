<?php
session_start(); // On démarre la session AVANT toute chose

// Connexion à la bdd
include_once('../modele/connexion_sql.php');

// On sécurise le titre avant l'injection dans la bdd
$order_clean = htmlspecialchars($_POST['order_description']);
$ref_clean = htmlspecialchars($_POST['order_reference']);
$sell_price = (int) $_POST['sell_price'];
$customer_paid = (int) $_POST['customer_paid'];
$id_order = (int) $_POST['id_order'];

// On poste le nouvel order
include_once('../modele/post_modif_order.php');

if (post_modif_order($id_order,$order_clean,$ref_clean,$sell_price,$customer_paid))
{
	//Varialbe pour le processus d'image
	$last_id_order=$id_order;

	// On s'occupe de la photo
		$uploaddirtmp = '../vue/img/orders/tmp/';
		$uploadfile = $uploaddirtmp . basename($_FILES['userfile']['name']);

	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile))
	{
		include_once ('resize_avatars.php');

		//Quoiqu'il arrive on efface le fichier de l'utilisateur
	    unlink ($uploadfile);

	    //On retourne sur la liste des billets
		header('Location: ../index.php');
	}

	else
	{
		echo 'ho ho problem with the picture, please ask Charly';
	}
}

else
{
	echo 'ho ho problem to save the new datas, please ask Charly';
}