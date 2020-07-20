<?php 

    if(!isset($_SESSION["lang"]))
        $_SESSION["lang"]="en";
    else if(isset($_GET["lang"]) && !empty($_GET["lang"]) && $_SESSION["lang"]!=$_GET["lang"])
        {
            if($_GET["lang"]=="en")
                $_SESSION["lang"]="en";
            else
                $_SESSION["lang"]="tr";
        }

    require_once "language/".$_SESSION["lang"].".php";

?>