<?php

//On appelle la fonction
include_once ('../modele/image_resize.php');

//On créée les différentes tailles d'avatars
$uploaddir = '../vue/img/orders/';
$pic_type = strtolower(strrchr(basename($_FILES['userfile']['name']),"."));
$product85=image_resize($uploadfile, ''.$uploaddir.''.$last_id_order.'_85x85'.$pic_type.'', 85, 85, 1);
$product500=image_resize($uploadfile, ''.$uploaddir.''.$last_id_order.'_500x500'.$pic_type.'', 500, 500, 0);

//On modifie la variable définitivement pour les prochaines sessions
	include_once ('../modele/post_avatar.php');
	$post_avatar = post_avatar($last_id_order, $pic_type);