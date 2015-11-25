<?php

    function get_insideems($id_parcel)
    {
        global $bdd;
        $req = $bdd->prepare('SELECT    *
                                FROM orders
                                INNER JOIN ems ON
                                        orders.id_ems=ems.id
                                INNER JOIN users ON 
                                        orders.id_user=users.id
                                WHERE id_ems = :id_ems
                                ORDER BY date_order DESC');
        $req->bindParam(':id_ems',$id_parcel, PDO::PARAM_INT);
        $req->execute();
        $resultat = $req->fetchAll();
        
        return $resultat;
    }