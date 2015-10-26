<!DOCTYPE HTML>
    <head>
        <title>Wang Li</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../vue/style.css" />
    </head>
        
    <body>
        <div id="login">
            <?php
            foreach($users as $user)
            { ?>
                <p>
                <a href="../index.php?id=<?php echo $user['id']; ?>&nick=<?php echo $user['nickname']; ?>"><?php echo $user['nickname']; ?></a>
            </p>
            <?php } ?>
        </div>
    </body>
</html>
