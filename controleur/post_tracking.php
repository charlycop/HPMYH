<?php
session_start(); // On démarre la session AVANT toute chose
include_once('../modele/connexion_sql.php');

// On sécurise le titre  et l'id du billet avant l'injection dans la bdd
$tracking = htmlspecialchars($_POST['tracking']);
$id_order = (int) $_POST['id_order'];

// On met à jour le tracking
include_once('../modele/post_tracking.php');
post_tracking($id_order, $tracking);

//On retourne sur la liste des billets
header('Location: ../index.php');