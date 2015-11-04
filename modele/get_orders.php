<?php
if (!isset ($_GET['order']))
{
    function get_orders($offset,$limit)
    {
        global $bdd;
        $offset = (int) $offset;
        $limit = (int) $limit;
        $req = $bdd->prepare('SELECT    *
                                FROM orders
                                INNER JOIN users ON 
                                        orders.id_user=users.id
                                LEFT JOIN ems ON
                                        orders.id_ems=ems.id
                                ORDER BY date_order DESC LIMIT :offset, :limit');
        $req->bindParam(':offset', $offset, PDO::PARAM_INT);
        $req->bindParam(':limit', $limit, PDO::PARAM_INT);
        $req->execute();
        $resultat = $req->fetchAll();
        
        return $resultat;
    }
}

else
{
    function get_orders($id_order)
    {
        global $bdd;
        $id_order = (int) $id_order;
        $req = $bdd->prepare('SELECT    *
                                FROM orders
                                INNER JOIN users ON 
                                        orders.id_user=users.id 
                                WHERE id_order = :id_order');
        $req->execute(array(
            'id_order' => $id_order
            ));
        $resultat = $req->fetch();
        
        return $resultat;
    }
}
