<?php
session_start();
require "./lang_config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title><?php echo $lang["contact"] ?></title>

    <link rel="stylesheet" href="./style/font-awesome/css/all.css">
    <link rel="stylesheet" href="./style/css/footer.css">
    <link rel="stylesheet" href="./style/css/nav.css">
    <link rel="stylesheet" href="./style/css/contact.css">

    <title><?php echo $lang["contact"] ?></title>
</head>
<body>
    
<!---------------------NAV-BAR------------>
<?php require "./nav.php" ?>

<!---------------------------------------CONTACT------------------------------->
    <div class="contact-wrapper">
        <div class="contact-inner-wrapper">
            <div class="contact-info">
               <h1>
                   <?php echo $lang["get in touch"] ?>
                </h1>
               <ul>
                   <li>Lorem, ipsum dolor.</li>
                   <li>(0)
                       <span>553</span>
                       <span>764</span>
                       <span>80 90</span>
                    </li>
                   <li>contact@gmail.com</li>
               </ul>
            </div>
            <div class="contact-form">
                <form id="c-form" action="./contact_control.php" method="post" onsubmit="return formValidation()">
                    <input type="text" name="name" id="fname" value="" maxlength="15" placeholder=<?php echo $lang["name"] ?> autofocus required>
                    <span  id="nameError" class="errorMsg"><?php echo "(!) ".$lang["nameError"] ?></span>
                    
                    <input type="email" name="email" value="" id="femail" placeholder=<?php echo $lang["email"] ?> required>
                    <span id="emailError" class="errorMsg"><?php echo "(!) ".$lang["emailError"] ?></span>
                    
                    
                    <input type="text" name="subject" value="" maxlength="30" placeholder=<?php echo $lang["subject"] ?> required>
                    
                    <textarea name="message"  maxlength="250"  placeholder=<?php echo $lang["message"] ?> required></textarea>
                    
                    <div class="button">
                        <input type="submit" name="submit" value=<?php echo $lang["send"] ?>>
                        <input type="reset" name="clean" id="fclean" value=<?php echo $lang["clean"] ?>>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-------------------------------------------------------------------->

<!-----------------FOOTER------------------>
<?php require "./footer.php" ?>

<script src="./js/jquery-3.4.1.min.js"></script>
<script src="./js/nav.js"></script>
<script src="./js/contact.js"></script>
</body>
</html>