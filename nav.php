<?php 
require "./lang_config.php" 
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    
    <nav id="nav">
        <h1 id="nav-brand" class="logo"><a href="./index.php"><span>a</span>B</a></h1>
        <ul id="nav-items">

            <form action="" method="get">
                <dev class="dropdown translate">
                    <i class="fas fa-globe fa-lg"></i>
                    <input type="button" name="" id="" value="">
                    <dev class="dropdown-content">
                        <input type="submit" name="lang" value="en"><br>
                        <input type="submit" name="lang" value="tr">
                    </dev>
                </dev>            
            </form>

            <li><a href="./login.php"><?php echo $lang["login"] ?></a></li>

            <li><a href="./contact.php"><?php echo $lang["contact"] ?></a></li>


            <li class="dropdown">
                <a href="./city.php"><?php echo $lang["city"] ?>
                    <span class="dropdown-arrow">&#9660;<span>
                </a>
                <ul class="dropdown-content">
                    <li>
                        <a href="./city.php#culture-link"><?php echo $lang["culture"] ?></a>
                    </li>
                    <li>
                        <a href="./city.php#monuments-link"><?php echo $lang["monuments"] ?></a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="./index.php#about-link"><?php echo $lang["about"] ?>
                    <span class="dropdown-arrow">&#9660;<span>
                </a>
                <ul class="dropdown-content">
                    <li><a href="./index.php#cv-link">cv</a></li>
                    <li><a href="./index.php#gallery-link"><?php echo $lang["gallery"] ?></a></li>
                </ul>
            </li>

            <li><a href="./index.php"><?php echo $lang["home"] ?></a></li>
        </ul>
    </nav>

    
</body>
</html>