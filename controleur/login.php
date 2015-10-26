<?php
include_once('../modele/connexion_sql.php');

// Récupération des users
include_once ('../modele/get_users.php');
$users = get_users();

include_once ('../vue/login.php');