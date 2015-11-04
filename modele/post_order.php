<?php
{
        function post_order($order_description,$user,$ref,$sell_price,$customer_paid)
    {
        global $bdd;       
        $req = $bdd->prepare('INSERT INTO orders (id_user, reference, date_order, description, sell_price, customer_paid) VALUES (:id_user, :reference, NOW(), :description, :sell_price, :customer_paid)');
        $req->execute(array(
			'id_user' => $user,
            'reference' => $ref,
            'description' => $order_description,
            'sell_price' => $sell_price,
            'customer_paid' => $customer_paid
			));

        $resultat=$bdd->lastInsertId();
        return $resultat;
    }
}