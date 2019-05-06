<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <!-- TITLE -->
        <title>Error</title>
        
        <!-- TAG META -->
        <meta charset="utf-8">
        
        <!-- LIEN JQUERY -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <!-- LIEN BOOTSTRAP -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
        <!-- REFERENCE CSS -->
        <link type="text/css" rel="stylesheet" href="styles/style_page404.css">
        <link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body>
        <div id="main">
            <?php
                $position = "relative";
                include("include/header.php");
            ?>
            <h2>Page not found</h2>
            <p>The page you requested was not found.</p>
            <p>The link you used may be broken or you may have entered the URL incorrectly.</p>

            <a class="btn btn-outline-danger"href="index.php" id="btn-home">BACK HOMEPAGE</a>
        </div>
        <?php include("include/footer.php");?>
    </body>
</html>