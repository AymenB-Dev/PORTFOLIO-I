<?php 
session_start();
require "./lang_config.php" 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404</title>
    <link rel="stylesheet" href="./style/css/404.css">
</head>
<body>


    <div class="main-wrapper">
        <div class="inner-wrapper">
            <img class="person" src="./img/404_ERROR/person_404_error.png" alt="">
            <div class="bg">
                    <h1>404</h1>
                    <h1><?php echo $lang["page not found"]?></h1>
                    <a href="./index.php"><?php echo $lang["home page"]?></a>
            </div>
        </div>
    </div>

    
</body>
</html>