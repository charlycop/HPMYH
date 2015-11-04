<?php

function post_ems_id($order, $id_ems)

    {
        global $bdd;
        $req = $bdd->prepare('UPDATE orders SET id_ems= :ems WHERE id_order= :id_order');
        $req->execute(array(
			'id_order' => $order,
			'ems' => $id_ems
			));
        
    return true;
    }