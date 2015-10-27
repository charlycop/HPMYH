<?php
session_start(); // On démarre la session AVANT toute chose
include_once('../modele/connexion_sql.php');

// On sécurise le titre  et l'id du billet avant l'injection dans la bdd
$amount = (int) $_POST['pupuce_paid'];
$id_order = (int) $_POST['id_order'];

// On met à jour le tracking
include_once('../modele/post_pupuce_paid.php');
post_pupuce_paid($id_order, $amount);

//On retourne sur la liste des billets
header('Location: ../index.php');