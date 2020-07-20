<?php 
session_start();
require "./lang_config.php" ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $lang["city"]?></title>
    
    <link rel="stylesheet" href="./style/font-awesome/css/all.css">
    <link rel="stylesheet" href="./style/css/nav.css">
    <link rel="stylesheet" href="./style/css/footer.css">
    <link type="text/css" rel="stylesheet" href="./style/css/lightslider.css" />  
    <link rel="stylesheet" href="./style/css/city.css">
</head>
<body id="body">
    

    <!-----------------------------NAV-BAR-------------------------------->
    <?php require "./nav.php"?>
    <!-----------------------------HEADER--------------------------------->
    <header>
        <div class="description-wrapper">
            <div class="description">
                <h1 id="dynamic-description"></h1>
                <h1 class="description-content"><?php echo $lang["welcome to algeria"]?></h1>
                <h1 class="description-content"><?php echo $lang["enjoy the nature"]?></h1>
                <h1 class="description-content"><?php echo $lang["discover the cities"]?></h1>
                <h1 class="description-content"><?php echo $lang["experience the food"]?></h1>
            </div>
        </div>
    </header>
    <!------------------------------------------------------------------->

    <!--------------------------SECTION---------------------------------->
    <section class="section-wrapper">
        <div class="section-inner-wrapper">
            <!-----------------------GENERAL INFO--------------------->
            <section class="country-general-info">
                <div class="img">
                    <img src="./img/city/flag.png" alt="">
                </div>
                <div class="table-info">
                    <table>
                        <tr>
                            <th><?php echo $lang["capital"] ?></th>
                            <th><?php echo $lang["language"] ?></th>
                            <th><?php echo $lang["religion"] ?></th>
                            <th><?php echo $lang["ethnic groups"] ?></th>
                            <th><?php echo $lang["population"] ?></th>
                            <th><?php echo $lang["area"] ?></th>
                            <th><?php echo $lang["currency"] ?></th>
                        </tr>

                        <tr>
                            <td><?php echo $lang["algeria"]?></td>
                            <td>
                                <ul>
                                    <li><?php echo $lang["arabic"]?></li>
                                    <li><?php echo $lang["amazigh"]?></li>
                                    <li><?php echo $lang["french"]?></li>
                                    <li><?php echo $lang["english"]?></li>
                                </ul>
                            </td>
                            <td><?php echo $lang["islam"]?></td>
                            <td>Arab-Berber</td>
                            <td>+40M</td>
                            <td>2.381.741 km²</td>
                            <td>dzd</td>
                        </tr>
                    </table>
                </div>

                <!---GOOGLE MAPS--->

               

            </section>
            <!------------------------------------------------------------->
            <!-------------------BEST DESTINATIONS------------------------->
            <section class="cities">
                <h1 class="title"><?php echo $lang["top destinations"]?></h1>
                <dev class="top-destinations">
                    <ul id="lightSlider">
                        <li>
                            <div class="city-card">
                                <dev class="city-img">
                                    <img src="./img/city/city_algiers.jpg" >
                                    <span class="city-des"><?php echo $lang["algiers-des"] ?></span>
                                </dev> 
                                <h4><?php echo $lang["algiers"]?></h4>
                            </div>
                        </li>
                        <li>
                            <div class="city-card">
                                <dev class="city-img">
                                    <img src="./img/city/city_oran.jpg" >
                                    <span class="city-des"><?php echo $lang["oran-des"] ?></span>
                                </dev>
                                <h4><?php echo $lang["oran"]?></h4>
                            </div>
                        </li>
                        <li>
                            <div class="city-card">
                                <dev class="city-img">
                                    <img src="./img/city/city_tlemcen.jpg" >
                                    <span class="city-des"><?php echo $lang["tlemcen-des"] ?></span>
                                </dev>
                                <h4><?php echo $lang["tlemcen"]?></h4>
                            </div>
                        </li>
                        <li>
                            <div class="city-card">
                                <dev class="city-img">
                                    <img src="./img/city/city_tipaza.jpg" >
                                    <span class="city-des"><?php echo $lang["tipaza-des"] ?></span>
                                </dev>
                                <h4><?php echo $lang["tipaza"]?></h4>
                            </div>
                        </li>
                        <li>
                            <div class="city-card">
                                <dev class="city-img">
                                    <img src="./img/city/city_constantine.jpg" >
                                    <span class="city-des"><?php echo $lang["constantine-des"] ?></span>
                                </dev>
                                <h4><?php echo $lang["constantine"]?></h4>
                            </div>
                        </li>
                       
                      </ul>
                </dev>
            </section>

            <!-------------ABOUT THE CITY DYNAMIC PART---------->
            <section id="show-up-details">
                <a id="close-btn"> &#10006;</a>
                <div>
                    <img id="show-up-details-img" src="" >
                </div>
                <h1 id="show-up-details-name"></h1>
                <p id="show-up-details-des"></p>
            </section>

            <!-------------------------------------------------->
            <!-------------------------------------------------->
            <!----------------------CULTURE--------------------->
            <section id="culture-link" class="culture">
                <h1 class="title"><?php echo $lang["culture"]?></h1>
                <div class="culture-wrapper">

                    <!----FOOD---->
                    <div class="culture-content">
                        <div class="culture-img">
                            <img src="./img/city/culture_food.jpg" alt="">
                        </div>
                        <div class="culture-description">
                            <h1><?php echo $lang["food"]?></h1>
                            <p><?php echo $lang["food-des"] ?></p>
                        </div>
                    </div>
                    <!--------MUSIC----->
                    <div class="culture-content">
                        <div class="culture-img">
                            <img src="./img/city/culture_music.jpg" alt="">
                        </div>
                        <div class="culture-description">
                            <h1><?php echo $lang["music"]?></h1>
                            <p><?php echo $lang["music-des"] ?></p>
                        </div>
                    </div>
                    <!--------SPORT----->
                    <div class="culture-content">
                        <div class="culture-img">
                            <img src="./img/city/culture_sport.jpg" alt="">
                        </div>
                        <div class="culture-description">
                            <h1><?php echo $lang["sport"]?></h1>
                            <p><?php echo $lang["sport-des"] ?></p>
                        </div>
                    </div>
                    <!-------monument------->
                    <div class="culture-content">
                        <div class="culture-img">
                            <img src="./img/city/culture_monument.jpg" alt="">
                        </div>
                        <div class="culture-description">
                            <h1><?php echo $lang["monument"]?></h1>
                            <p><?php echo $lang["monument-des"] ?></p>
                        </div>
                    </div>
                </div>
            </section>


            <!-------------------FAMOUS MONUMENTS------------------------->
            <section id="monuments-link" class="monuments">
                <h1 class="title"><?php echo $lang["famous monuments"] ?></h1>
                <dev class="top-destinations">
                    <ul id="lightSlider-monument">
                        <li>
                            <div class="monument-card">
                                <dev class="monument-img">
                                    <img src="./img/city/city_monument_1.jpg" >
                                    <span class="monument-des"><?php echo $lang["monument1-des"] ?></span>
                                </dev> 
                                <h4><?php echo $lang["martyrs memorial"] ?></h4>
                            </div>
                        </li>
                        <li>
                            <div class="monument-card">
                                <dev class="monument-img">
                                    <img src="./img/city/city_monument_2.jpg" >
                                    <span class="monument-des"><?php echo $lang["monument2-des"] ?></span>
                                </dev> 
                                <h4><?php echo $lang["el mechouar palace"]?></h4>
                            </div>
                        </li>
                        <li>
                            <div class="monument-card">
                                <dev class="monument-img">
                                    <img src="./img/city/city_monument_3.jpg" >
                                    <span class="monument-des"><?php echo $lang["monument3-des"] ?></span>
                                </dev> 
                                <h4><?php echo $lang["arch of caracalla"]?></h4>
                            </div>
                        </li>
                        <li>
                            <div class="monument-card">
                                <dev class="monument-img">
                                    <img src="./img/city/city_monument_4.jpg" >
                                    <span class="monument-des"><?php echo $lang["monument4-des"] ?></span>
                                </dev> 
                                <h4><?php echo $lang["archaeological park"]?></h4>
                            </div>
                        </li>
                        <li>
                            <div class="monument-card">
                                <dev class="monument-img">
                                    <img src="./img/city/city_monument_5.jpg" >
                                    <span class="monument-des"><?php echo $lang["monument5-des"] ?></span>
                                </dev> 
                                <h4><?php echo $lang["jedars"]?></h4>
                            </div>
                        </li>
                        <li>
                            <div class="monument-card">
                                <dev class="monument-img">
                                    <img src="./img/city/city_monument_6.jpg" >
                                    <span class="monument-des"><?php echo $lang["monument6-des"] ?></span>
                                </dev> 
                                <h4><?php echo $lang["the city of sefar"]?></h4>
                            </div>
                        </li>
                       
                      </ul>
                </dev>
            </section>

        </div>
        
    </section>

   


    <!---------------------FOOTER------------------------>
    <?php require "./footer.php"?>



    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/typed.min.js"></script>
    <script src="./js/nav_home.js"></script>
    <script src="./js/nav.js"></script>
    <script src="./js/lightslider.js"></script>
    <script src="./js/city.js"></script>
</body>
</html>




