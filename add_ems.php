<?php
session_start(); // On démarre la session AVANT toute chose
include_once('modele/connexion_sql.php');

// On redirige sur la page de login
include_once('controleur/add_ems.php');