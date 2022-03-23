<?php
session_start();
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
session_set_cookie_params(300); 
session_name("session utilisateur");

$_SESSION['nom']=$nom;

//test si la variable existe et si aucune erreur n'a été généré
    if(isset($_FILES['picture']) &&  $_FILES['picture']['error']==0 ){
        //teste si la taille du fichier est inferieure a 2Mo
        if ($_FILES['picture']['size']<=2000000){
            //gestion des extension
            $fileinfo = pathinfo($_FILES['picture']['name']);
            $extension = $fileinfo['extension'];
            $allowedextensions = ['jpg','jpeg','png','pdf'];
            if(in_array($extension, $allowedextensions)){
                move_uploaded_file($_FILES['picture']['tmp_name'],'uploads/'.basename($_FILES['picture']['name']));
                echo "Photo de profil chargée";
            }else{
                echo "extension non autorisée";
            }
        }else{
            echo "la taille de l'image doit etre inferieure à 2Mo";
        }
    }else{
        echo "veillez choisir une photo";
    }
    
    
    
    echo "<h2> bienvenue ". $_SESSION['nom']."</h2>";
?>
<p><a href="tp1.php">aller a la page suivante</a></p> 
<p><a href="tp_formulaire.php">aller a la page suivante</a></p> 