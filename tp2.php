<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type="text/css" href="style/style.css">
    <title>TP2 PHP</title>
</head>
<body>
    <div class="page">
        <h1>Deuxieme TP PHP</h1>
        <h2>Les conditions en PHP</h2>
        <?php 
            $a=10;
            $b=25;
            if($a==$b){
                echo("a est egal à b ($a=$b)");
            }elseif($a>$b){
                echo "a est superieur à b ($a > $b)";
            } else{
                echo "a est inférieur à b ($a < $b)";

            }
        ?>
        <h2>Les boucles</h2>
        <h3>La boucle For</h3>
        <?php 
            for($i=0; $i<10; $i++){
                echo "<h4 class='flamme'>La Flamme </h4>";
            }

        ?>
        <h3>La boucle While</h3>
        <?php
        $i=0;
        while($i<20){
            echo "<h4> c'est Super </h4>";
            $i++;
        }
        ?>
        <h3>La boucle for et les tableaux</h3>
        <?php
            
            for($i=0; $i<10; $i++){
                $tab[$i] = "<h4>HBD la flamme ".$i."</h4>";
                echo $tab[$i];
            }
            
        ?>
        <h3>la boucle Foreach</h3>
        <?php
            $contact = array(
                "la flamme"=>"697425255",
                "pola"=>"66396865",
                "valdo"=>"8745664574",
                "landry"=>"85466541231",
                "rodolphe"=>"8656532689859",
                "steve"=>"+6655255685",
                "yvan"=>"9565985365+65",
            );
            foreach($contact as $key=>$value ){
                echo "<h4>".$value."</h4>";
            }
            
            for($i=1;$i<=10;$i++){
                $etudiants[$i] = "etudiant".$i;
               
            }
            foreach($etudiants as $key=>$value){
                echo "<h4>".$key." ".$value."</h4>";
            }
        ?>
            
            
    </div>
</body>
</html>