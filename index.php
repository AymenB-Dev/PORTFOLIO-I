<?php 
session_start();
include "./lang_config.php" 
?>
<!DOCTYPE html>

<html  lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $lang["home"] ?></title> 
    
    <link rel="stylesheet" href="./style/font-awesome/css/all.css">
    <link rel="stylesheet" href="./style/css/nav.css">
    <link rel="stylesheet" href="./style/css/footer.css">
    <link rel="stylesheet" href="./style/css/home.css">
    

</head>
<body id="body">

<?php require "./nav.php" ?>

    <!---------------------HEADER------------------------->
    <header >
        <div class="description-wrapper">
            <div class="description">
                <h1><?php echo $lang["iam"] ?><span id="dynamic-description"></span></h1>
                <h3>
                    <span class="status"><?php echo $lang["student"] ?></span>
                    <span class="status"><?php echo $lang["web designer"] ?></span>
                    <span class="status">Freelancer</span>
                </h3>
                <div class="social-media">
                    <a href="https://github.com/AymenB-Dev" target="_blank"><i class="fab fa-github "></i></a>
                    <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </header>
    <!------------------------------------------------------>

    <!--------------------ABOUT----------------------------->
    <section id="about-link" class="about">
        <dev class="side-img">
            <dev class="avatar">
                <img src="./img/home/avatar.jpg" alt="">
            </dev>
        </dev>
       

        <dev class="about-content">
            <h1><?php echo $lang["about me"] ?>, </h1>
            <p><?php echo $lang["about-description"] ?></p>
        </dev>
    </section>
    <!------------------------------------------------------>
    <!------------------------CV---------------------------->

    <section id="cv-link" class="cv">
            <h1 class="title"><?php echo $lang["cv"] ?></h1>
            <div class="cv-content">
                <!--------------GENERAL INFO------------------------->
                <div class="cv-sub-container general-info">
                        <h1>
                            <i class="fas fa-info-circle fa-lg"></i>
                            <?php echo $lang["basic info"] ?> 
                        </h1>
                        <ul>
                            <li>
                                <span class="basic-info"><?php echo $lang["adress"] ?> </span>
                                <p>Lorem, ipsum dolor.</p>
                            </li>
                            <li>
                                <span class="basic-info"><?php echo $lang["date of birth"] ?> </span>
                                <p>01.01.19xx</p>
                            </li>
                            <li>
                                <span class="basic-info"><?php echo $lang["place of birth"] ?> </span>
                                <p>Lorem, ipsum dolor.</p>
                            </li>
                            <li>
                                <span class="basic-info"><?php echo $lang["language"] ?></span>
                                <p>
                                     <?php echo $lang["english"] ?>,
                                     <?php echo $lang["arabic"] ?>, 
                                     <?php echo $lang["french"] ?>, 
                                     <?php echo $lang["turkish"] ?>
                                </p>
                            </li>
                            <li>
                                <span class="basic-info"><?php echo $lang["gender"] ?></span>
                                <p><?php echo $lang["male"] ?></p>
                            </li>
                        </ul>
                </div>
                <!-------------------------------------------------------------------->
                <!------------------------SKILLS-------------------------------------->
                <div class="cv-sub-container skills">
                    <h1>
                        <i class="fas fa-cogs fa-lg"></i>
                        <?php echo $lang["work skills"] ?>
                    </h1>
                    <div class="skills-content">
                        <!--HTML SKILLS-->
                        <div>
                            <canvas class="myCanvas"  width="200px" height="120px"></canvas>
                        </div>
                        <!--CSS SKILLS-->
                        <div>
                            <canvas class="myCanvas"  width="200px" height="120px"></canvas>
                        </div>
                        <!--JS SKILLS-->
                        <div>
                            <canvas class="myCanvas"  width="200px" height="120px"></canvas>
                         </div>
                        <!--PHP SKILLS-->
                        <div>
                            <canvas class="myCanvas"  width="200px" height="120px"></canvas>
                        </div>
                        <!--VUE JS-->
                        <div>
                            <canvas class="myCanvas"  width="200px" height="120px"></canvas>
                        </div>
                    </div>
                </div>
                <!------------------------------------------------------------------------->
                <!----------------------------EDUCATION------------------------------------>
                <div class=" cv-sub-container education">
                    <h1>
                        <i class="fas fa-user-graduate fa-lg"></i>
                        <?php echo $lang["education"] ?>
                    </h1>

                    <dev class="education-content">
                        <div class="education-level">
                            <div class="img-education">
                                <img src="./img/home/education.jpg" alt="">
                            </div>
                            <div>
                                <h1><?php echo $lang["university"] ?></h1>
                                <h4><?php echo $lang["ce"] ?>, 2018 - <?php echo $lang["present"] ?></h4>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae expedita, tempora, dolore corporis et laudantium laboriosam recusandae eius commodi, accusantium optio suscipit hic? Mollitia, ducimus omnis. Sunt suscipit magnam provident!</p>
                            </div>
                        </div>

                        <div class="education-level">
                            <div class="img-education">
                                <img src="./img/home/education.jpg" alt="">
                            </div>
                            <div>
                                <h1><?php echo $lang["high school"] ?></h1>
                                <h4><?php echo $lang["mb"] ?> 2016 - 2017</h4>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae expedita, tempora, dolore corporis et laudantium laboriosam recusandae eius commodi, accusantium optio suscipit hic? Mollitia, ducimus omnis. Sunt suscipit magnam provident!</p>
                            </div>
                        </div>
                    </dev>
                </div>
            </div>
    </section>


    <!----------------------------------------------------->
    <!----------------------GALLARY------------------------>
    <section id="gallery-link" class="gallery">
        <h1 class="title"><?php echo $lang["my gallery"] ?></h1>
        <dev class="gallery-content">

                <dev class="img-card">
                    <img src="./img/home/gallery_1.png">
                    <span class="project-des"><?php echo $lang["project1"] ?></span>
                </dev>

                <dev class="img-card">
                    <img src="./img/home/gallery_2.png" alt="lorem">
                    <span class="project-des"><?php echo $lang["project2"] ?></span>
                </dev>

                <dev class="img-card">
                    <img src="./img/home/gallery_3.png" alt="lorem">
                    <span class="project-des"><?php echo $lang["project3"] ?></span>
                </dev>

                <dev class="img-card">
                    <img src="./img/home/gallery_4.png" alt="lorem">
                    <span class="project-des"><?php echo $lang["project4"] ?></span>
                </dev>

                <dev class="img-card">
                    <img src="./img/home/gallery_1.png" alt="lorem">
                    <span class="project-des"><?php echo $lang["project1"] ?></span>
                </dev>

                <dev class="img-card">
                    <img src="./img/home/gallery_2.png" alt="lorem">
                    <span class="project-des"><?php echo $lang["project2"] ?></span>
                </dev>
        </dev>
    </section>

    <!-------------ABOUT THE PROJECT PART---------->
    <section id="project-details">
        <a id="close-btn"> &#10006;</a>
        <div>
            <img id="project-details-img" src="" >
        </div>
        <p id="project-details-des"></p>
    </section>

    <!----------------------------------------------------->
    <!---------------------FOOTER-------------------------->
    <?php require "./footer.php" ?>


    <!--javascript part-->
    <script src="./js/jquery-3.4.1.min.js"></script>
    <!--<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>-->
    <script src="./js/typed.min.js"></script>
    <script src="./js/nav_home.js"></script>
    <script src="./js/nav.js"></script>
    <script src="./js/home.js"></script>
    

   
    
</body>
</html>