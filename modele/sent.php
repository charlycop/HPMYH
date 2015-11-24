<?php
{
        function sent($id_order)
    {
        
        global $bdd;       
        $req = $bdd->prepare('UPDATE orders SET sent_date = NOW() WHERE id_order = :order');
        $req->execute(array(
			'order' => $id_order
			));
    }
}