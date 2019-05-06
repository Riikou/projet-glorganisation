<!DOCTYPE html>
<?php session_start() ?>
<html>
    <head>
        
    </head>
    <body>
        <?php
            include("include/bdd.php");
            $query = $con -> prepare("SELECT * FROM evenements WHERE id_events = :id");
            $query -> bindParam(":id", $cle);
            $cle = 1;


            $query -> execute();
            $tableau = $query -> fetch();

            echo "<h1>".$tableau["titre_event"]."</h1>";
            echo "<h2>".$tableau["introduction"]."</h2>";
            $sous_titre = unserialize($tableau["sous_titres"]);
            $images = unserialize($tableau["images_event"]);
            $contenu = unserialize($tableau["contenu"]);

            for ($ind = 0; $ind < count($contenu); $ind++)
            {
                echo $sous_titre[$ind]."<br><br><br>";
                echo $contenu[$ind]."<br><br>";
            }
        ?>
    </body>
</html>