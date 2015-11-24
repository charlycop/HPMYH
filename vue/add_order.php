<!DOCTYPE HTML>
    <head>
        <title>海派名媛汇</title>
        <meta charset="utf-8" />
         <link rel="stylesheet" href="vue/style.css" />
        <link href="vue/img/favicon.ico" rel="icon" type="image/x-icon" />
    </head>
        
    <body>
        
<!-- Formulaire -->   
    <div class="nouveau_billet">
        <h2 class="titre_inscription"><?php echo $_SESSION['nickname'] ?>的新订单</h2>
        <form enctype="multipart/form-data" action="controleur/add_order.php" method="post">
            <p><label name="order_reference">客户名 : <input type ="text" id="order_reference" name="order_reference" placeholder="i.e. 淘宝" size="20" maxlength="10" required></label> - 
            <label name="sell_price">卖价 : <input type="tel" name="sell_price" id="sell_price" size="5" maxlength="5" placeholder="i.e.2390" required/>¥
                    </label> - 
             <label name="customer_paid">收款 : <input type="tel" name="customer_paid" id="customer_paid" size="5" maxlength="5" placeholder="i.e.2390" required/>¥</p>
                    </label></p>
            <p><textarea id="order_description" name="order_description" placeholder="描述" cols="90" rows="10" required></textarea></p>
            <p><textarea id="order_address" name="order_address" cols="50" rows="5" placeholder="地址"></textarea></p>
            <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
            <p><input name="userfile" type="file" /></p>
            <div class="bouton"><input type="submit" value="提交"/></div>
        </form>
    </div>

</body>
</html>