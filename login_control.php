<?php 
 session_start() ;
require "./lang_config.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $lang["login"] ?></title>
</head>
<body>
    <?php 
        
        //var
        $default_email="user@gmail.com";
        $default_pwd="1234";
        $email=$_POST["email"];
        $pwd=$_POST["password"];
        $msg="";
        //code

        if(strtolower($email)==$default_email and $pwd==$default_pwd)
        {
            $msg= $lang["welcome"]." ".strtok($email, '@');
            ;
            //show a message box to the user
            echo ' <script> alert("'.$msg.'") </script> ';

            //send the user to the home page
            echo ' <script> window.location.href= "index.php "; </script>';    
        }

        else
        {
            $msg= $lang["loginError"];
            //show a message box to the user
            echo ' <script> alert("'.$msg.'") </script> ';

            //send the user to the home page
            echo ' <script> window.location.href= "login.php "; </script>'; 
        }
    ?>
</body>
</html>