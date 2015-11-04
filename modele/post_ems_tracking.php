<?php

function post_ems_tracking($tracking, $price)

    {
        global $bdd;
        $req = $bdd->prepare('INSERT INTO ems (tracking, date_envoi, price) VALUES (:parcel, NOW(), :price)');
        $req->execute(array(
			'parcel' => $tracking,
			'price' => $price
			));
        
        $resultat=$bdd->lastInsertId();
        return $resultat;
    }