<?php
include('dbconnect.php');
if(isset($_POST['submit']))
{
    $nom = $_POST['nom'];
    $matricule = $_POST['matricule'];
    $prenom = $_POST['prenom'];

    //etape 1 écriture de la requete
    $sql = "insert into etudiants(matricule,nom,prenom)
    values(:matricule,:nom,:prenom)";
    //etape 2 preparation de la requete
    $query = $dbh->prepare($sql);
    $query->bindParam(':matricule',$matricule,PDO::PARAM_STR);
    $query->bindParam(':nom',$nom,PDO::PARAM_STR);
    $query->bindParam(':prenom',$prenom,PDO::PARAM_STR);
    //etape 3 execution de la requete
    $result = $query->execute();

    if($result)
    {
        echo "enregistrement réussi";
        //redirection vers la page manage students
        header('location:manage_students.php');
    }else
    {
        echo "enregistrement échoué";
    }
}



if(isset($_POST['modifier']))
{
    $nom = $_POST['nom'];
    $matricule = $_POST['matricule'];
    $prenom = $_POST['prenom'];
    $id = $_POST['id'];
    //etape 1 écriture de la requete
    $sql = "update etudiants set matricule=:matricule,
    nom=:nom,prenom=:prenom where id=:id";
    //etape 2 preparation de la requete
    $query = $dbh->prepare($sql);
    $query->bindParam(':matricule',$matricule,PDO::PARAM_STR);
    $query->bindParam(':nom',$nom,PDO::PARAM_STR);
    $query->bindParam(':prenom',$prenom,PDO::PARAM_STR);
    $query->bindParam(':id',$id,PDO::PARAM_STR);
    //etape 3 execution de la requete
    

    
}