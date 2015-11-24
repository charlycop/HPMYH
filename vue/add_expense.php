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
        <h2 class="titre_inscription"><?php echo $_SESSION['nickname'] ?>付的款项</h2>
        <form enctype="multipart/form-data" action="controleur/post_expense.php" method="post">
            <p><label name="expense"><input type="text" name="expense" id="expense" size="100" maxlength="100" placeholder="快递费" required/></label> - 
            <label name="price"><input type="tel" name="price" id="price" size="5" maxlength="5" placeholder="i.e.2390" required/>¥</label></p>
            <div class="bouton"><input type="submit" value="提交"/></div>                
        </form>
    </div>

</body>
</html>