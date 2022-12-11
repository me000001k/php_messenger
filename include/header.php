<?php

include_once 'sql_connect.php';

include_once 'functions.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="png" href="images/favicon.png" width="32px" height="32px">
        <link rel="stylesheet" type="text/css" href="css/header.css">
    </head>
    <body>
        <header class="head">
            <a href="index.php"><img class="head-logo" src="images/logo.png" alt="logo" width="40px" height="40px"></a>
            <div class="head-cats">
                <ol class="head-list">
                    <?php foreach($categories as $page): ?>
                    
                    <li class="head-list-input"><a href="scripts/get-cats.php?cat_id=<?=$page['id']?>"><?=$page['name']?></a></li>
                    
                    <?php endforeach; ?>
                </ol>
            </div>
        </header>
    </body>
</html>
