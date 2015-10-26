<?php
{
    function get_orders($offset, $limit)
    {
        global $bdd;
        $offset = (int) $offset;
        $limit = (int) $limit;
        $req = $bdd->prepare('SELECT    *
                                FROM orders
                                INNER JOIN users ON 
                                        orders.id_user=users.id 
                                ORDER BY date_order DESC LIMIT :offset, :limit');
        $req->bindParam(':offset', $offset, PDO::PARAM_INT);
        $req->bindParam(':limit', $limit, PDO::PARAM_INT);
        $req->execute();
        $resultat = $req->fetchAll();
        
        return $resultat;
    }
}
