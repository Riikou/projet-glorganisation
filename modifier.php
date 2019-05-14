<!DOCTYPE html>
<html>
<?php
    include("include/bdd.php");
    $query = $con -> prepare("SELECT * FROM evenements WHERE id_evenement = :id");
    $query -> bindParam(":id",$id);

    if (!isset($_POST["submit"]))
    {
        $id = $_POST["id_E"];
    }
    
    $query -> execute();
    $tableauTitre = $query -> fetch();
    
    if(isset($_POST["submit"]))
    {
        $query = $con -> prepare("UPDATE evenements SET titre_evenement = :titre, descriptif_evenement = :descriptif WHERE id_evenement = :id");
        $query -> bindParam(":titre",$titre);
        $query -> bindParam(":descriptif", $description);
        $query -> bindParam(":id",$id);
        
        $titre = $_POST["titre"];
        $description = $_POST["description"];
        $id = $_POST["id"];
        
        $query -> execute();
        
        for ($ind = 0; $ind < $_POST["nbre"]; $ind++)
        {
            $query = $con -> prepare("UPDATE sous_titres SET nom_sous_titre = :soustitre WHERE id_evenement = :id AND id_sous_titre = :indice");
            $query -> bindParam(":soustitre",$soustitre);
            $query -> bindParam(":id", $id);
            $query -> bindParam(":indice", $indice);

            $soustitre = $_POST["titreC".($ind+1)];
            $id = $_POST["id"];
            $indice = $ind + 1;

            $query -> execute();
            
            $query = $con -> prepare("UPDATE contenus SET contenu_description = :contenu WHERE id_evenement = :id AND id_contenu = :indice");
            $query -> bindParam(":contenu",$contenu);
            $query -> bindParam(":id", $id);
            $query -> bindParam(":indice", $indice);

            $contenu = $_POST["descriptionC".($ind+1)];
            $id = $_POST["id"];
            $indice = $ind + 1;

            $query -> execute();
        }
        header("Location: menu.php");
    }
?>
    <head>
        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        
        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    </head>
    <body>
        <form action="" method="post">
            <div class='form-group'>
                <label for='titre'>Titre du spectacle</label>
                <input type='text' class='form-control' id='titre' placeholder='Titre du spectacle' name="titre" value="<?php echo $tableauTitre["titre_evenement"]?>">
            </div>
            <div class='form-group'>
                <label for='description'>Description du spectacle</label>
                <textarea class='form-control' id='description' name="description"><?php echo $tableauTitre["descriptif_evenement"]; ?></textarea>
            </div>
            <?php
                $query = $con -> prepare("SELECT * FROM contenus WHERE id_evenement = :id");
                $query -> bindParam(":id",$id);

                $id = $_POST["id_E"];
    
                $query -> execute();
                $tableauContenu = $query -> fetchAll();
            
                $query = $con -> prepare("SELECT * FROM sous_titres WHERE id_evenement = :id");
                $query -> bindParam(":id",$id);

                $id = $_POST["id_E"];
    
                $query -> execute();
                $tableauSousTitre = $query -> fetchAll();
            
                for ($ind = 0; $ind < count($tableauSousTitre); $ind++)
                {
                    echo "<div class='form-group'>
                            <label for='titreC'>Sous titre n°".($ind+1)."</label>
                            <input type='text' class='form-control' id='titreC' placeholder='Titre du spectacle' name='titreC".($ind+1)."' value='".$tableauSousTitre[$ind][2]."'>
                            </div>
                        <div class='form-group'>
                                <label for='descriptionC'>Description</label>
                                <textarea class='form-control' id='descriptionC' name='descriptionC".($ind+1)."'>".$tableauContenu[$ind][2]."</textarea>
                        </div>";
                }
            ?>
            <input type="hidden" name="nbre" value="<?php echo count($tableauSousTitre); ?>">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <button type="submit" class="btn btn-dark" name="submit">Modifier</button>
        </form>
    </body>
</html>