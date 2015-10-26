<?php

function post_avatar($id_order, $pic_type)

    {
        global $bdd;
        $req = $bdd->prepare('UPDATE orders SET picture= :picture WHERE id_order= :id_order');
        $req->execute(array(
			'id_order' => $id_order,
			'picture' => $pic_type
			));
    return true;
    }