<?php session_start(); ?>
<!DOCTYPE html>
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
        <link type="text/css" rel="stylesheet" href="styles/style_contact.css">
        <link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body>
        <?php
            $position = "relative";
            include("include/header.php");
            include("include/bdd.php");
        
            $champsNonRemplis = false;
            if(!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["email"]) && !empty($_POST["telephone"]) && !empty($_POST["objet"]) && !empty($_POST["message"])) {
                //Tout est ok
                //Envoi à la base
                
                $query = $con -> prepare("INSERT INTO messages(nom_message, prenom_message, email_message, telephone_message, objet_message, contenu_message) VALUES(:nom, :prenom, :email, :telephone, :objet, :contenu)");
                $query -> bindParam(":nom",$nom);
                $query -> bindParam(":prenom",$prenom);
                $query -> bindParam(":email",$email);
                $query -> bindParam(":telephone",$telephone);
                $query -> bindParam(":objet",$objet);
                $query -> bindParam(":contenu",$message);
                
                $nom = $_POST["nom"];
                $prenom = $_POST["prenom"];
                $email = $_POST["email"];
                $telephone = $_POST["telephone"];
                $objet = $_POST["objet"];
                $message = $_POST["message"];
                
                $query -> execute();
                
            } elseif (isset($_POST["submit"])) {
                $champsNonRemplis = true;
            }
        ?>
        <div class="container-fluid" id="main">
            <h2>Contact</h2>
            <p>For more information about GL Organisation, please complete the form below</p>
            <form action="contact.php" method="post">
                <div class="form-row">
                    <div class="col-lg-6 col-xl-6">
                        <label for="nom">First Name</label>
                        <input type="text" id="nom" name="nom" class="form-control">
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <label for="prenom">Last Name</label>
                        <input type="text" id="prenom" name="prenom" class="form-control">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-lg-6 col-xl-6">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" class="form-control">
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <label for="telephone">Phone</label>
                        <input type="text" id="telephone" name="telephone" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="objet">Subject</label>
                    <input type="text" id="objet" name="objet" class="form-control">
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                </div>

                <input type="submit" class="btn btn-outline-danger btn-block" name="submit" value="Send">
            </form>
        
        <?php 
            if ($champsNonRemplis === true) {
                echo "<span style='color: red; font-size: 20px; text-align: center; margin: 0 auto;'>Tous les champs doivent être remplis.</span>";
            } elseif (isset($_POST["submit"])) {
                echo "<span style='color: red; font-size: 20px; text-align: center; margin: 0 auto;'>Merci de votre message.</span>";
            }
        ?>
        </div>
        <?php
            include("include/footer.php"); 
        ?>
    </body>
</html>