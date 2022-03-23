<?php
include('dbconnect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Formulaire d'enregistrement</h1>
        <?php 
        if (isset($_GET['delid']))
        {
            $id=intval($_GET['delid']);
            $sql = "select * from etudiants where id =:id";
            $query = $dbh->prepare($sql);
            $query->bindParam(':id',$id,PDO::PARAM_STR);
            $query->execute();
            $results = $query->fetchAll(PDO::FETCH_OBJ);
            var_dump($results);
            $student_info = $results[0];
            var_dump($student_info);
        }
        ?>
        <form action="signup.php" method="POST" >
            <div class="form-group">
                <label for="" class="form-label">Matricule</label>
                <input type="text" value="<?php if (isset ($id)) echo $student_info->matricule ?>" class="form-control" name="matricule">
                <input type="hidden" value="<?php if (isset ($id)) echo $student_info->id ?>" class="form-control" name="id">
            </div>

            <div class="form-group">
                <label for=""class="form-label">Nom</label>
                <input type="text" value="<?php if (isset ($id)) echo $student_info->nom ?>" class="form-control" name="nom">
            </div>

            <div class="form-group">
                <label for=""class="form-label">Prenom</label>
                <input type="text" value="<?php if (isset ($id)) echo $student_info->prenom ?>" class="form-control" name="prenom">
            </div>
            <div class="form-group">
                <?php if(isset($_GET['delid'])){?>
                    <input type="submit" class="btn btn-primary" name="modifier" value="Modifier">
               <?php } else { ?>
                    <input type="submit" class="btn btn-primary" name="submit" value="Envoyer">
                <?php }  ?>
            </div>
            
        </form>
    </div>
    
    
</body>
</html>