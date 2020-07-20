<?php 
session_start();
require "./lang_config.php" 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $lang["login"] ?></title>

    <link rel="stylesheet" href="./style/font-awesome/css/all.css">
    <link rel="stylesheet" href="./style/css/footer.css">
    <link rel="stylesheet" href="./style/css/nav.css">
    <link rel="stylesheet" href="./style/css/login.css">
</head>
<body>

    <?php require "./nav.php"?>
    <!----------------------------------LOGIN-------------------------------->
    <div class="login-wrapper">
        <div class="login-avatar-wrapper">
            <div class="login-avatar">
                <img src="./img/log_in/login_avatar.png" alt="">
            </div>
        </div> 
        <form action="./login_control.php" method="post" onsubmit=" return emailValidation() ">
            <input id="femail" type="email" name="email" placeholder=<?php echo $lang["user"] ?> required>
            <span id="emailError" class="errorMsg"><?php echo "(!) ".$lang["emailError"] ?></span>
            <input type="password" name="password" placeholder=<?php echo $lang["password"] ?> required>
            <input type="submit" name="submit" value=<?php echo $lang["log in"] ?>>
        </form>
    </div>


    <!----------------------------------------FOOTER--------------------->
    <?php require "./footer.php" ?>


    
<script src="./js/jquery-3.4.1.min.js"></script>
<script src="./js/nav.js"></script>
<script src="./js/login.js"></script>
    

</body>
</html>