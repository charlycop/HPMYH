<?php
session_start(); // On démarre la session AVANT toute chose

include_once('../modele/connexion_sql.php');

$id_order = (int) $_GET['order'];

//on inclus la fonction bought
include_once('../modele/tobuy.php');

//on appelle la fonction
tobuy($id_order);

// On redirige sur la liste
header('Location: ../index.php');