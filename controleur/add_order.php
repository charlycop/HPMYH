<?php
session_start(); // On démarre la session AVANT toute chose
include_once('../modele/connexion_sql.php');

// On sécurise le titre avant l'injection dans la bdd
$order_clean = htmlspecialchars($_POST['order_description']);
$ref_clean = htmlspecialchars($_POST['order_reference']);
$sell_price = (int) $_POST['sell_price'];
$customer_paid = (int) $_POST['customer_paid'];

// On poste le nouvel order
include_once('../modele/post_order.php');
$last_id_order=post_order($order_clean,$_SESSION['id'],$ref_clean,$sell_price,$customer_paid);

if (isset($last_id_order))
{
	// On s'occupe de la photo
	$uploaddirtmp = '../vue/img/orders/tmp/';
	$uploadfile = $uploaddirtmp . basename($_FILES['userfile']['name']);

	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile))
	{
	include_once ('resize_avatars.php');

	//Quoiqu'il arrive on efface le fichier de l'utilisateur
    unlink ($uploadfile);

    // Tout est OK, on retourne sur la liste des billets
	header('Location: ../index.php');
    
	}
	else
	{
		echo 'Error when proceeding the picture, ask Charly';
	}

}

else
{
	echo 'Error while addying the new order, ask Charly.';
}