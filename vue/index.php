<!DOCTYPE HTML>
    <head>
        <title>海派名媛汇</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="vue/style.css" />
    </head>
        
    <body>
<?php

foreach($orders as $order)
{
?>
<div class="news">
    <div class="billet_titre">
        
        <h3><?php 
        $ref = htmlspecialchars($order['reference']);
        echo $ref; ?> - <?php echo $order['date_order']; ?></h3>
    </div>

    <div class="billet">

        <div class="billet_auteur">
           
           <a href="modif_order.php?order=<?php echo $order['id_order']; ?>"><img src="vue/img/avatars/<?php echo $order['avatar']; ?>" title="<?php echo ''.$order['nickname'].''; ?>" /></a>
        </div>

        <div class="billet_contenu">
            <?php echo nl2br(htmlspecialchars($order['description'])); ?>
        </div>

        <div class="product_picture">
            <div class="product_picture">
                卖价 : <?php echo $order['sell_price']; ?>¥
                <form action="controleur/post_customer_paid.php" method="post">
                    <label name="customer_paid">收款 : <input type="tel" name="customer_paid" id="customer_paid" size="5" maxlength="5" value="<?php echo $order['customer_paid']; ?>" required/>
                    </label><input type="hidden" name="id_order" id="id_order" value="<?php echo $order['id_order']; ?>"/>
                    <input type="submit" value="保存"/>
                </form>
                <form action="controleur/post_pupuce_paid.php" method="post">
                    <label name="pupuce_paid">成本 : <input type="tel" name="pupuce_paid" id="pupuce_paid" size="5" maxlength="5" value="<?php echo $order['pupuce_paid']; ?>" required/>
                    </label><input type="hidden" name="id_order" id="id_order" value="<?php echo $order['id_order']; ?>"/>
                    <input type="submit" value="保存"/>
                </form>
                <?php 
                    if (isset($order['id_ems']))
                    { ?>
                        <a target="_blank" href="http://www.colissimo.fr/portail_colissimo/suivre.do?colispart=<?php echo $order['tracking']; ?>"><?php echo $order['tracking']; ?></a> <?php
                    } 
                    else
                    {
                        echo 'NO EMS';
                    }
                ?>
            </div>

            <div class="product_picture">
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
            </div>
            <div class="product_picture">
                <?php
                if (!isset($order['buy_date']))
                { ?>
                <a href="controleur/bought.php?order=<?php echo $order['id_order']; ?>"><img src="vue/img/tobuy.jpg" /></a>
                <?php
                }
                else
                { ?>
                <a href="controleur/tobuy.php?order=<?php echo $order['id_order']; ?>"><img src="vue/img/bought.jpg" /></a>
                <?php
                 } ?>
            </div>
        </div>
    </div>
</div>
<?php
}
?>

<div class="bouton4">
<a href="controleur/csv_total.php">DOWNLOAD CSV</a>
</div>

<div class="news">
    <div class="billet">
        <h3>其他费用</h3>         <div class="liste_expenses">   
        <?php
        foreach($expenses as $expense)
        {
        ?>   

            <?php echo $expense['date_expense']; ?> - <?php echo $expense['nickname']; ?> - <?php echo $expense['description']; ?> : <?php echo $expense['price']; ?>¥<HR>
        
        <?php
        }
        ?>
</div>
    </div>
</div>

<div id="add_button">
    <a href="add_order.php"><img src="vue/img/add.png"></a>
</div>
<div id="add_ems">
    <a href="add_ems.php"><img src="vue/img/add_ems.png"></a>
</div>
<div id="add_expense">
    <a href="add_expense.php"><img src="vue/img/add_expense.png"></a>
</div>
<div class="bouton4">
<a href="controleur/csv_expenses.php">DOWNLOAD CSV</a>
</div>
</div>
</body>
</html>
