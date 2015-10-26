<?php

function post_tracking($id_order, $tracking)

    {
        global $bdd;
        $req = $bdd->prepare('UPDATE orders SET parcel= :parcel WHERE id_order= :id_order');
        $req->execute(array(
			'id_order' => $id_order,
			'parcel' => $tracking
			));
    return true;
    }