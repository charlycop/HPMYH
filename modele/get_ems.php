<?php

    function get_ems()
    {
        global $bdd;
        $req = $bdd->prepare('SELECT    *
                                FROM ems
                                ORDER BY date_envoi DESC');
        $req->execute();
        $resultat = $req->fetchAll();
        
        return $resultat;
    }