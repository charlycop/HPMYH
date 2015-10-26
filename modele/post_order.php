<?php
{
        function post_order($order_description,$user,$ref)
    {
        global $bdd;       
        $req = $bdd->prepare('INSERT INTO orders (id_user, reference, date_order, description) VALUES (:id_user, :reference, NOW(), :description)');
        $req->execute(array(
			'id_user' => $user,
            'reference' => $ref,
            'description' => $order_description
			));
    }
}