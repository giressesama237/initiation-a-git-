<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
</head>
<body>
    <div class="page">
        <?php 
        if(!isset($_SESSION['nom'])){?>
            <form action="traitement.php" method="POST" enctype="multipart/form-data" >
                <label>nom</label><br>
                <input type="text" name="nom"><br>
                <label>Prenom</label><br>
                <input type="text" name="prenom"><br>
                <label>Photo de Profil</label>
                <input type="file" name="picture"><br><br>
                <input type="submit" value="Envoyer">
            </form>
        <?php
        }else{
            echo "Vous êtes deja connecté au site<br>";
            echo "<a href='logout.php' >Se deconnecter </a>";
        }
        ?>
    </div>
</body>
</html>