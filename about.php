<!DOCTYPE html>
<html>
    <head>
        <title>About</title>
        
        <!-- LIEN JQUERY -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <!-- LIEN BOOTSTRAP -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
        <!-- REFERENCE CSS -->
        <link type="text/css" rel="stylesheet" href="styles/about_style.css">
        <link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei" rel="stylesheet">
    </head>
    <body>
        <?php 
            $position = "relative";
            include("include/header.php");
        ?>
        <div id='main' class="container-fluid">
            <div class="heading">
                <h1>A market leader in developing, producing and promoting live shows</h1>
                <h2>Benefit from our network of shows, producers and promoters all over the world.</h2>
            </div>
            <div class="row main-content">
                <div class="col-xl-5 col-lg-5 left">
                    <div class="blockrouge">
                        <h3>GL Organisation’s clients benefit from its network of producers and promoters all over the world.</h3>
                    </div>
                    <p>GLO is a member of The Broadway League.</p>
                    <img src="images/unnamed.png" alt='The Broadway League'>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="row write">
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <img alt="profile" src="images/GLO-portrait.jpg" width="225" height="311">
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8">
                            <p>GL Organisation is an established theatrical distribution company that provides an international circuit for booking and licensing shows in markets all over the world.</p>
                            <p>International business experience includes developing, producing and promoting shows worldwide.</p>
                        </div>
                        <div>   
                            <div class="row">
                                <p>GL Organisation specializes in :</p>
                                <ul class="col-lg-6 col-xl-6 liste">
                                    <li>Company management</li>
                                    <li>Marketing and strategy implementation</li>
                                    <li>Corporate financial structuring and management</li>
                                    <li>Tour business strategy</li>
                                    <li>Operational planning</li>
                                </ul>
                                <ul class="col-lg-6 col-xl-6 liste">
                                    <li>Financial modelling</li>
                                    <li>Budgeting</li>
                                    <li>Production general management</li>
                                    <li>Contract negotiation</li>
                                    <li>Legal affairs</li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <p>Founded in 2005 by Guillaume Lagorce, GL Organisation has represented shows such as : Notre-Dame de Paris, Romeo &amp; Juliet, The Ten Commandments, The Sun King, The Little Prince, Ben-Hur stadium show, Tommy (The Who), Scooby Doo, Mozart the Rock Opera, 1789 Les amants de la Bastille, Mistinguett, The Legend of King Arthur, Summer 44, Oliver Twist, The Chorus…</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php include("include/footer.php"); ?>
        </div>
        
    </body>
</html>