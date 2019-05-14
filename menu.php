<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        
        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        
        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        
        <!-- GOOGLE FONT -->
        <link href="https://fonts.googleapis.com/css?family=Niramit" rel="stylesheet"> 
        <!-- POUR CSS-->
        <link rel="stylesheet" href="styles/menu_style.css">
    </head>
    <body>
        <?php
            include("include/bdd.php");
            $query = $con -> prepare("SELECT * FROM messages");
            $query -> execute();
        
            $tableauM = $query -> fetchAll();
        
            $query = $con -> prepare("SELECT * FROM evenements");
            $query -> execute();
        
            $tableauE = $query -> fetchAll();
        ?>
        <!-- TABLEAU DES MESSAGES -->
        <h2>Liste des messages</h2>
        <div class="white-divider"></div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">E-Mail</th>
                    <th scope="col">Télephone</th>
                    <th scope="col">Objet</th>
                    <th scope="col">Contenu</th>
                    <th scope="col">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(isset($_POST["id_M"]))
                    {
                        $query = $con -> prepare("DELETE FROM messages WHERE id_message = :id");
                        $query -> bindParam(":id", $id);
                
                        $id = $_POST["id"];
                        $query -> execute();
                        header("Refresh: 0;url=menu.php");
                    }
                
                    foreach($tableauM as $unMessage){
                        echo "<tr>";
                        echo "<th scope='row'>".$unMessage["id_message"]."</th>";
                        echo "<td>".$unMessage["nom_message"]."</td>";
                        echo "<td>".$unMessage["prenom_message"]."</td>";
                        echo "<td>".$unMessage["email_message"]."</td>";
                        echo "<td>".$unMessage["telephone_message"]."</td>";
                        echo "<td>".$unMessage["objet_message"]."</td>";
                        echo "<td>".$unMessage["contenu_message"]."</td>";
                        echo "<td><form action='menu.php' method='POST'><input type='hidden' name='id_M' value='".$unMessage["id_message"]."'><button type='submit' class='btn btn-outline-light'>Supprimer</button></form></td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        <!-- TABLEAU DES EVENEMENTS -->
        <h2>Liste des evenements</h2>
        <div class="white-divider"></div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Modifier</th>
                    <th scope="col">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(isset($_POST["id_E"]))
                    {
                        $query = $con -> prepare("DELETE FROM sous_titres WHERE id_evenement = :id");
                        $query -> bindParam(":id", $id);
                
                        $id = $_POST["id_E"];
                        $query -> execute();
                        
                        $query = $con -> prepare("DELETE FROM contenus WHERE id_evenement = :id");
                        $query -> bindParam(":id", $id);
                
                        $id = $_POST["id_E"];
                        $query -> execute();
                        
                        $query = $con -> prepare("DELETE FROM photos WHERE id_liste_photos = :id");
                        $query -> bindParam(":id", $id);
                
                        $id = $_POST["id_E"];
                        $query -> execute();
                        
                        $query = $con -> prepare("DELETE FROM evenements WHERE id_evenement = :id");
                        $query -> bindParam(":id", $id);
                
                        $id = $_POST["id_E"];
                        $query -> execute();
                        
                        header("Refresh: 0;url=menu.php");
                    }
                
                    foreach($tableauE as $unEvent){
                        echo "<tr>";
                        echo "<th scope='row'>".$unEvent["id_evenement"]."</th>";
                        echo "<td>".$unEvent["titre_evenement"]."</td>";
                        echo "<td><form action='modifier.php' method='POST'><input type='hidden' name='id_E' value='".$unEvent["id_evenement"]."'><button type='submit' class='btn btn-outline-light'>Modifier</button></form></td>";
                        echo "<td><form action='menu.php' method='POST'><input type='hidden' name='id_E' value='".$unEvent["id_evenement"]."'><button type='submit' class='btn btn-outline-light'>Supprimer</button></form></td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        <form action='ajouter.php' method="GET">
            <button type="submit" class="btn btn-outline-light ajouter">Ajouter un evenement</button>
        </form>
    </body>
</html>