<?php

function post_customer_paid($id_order, $amount)

    {
        global $bdd;
        $req = $bdd->prepare('UPDATE orders SET customer_paid= :amount WHERE id_order= :id_order');
        $req->execute(array(
			'id_order' => $id_order,
			'amount' => $amount
			));
    return true;
    }