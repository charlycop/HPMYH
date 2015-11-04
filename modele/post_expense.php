<?php
        function post_expense($description,$price,$id_member)
    {
        global $bdd;       
        $req = $bdd->prepare('INSERT INTO expenses
        									(id_user, 
        								    description,
        								    price,
        								    date_expense)
        						VALUES (:id_user,
        								:description,
        								:price,
        								NOW())');
        $req->execute(array(
			'id_user' => $id_member,
            'description' => $description,
            'price' => $price
			));

        return true;
    }