<?php

// On sécurise la variable
$id_parcel = (int) $_GET['id'];
$tracking_parcel = htmlspecialchars($_GET['parcel']);

// On récupère le contenu du colis
include_once('modele/get_insideems.php');
$liste_orders = get_insideems($id_parcel);

// On affiche la page (vue)
include_once('vue/inside_ems.php');