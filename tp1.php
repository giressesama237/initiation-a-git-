<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type="text/css" href="style/style.css">
    
    <title><?php echo ("mon premier TP PHP"); ?></title>
</head>
<body>
    
    <div class="page" >
        <h1><?php echo"Affichage simple en PHP";?></h1>
        <BR><BR>
        <center>
        <?php 
            
            echo "<h2> bienvenue ". $_SESSION['nom']."</h2>";
        echo"bonjour tout le monde. cet affichage est produit par le PHP"; 
        ?>
        </center>
        <div></div>
        <ol>
            <li>Pour insérer du php dans un document HTML 
                on peut utiliser les balises php 
             </li>
             <li>
                 On utilise la fonction echo pour afficher le texte
             </li>
        </ol>
        <BR><BR>
        
        <?php 
        echo "<h2> merci et aurevoir </h2>";
        $nom = "Valdo";
        $prenom = "Hervé";
        $age = 25;
        echo "<h3>".$nom." ".$prenom." a ".$age."</h3>"; 
        echo ("<h3>$nom $prenom a $age ans</h3>");
        ?>
        
        <?php 
        $tableau[0] ="Valdo";
        $tableau[1] = "Onana";
        $tableau[2] = "Bassong";
        
        $tableau_prenom = array("Hervé","Gaelle","Michele",500);
        
        echo $tableau_prenom [1];
        echo ("<p> $tableau_prenom[3] </p>");
        $contact = array(
            "nom"=>"Valdo",
            "telephone"=>697648855,
            "email"=>"valdo@enspd.cm"
        );
        echo "<p> Le nom du candidat est :". $contact['nom']."</p>";
        echo "<p> Le téléphone du candidat est :". $contact['telephone']."</p>";
        echo "<p> L'email du candidat est :". $contact['email']."</p>";
        
        ?>
    </div>
</body>
</html>