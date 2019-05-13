<!DOCTYPE html>
<?php session_start() ?>
<html>
    <head>
        <!-- TITLE -->
        <title>
            <?php
            $title = "Contact";
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
        <link rel="stylesheet" href="styles/spectacles_style.css">
        <link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <?php
            include("include/bdd.php");
            $query = $con -> prepare("SELECT titre_evenement, descriptif_evenement FROM evenements WHERE id_evenement = :id");
            $query -> bindParam(":id", $cle);
            $cle = 1;


            $query -> execute();
            $main = $query -> fetch();

            $query = $con -> prepare("SELECT * FROM photos WHERE id_liste_photos = (SELECT id_liste_photos FROM evenements WHERE id_evenement = :id)");
            $query -> bindParam(":id", $cle);
            $cle = 1;

            $query -> execute();
            $photos = $query -> fetch();
        
            $query = $con -> prepare("SELECT * FROM sous_titres WHERE id_evenement = :id");
            $query -> bindParam(":id", $cle);
            $cle = 1;

            $query -> execute();
            $sousTitre = $query -> fetchAll();
        
            $query = $con -> prepare("SELECT * FROM contenus WHERE id_evenement = :id");
            $query -> bindParam(":id", $cle);
            $cle = 1;

            $query -> execute();
            $contenus = $query -> fetchAll();
        ?>
    </head>
    <body style="background: url('images/<?php echo $photos["photo_header"] ?>') no-repeat fixed center; background-position: top;">
        <?php 
            $position = "relative";
            include("include/header.php");
        ?>
        <div id="main">
            <div class="introduction container-fluid">
                <h1><?php echo $main["titre_evenement"] ?></h1>
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-xl-3">
                            <img class="rounded mx-auto d-block" src='images/<?php echo $photos["photo_affiche"]; ?>'>
                        </div>
                        <p class="col-lg-8 col-xl-8"><?php echo $main["descriptif_evenement"] ?></p>
                    </div>
                </div>
            </div>
            <div class="container-fluid baniere">
                <img src="images/<?php echo $photos["photo_baniere"] ?>">
            </div>
            <div class="white-divider"></div>
            <div class="container contenu">
                <?php
                    for ($ind = 0; $ind < count($sousTitre); $ind++)
                    {
                        echo "<h2>".$sousTitre[$ind]["nom_sous_titre"]."</h2>";
                        echo "<div class='white-divider'></div>";
                        echo "<p>".$contenus[$ind]["contenu_description"]."</p>";
                    }
                ?>
            </div>
            <?php include("include/footer.php"); ?>
        </div>
    </body>
</html>
        
