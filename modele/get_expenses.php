<?php

    function get_expenses()
    {
        global $bdd;
        $req = $bdd->prepare('SELECT    *
                                FROM expenses
                                INNER JOIN users ON 
                                        expenses.id_user=users.id 
                                ORDER BY date_expense DESC');
        $req->execute();
        $resultat = $req->fetchAll();
        
        return $resultat;
    }