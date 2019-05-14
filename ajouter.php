<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <!-- LIEN JQUERY -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <!-- LIEN BOOTSTRAP -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
<?php
    include("include/bdd.php");
    if (isset($_POST["2nd"]))
    {
        $query = $con -> prepare("SELECT MAX(id_evenement) FROM evenements ");
        $query -> execute();
        $id = $query -> fetch();
        
        for ($ind = 0; $ind < (int)$_POST["2nd"]; $ind++)
        {
            $query = $con -> prepare("INSERT INTO sous_titres(id_evenement, id_sous_titre, nom_sous_titre) VALUES (:idE, :idS, :nomS);");
            $query -> bindParam(":idE", $idE);
            $query -> bindParam(":idS", $idS);
            $query -> bindParam(":nomS", $nomS);
            
            $idE = $id[0];
            $idS = $ind + 1;
            $nomS = $_POST["titreC".($ind+1)];

            $query -> execute();
            
            $query = $con -> prepare("INSERT INTO contenus(id_evenement, id_contenu, contenu_description) VALUES (:idEn, :idC, :contenu);");
            $query -> bindParam(":idEn",$idEn);
            $query -> bindParam(":idC",$idC);
            $query -> bindParam(":contenu", $contenu);
            
            $idEn = $id[0];
            $idC = $ind + 1;
            $contenu = $_POST["descriptionC".($ind+1)];

            $query -> execute();
            header("Location: menu.php");
        }
    }
    elseif (isset($_POST["1st"]))
    {
        $query = $con -> prepare("INSERT INTO evenements(titre_evenement, descriptif_evenement) VALUES (:titre, :description);");
        $query -> bindParam(":titre",$titre);
        $query -> bindParam(":description",$description);
        
        $titre = $_POST["titre"];
        $description = $_POST["description"];
        
        $query -> execute();
        
        $query = $con -> prepare("SELECT MAX(id_evenement) FROM evenements ");
        $query -> execute();
        $id = $query -> fetch();
        
        $query = $con -> prepare("INSERT INTO photos(id_liste_photos, photo_header, photo_affiche, photo_baniere) VALUES (:id, :header, :affiche, :baniere);");
        $query -> bindParam(":id",$cle);
        $query -> bindParam(":header",$header);
        $query -> bindParam(":affiche",$affiche);
        $query -> bindParam(":baniere",$baniere);
        
        $cle = $id[0];
        
        $header = $_POST["photo_fond"];
        $affiche = $_POST["photo_affiche"];
        $baniere = $_POST["photo_baniere"];
        
        $query -> execute();
        
        echo "<form action='' method='POST'>";
        for ($ind = 0; $ind < (int)$_POST["nbre"]; $ind++)
        {
            echo "<div class='form-group'>
                    <label for='titreC".($ind+1)."'>Titre du sous-titre n°".($ind+1)."</label>
                    <input type='text' class='form-control' id='titreC".($ind+1)."' name='titreC".($ind+1)."'>
                </div>
                <div class='form-group'>
                    <label for='descriptionC".($ind+1)."'>Description</label>
                    <textarea class='form-control' id='descriptionC".($ind+1)."' rows='3' name='descriptionC".($ind+1)."'></textarea>
                </div>";
        }
        echo "<input type='hidden' name='2nd' value='".$_POST["nbre"]."'>";
        echo "<button type='submit' class='btn btn-dark'>Envoyer</button>";
        echo "</form>";
    }
    else
    {
?>
        <form action='' method='POST'>
            <div class='form-group'>
                <label for='titre'>Titre du spectacle</label>
                <input type='titre' class='form-control' id='titre' placeholder='Titre du spectacle' name="titre">
            </div>
            <div class='form-group'>
                <label for='description'>Description du spectacle</label>
                <textarea class='form-control' id='description' rows='3' name="description"></textarea>
            </div>
            <div class="form-group">
                <label for='photo_fond'>Nom de la photo de fond</label>
                <input type='text' class='form-control' id='photo_fond' placeholder='Photo de fond' name="photo_fond">
            </div>
            <div class="form-group">
                <label for='photo_affiche'>Nom de la photo d'affiche</label>
                <input type='text' class='form-control' id='photo_affiche' placeholder="Photo d'affiche" name="photo_affiche">
            </div>
            <div class="form-group">
                <label for='photo_baniere'>Nom de la photo de banière</label>
                <input type='text' class='form-control' id='photo_baniere' placeholder='Photo de banière' name="photo_baniere">
            </div>
            <div class="form-group">
                <label for='nbre'>Nombre de sous-titre</label>
                <input type='text' class='form-control' id='nbre' placeholder='Nombre de sous-titre' name="nbre">
            </div>
            <input type="hidden" name="1st">
            <button type="submit" class="btn btn-dark">Continuer</button>
        </form>
<?php
    }
?>
    </body>
</html>