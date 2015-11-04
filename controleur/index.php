<?php

// On demande les 100 derniers billets (modèle)
include_once('modele/get_orders.php');
$orders = get_orders(0, 1000);

// On les dépenses (modèle)
include_once('modele/get_expenses.php');
$expenses = get_expenses();

// On affiche la page (vue)
include_once('vue/index.php');