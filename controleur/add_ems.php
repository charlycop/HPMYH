<?php
// On récupère la liste des orders sans tracking ems
include_once('modele/get_without_ems.php');
$parcel_without_ems = get_without_ems();

if (isset($parcel_without_ems)) 
{
	// On charge la vue avec le formulaire
	include_once ('vue/add_ems.php');
}

else
{
	echo 'ho ho problem to get the list of orders, please ask Charly';
}