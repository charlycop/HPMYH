<?php
{
        function post_modif_order($id_order,$order_description,$ref,$sell_price,$customer_paid)
    {
        global $bdd;       
        $req = $bdd->prepare('UPDATE orders SET description = :description, reference = :reference, sell_price = :sell_price, customer_paid = :customer_paid WHERE id_order = :order');
        $req->execute(array(
			'order' => $id_order,
            'reference' => $ref,
            'description' => $order_description,
            'sell_price' => $sell_price,
            'customer_paid' => $customer_paid
			));

        return True;
    }
}