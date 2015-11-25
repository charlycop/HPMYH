<?php

// On demande les 100 derniers billets (modèle)
include_once('modele/get_orders.php');
$orders = get_orders(0, 1000);

// On récupère les dépenses (modèle)
include_once('modele/get_expenses.php');
$expenses = get_expenses();

// On récupère les EMS (modèle)
include_once('modele/get_ems.php');
$liste_ems = get_ems();

// On affiche la page (vue)
include_once('vue/index.php');