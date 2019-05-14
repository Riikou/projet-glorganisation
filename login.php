<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        
        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        
        <!-- GOOGLE FONT -->
        <link href="https://fonts.googleapis.com/css?family=Niramit" rel="stylesheet"> 
        
        <!-- TITRE -->
        <title>Connexion</title>
        
        <!-- POUR CSS-->
        <link rel="stylesheet" href="styles/login_style.css">

    </head>
    <body>
        
        <?php
            include("include/bdd.php");
            $chaine = "";
            if (isset($_SESSION["user"]))
            {
                header("location: menu.php");
            }
            elseif(!empty($_POST["login"]) && !empty($_POST["mdp"]))
            {
                //Les champs sont remplis, connexion à la base de donnée et vérification du login et du mot de passe
                $query = $con -> prepare("SELECT * FROM utilisateurs WHERE pseudo_utilisateur = :login AND mdp_utilisateur = :mdp");
                $query -> bindParam(":login", $login);
                $query -> bindParam(":mdp", $mdp);
                
                $login = $_POST["login"];
                $mdp = hash("sha1", $_POST["mdp"]);
                $query -> execute();
                
                $utilisateur = $query -> fetch();
                if ($utilisateur === false) {
                    $chaine = "Les identifiants sont incorrects";
                } else {
                    $_SESSION["user"] = $utilisateur;
                    header("location: menu.php");
                }
            } elseif (isset($_POST['submit'])) {
                $chaine = "Les champs doivent être remplis";
            }
        ?>
        <section id="connexion" class="container">
            <div class="white-divider"></div>
            <!-- TITRE -->
            <div class="heading">
                <h2>Connexion Admin</h2>
            </div>
            
            <!-- FORMULAIRE DE CONNEXION -->
            <form onsubmit="openModal()" id="form" action="login.php" method="POST">
                <!-- LOGIN -->
                <input type="text" class="form-control" name="login" placeholder="Votre login">
                <!-- MDP -->
                <input type="password" class="form-control" name="mdp" placeholder="Votre mot de passe">
                <!-- BOUTON SUBMIT -->
                <button class="btn btn-danger" type="submit" name="submit">Se connecter</button>
            </form>
            <?php
                if(isset($_POST["submit"])){
                    echo "<h3 style='color: #fff;'>".$chaine."</h3>";
                }
            ?>
        </section>
    </body>
</html>