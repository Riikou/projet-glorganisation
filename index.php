<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- TITLE -->
        <title>
            <?php
            $title = "Gl Organisation";
                echo $title;
            ?>
        </title>
        
        <!-- TAG META -->
        <meta charset="utf-8">
        
        <!-- LIEN JQUERY -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <!-- LIEN BOOTSTRAP -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
        <!-- REFERENCE CSS -->
        <link type="text/css" rel="stylesheet" href="styles/home_style.css">
        <link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei" rel="stylesheet"> 
    </head>
    
    <body>
        <?php 
            $position = "absolute";
            include("include/header.php"); 
        ?>
        <!-- LE CAROUSEL -->
        <div class="carousel slide" id="carousel" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/%C2%A9AnthonyGhnassia-31-1920x768.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/IMG_9712-1920x768.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/AnthonyGhnassia-122-1920x768.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Précédent</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Suivant</span>
            </a>
        </div>
        <div class="container" id="text">
            <p>GL Organisation is the market leader of live show representation in France. We act as the exclusive international agent for live shows.</p>
        </div>
        <section id="affiche">
            <h2>SOME OF THE SHOWS WE REPRESENT</h2>
            <div class="grey-divider"></div>
            <div class="container">
                <div class="row">
                    <!-- 0 à 5 -->
                    <article class="col-lg-1 col-xl-1 invisible"></article>
                    <article class="col-lg-2 col-xl-2 col-md-4 col-sm-4 col-12">
                        <a href="#">
                            <img src="images/AFFICHE-GAUTIER-267x360.jpg">
                            <div class="overlay">
                                <h3>Read More</h3>
                                <div class="red-divider"></div>
                            </div>
                        </a>
                    </article>
                    <article class="col-lg-2 col-xl-2 col-md-4 col-sm-4 col-12">
                        <a href="#">
                            <img src="images/AFFICHE-GAUTIER-267x360.jpg">
                            <div class="overlay">
                                <h3>Read More</h3>
                                <div class="red-divider"></div>
                            </div>
                        </a>
                    </article>
                    <article class="col-lg-2 col-xl-2 col-md-4 col-sm-4 col-12">
                        <a href="#">
                            <img src="images/AFFICHE-GAUTIER-267x360.jpg">
                            <div class="overlay">
                                <h3>Read More</h3>
                                <div class="red-divider"></div>
                            </div>
                        </a>
                    </article>
                    <article class="col-lg-2 col-xl-2 col-md-4 col-sm-4 col-12">
                        <a href="#">
                            <img src="images/AFFICHE-GAUTIER-267x360.jpg">
                            <div class="overlay">
                                <h3>Read More</h3>
                                <div class="red-divider"></div>
                            </div>
                        </a>
                    </article>
                    <article class="col-lg-2 col-xl-2 col-md-4 col-sm-4 col-12">
                        <a href="#">
                            <img src="images/AFFICHE-GAUTIER-267x360.jpg">
                            <div class="overlay">
                                <h3>Read More</h3>
                                <div class="red-divider"></div>
                            </div>
                        </a>
                    </article>
                    <article class="col-lg-1 col-xl-1 invisible"></article>
                    <!-- 6 à 10 -->
                    <article class="col-lg-1 col-xl-1 invisible"></article>
                    <article class="col-lg-2 col-xl-2 col-md-4 col-sm-4 col-12">
                        <a href="#">
                            <img src="images/AFFICHE-GAUTIER-267x360.jpg">
                            <div class="overlay">
                                <h3>Read More</h3>
                                <div class="red-divider"></div>
                            </div>
                        </a>
                    </article>
                    <article class="col-lg-2 col-xl-2 col-md-4 col-sm-4 col-12">
                        <a href="#">
                            <img src="images/AFFICHE-GAUTIER-267x360.jpg">
                            <div class="overlay">
                                <h3>Read More</h3>
                                <div class="red-divider"></div>
                            </div>
                        </a>
                    </article>
                    <article class="col-lg-2 col-xl-2 col-md-4 col-sm-4 col-12">
                        <a href="#">
                            <img src="images/AFFICHE-GAUTIER-267x360.jpg">
                            <div class="overlay">
                                <h3>Read More</h3>
                                <div class="red-divider"></div>
                            </div>
                        </a>
                    </article>
                    <article class="col-lg-2 col-xl-2 col-md-4 col-sm-4 col-12">
                        <a href="#">
                            <img src="images/AFFICHE-GAUTIER-267x360.jpg">
                            <div class="overlay">
                                <h3>Read More</h3>
                                <div class="red-divider"></div>
                            </div>
                        </a>
                    </article>
                    <article class="col-lg-2 col-xl-2 col-md-4 col-sm-4 col-12">
                        <a href="#">
                            <img src="images/AFFICHE-GAUTIER-267x360.jpg">
                            <div class="overlay">
                                <h3>Read More</h3>
                                <div class="red-divider"></div>
                            </div>
                        </a>
                    </article>
                    <article class="col-lg-1 col-xl-1 invisible"></article>
                    <!-- 11 à 13 -->
                    <article class="col-lg-1 col-xl-1 invisible"></article>
                    <article class="col-lg-2 col-xl-2 col-md-4 col-sm-4 col-12">
                        <a href="#">
                            <img src="images/AFFICHE-GAUTIER-267x360.jpg">
                            <div class="overlay">
                                <h3>Read More</h3>
                                <div class="red-divider"></div>
                            </div>
                        </a>
                    </article>
                    <article class="col-lg-2 col-xl-2 col-md-4 col-sm-4 col-12">
                        <a href="#">
                            <img src="images/AFFICHE-GAUTIER-267x360.jpg">
                            <div class="overlay">
                                <h3>Read More</h3>
                                <div class="red-divider"></div>
                            </div>
                        </a>
                    </article>
                    <article class="col-lg-2 col-xl-2 col-md-4 col-sm-4 col-12">
                        <a href="#">
                            <img src="images/AFFICHE-GAUTIER-267x360.jpg">
                            <div class="overlay">
                                <h3>Read More</h3>
                                <div class="red-divider"></div>
                            </div>
                        </a>
                    </article>
                    <article class="col-lg-1 col-xl-1 invisible"></article>
                </div>
            </div>
        </section>
        <?php include("include/footer.php"); ?>
    </body>
</html>