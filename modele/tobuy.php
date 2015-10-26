<?php
{
        function tobuy($id_order)
    {
        
        global $bdd;       
        $req = $bdd->prepare('UPDATE orders SET buy_date = NULL WHERE id_order = :order');
        $req->execute(array(
			'order' => $id_order
			));
    }
}