<?php
session_start(); // On démarre la session AVANT toute chose
include_once('../modele/connexion_sql.php');

// On les dépenses (modèle)
include_once('../modele/get_expenses.php');
$expenses = get_expenses();

header("Content-Type: text/plain");
header("Content-disposition: attachment; filename=expenses.csv");
$out = fopen('PHP://output', 'w');
fputcsv($out, array(
"Date",
"Name",
"Description",
"Price"
));

foreach( $expenses as $expense ):
    fputcsv($out, array(
        $expense['date_expense'],
        $expense['nickname'],
        $expense['description'],
        $expense['price']
    ));
endforeach;
fclose($out);