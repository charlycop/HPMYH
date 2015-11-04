<?php
    function get_without_ems()
    {
        global $bdd;
        $req = $bdd->prepare('SELECT description,
                                     picture,
                                     id_order
                                     FROM orders
                                WHERE id_ems IS NULL
                                ORDER BY date_order DESC');
        $req->execute();
        $resultat = $req->fetchAll();
        
        return $resultat;
    }