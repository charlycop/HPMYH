<?php

// On demande les 100 derniers billets (modèle)
include_once('modele/get_orders.php');
$order = get_orders($_GET['order']);

// On affiche la page (vue)
include_once('vue/modif_order.php');