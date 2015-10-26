<?php
{
        function get_email($id_membre)
    {
        global $bdd;       
        $req = $bdd->prepare('SELECT email FROM membres WHERE id_membre = :id_membre');
        $req->execute(array(
			'id_membre' => $id_membre
		));
		$resultat = $req->fetch();

        return $resultat;
    }
}