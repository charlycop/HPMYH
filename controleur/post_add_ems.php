<?php
session_start(); // On démarre la session AVANT toute chose
include_once('../modele/connexion_sql.php');

//On enregistre le tracking
include_once('../modele/post_ems_tracking.php');
$last_ems=post_ems_tracking($_POST['tracking'],$_POST['price']);

if (isset($last_ems))

{
	//On appelle la fonction pour modifier les orders
	include_once('../modele/post_ems_id.php');

	// On récupère les numéros d'order et on met à jour la base
	$order = $_POST['order_id'];
	  	$N = count($order);

	    for($i=0; $i < $N; $i++)
	    {
	      post_ems_id($order[$i], $last_ems);
	    }

	// On redirige sur la liste
	header('Location: ../index.php');
}

else
{
	echo 'Oups problem to save the EMS tracking, plese ask Charly.';
}