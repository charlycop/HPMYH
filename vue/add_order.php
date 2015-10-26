<!DOCTYPE HTML>
    <head>
        <title>Add order</title>
        <meta charset="utf-8" />
         <link rel="stylesheet" href="vue/style.css" />
    </head>
        
    <body>
        
<!-- Formulaire -->   
    <div class="nouveau_billet">
        <h2 class="titre_inscription">New order of <?php echo $_SESSION['nickname'] ?></h2>
        <form enctype="multipart/form-data" action="controleur/add_order.php" method="post">
            <p><input id="order_reference" name="order_reference" placeholder="order reference" cols="20" required></textarea></p>
            <p><textarea id="order_description" name="order_description" placeholder="Write here your product description" cols="90" rows="10" required></textarea></p>
            <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
            <p><input name="userfile" type="file" /></p>
            <div class="bouton"><input type="submit" value="Add it !"/></div>
        </form>
    </div>

</body>
</html>