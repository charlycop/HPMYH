<?php
{
        function get_users()
    {
        global $bdd;       
        $req = $bdd->prepare('SELECT * FROM users');
        $req->execute();
		$resultat = $req->fetchAll();

        return $resultat;
    }
}