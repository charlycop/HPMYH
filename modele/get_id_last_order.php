<?php
{
        function get_id_last_order()
    {
        global $bdd;       
        $req = $bdd->prepare('SELECT id_order FROM orders ORDER BY id_order DESC LIMIT 0, 1');
        $req->execute();
		$resultat = $req->fetch();

        return $resultat;
    }
}