<?php

// En PHP < 4.1.0, $HTTP_POST_FILES doit être utilisé 
//    à la place de $_FILES.
$uploaddirtmp = '../vue/img/avatars/tmp';
$uploadfile = $uploaddirtmp . basename($_FILES['userfile']['name']);

//On lance les vérification
/*if (preg_match("`^[-0-9A-Z_\.]+$`i",$_FILES['userfile']['name']))
{
    echo "La syntaxe du fichier est verifiee et valide.";

    if ((mb_strlen($_FILES['userfile']['name']) > 255))
    {
    	echo "Le fichier doit avoir un nom de 255 caracteres maximum (y compris l'extension).";
    }
    else
    {
    	echo "cool, le fichier est assez court.";

    	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) 
	    {
	    echo "Le fichier est valide, et a ete telecharge avec succes.";
        include_once ('resize_avatars.php');
		} 
		else 
		{
	    echo "Attaque potentielle par telechargement de fichiers, format non reconnu.";
		}
    }
}

else {echo "Le nom du fichier est incorrect, veuillez recommencer apres avoir renommer le fichier ave des caracteres non accentues.";}


//Quoiqu'il arrive on efface le fichier de l'utilisateur
unlink ($uploadfile);

if (($avatar30) AND ($avatar85) AND ($avatar150) AND ($post_avatar))
{
    //On modifie temporairement la variable pour la session en cours
    $_SESSION['avatar'] = $pic_type;

    //On redirige sur la page membre
    header('Location: ../../membre.php');
}

else
{
    echo 'Une erreur s\'est produite lors de la creation des avatars.';
}