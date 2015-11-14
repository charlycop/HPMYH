<?php
        function delete_order($id_order)
    {
        $id_order = (int) $id_order;
        
        global $bdd;    
        $req = $bdd->prepare('DELETE FROM orders WHERE id_order = :order');
		$req->execute(array(
		'order' => $id_order
		));

		return true;
    }