<!DOCTYPE HTML>
    <head>
        <title>海派名媛汇</title>
        <meta charset="utf-8" />
         <link rel="stylesheet" href="vue/style.css" />
    </head>
        
    <body>
        
<!-- Formulaire -->   
    <div class="nouveau_billet">
        <h2 class="titre_inscription"><?php echo $_SESSION['nickname'] ?>的新订单</h2>
        <form enctype="multipart/form-data" action="controleur/post_add_ems.php" method="post">
            <label name="tracking">COLIS : <input type="text" name="tracking" id="tracking" size="13" maxlength="13" placeholder="CC266373855FR" required/></label> - 
            <label name="price">PRIX : <input type="tel" name="price" id="price" size="5" maxlength="5" placeholder="i.e.2390" required/>¥</label>
            <HR>
            <div id="liste_order">
                <?php
                foreach ($parcel_without_ems as $order)
                { ?>
           
                   
                    <?php echo $order['description']; ?> - 
                    <?php
                    if (isset($order['picture']))
                    {
                        $order_picture = 'vue/img/orders/'.$order['id_order'].'_85x85'.$order['picture'].'';
                        $order_picture500 = 'vue/img/orders/'.$order['id_order'].'_500x500'.$order['picture'].'';
                    }

                    else
                    {
                        $order_picture = 'vue/img/orders/default.png';
                        $order_picture500 = '#';
                    }
                    ?> 
                    
                    <a href="<?php echo $order_picture500; ?>"><img src="<?php echo $order_picture; ?>" /></a>
                    <input type="checkbox" name="order_id[]" value="<?php echo $order['id_order']; ?>">
                
                        <HR>
                <?php
                } 
                ?>
            </div>
            <div class="bouton"><input type="submit" value="提交"/></div>                

        </form>


    </div>

</body>
</html>