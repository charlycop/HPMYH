<?php
session_start(); // On démarre la session AVANT toute chose
include_once('../modele/connexion_sql.php');
include_once('../modele/delete_order.php');

//securisation des paramètres
$id_order = (int) $_GET['order'];
$pic = htmlspecialchars($_GET['pic']);

if (isset($id_order))
{
	//On supprime la commande
	delete_order($id_order);
	
		//On efface les photos
		if (isset($pic))
		{
			$pic_500x500 = '../vue/img/orders/'.$id_order.'_85x85'.$pic.'';
			$pic_85x85   = '../vue/img/orders/'.$id_order.'_500x500'.$pic.'';

			unlink ($pic_500x500);
			unlink ($pic_85x85);

			//On retourne sur la liste des billets
			header('Location: ../index.php');
		}

		else
		{
			//On retourne sur la liste des billets
			header('Location: ../index.php');
		}
}

else
{
	echo 'the order number is missing';
}	