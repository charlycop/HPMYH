<?php
session_start(); // On démarre la session AVANT toute chose
include_once('../modele/connexion_sql.php');

// On demande les 100 derniers billets (modèle)
include_once('../modele/get_orders.php');
$orders = get_orders(0, 1000);

header("Content-Type: text/plain");
header("Content-disposition: attachment; filename=orders.csv");
$out = fopen('PHP://output', 'w');
fputcsv($out, array(
"Date",
"Name",
"Customer",
"Product",
"Selling Price",
"Already Paid",
"Buying price"
));

foreach( $orders as $order ):
    fputcsv($out, array(
        $order['date_order'],
        $order['nickname'],
        $order['reference'],
        $order['description'],
        $order['sell_price'],
        $order['customer_paid'],
        $order['pupuce_paid']
    ));
endforeach;
fclose($out);