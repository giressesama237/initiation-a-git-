<?php
include('dbconnect.php');
$sql = "select * from etudiants";
$query = $dbh->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
//var_dump($results);


if(isset($_GET['delid']))
{
  $id=intval($_GET['delid']);
  $sql = "delete from etudiants where id =:id";
  $query = $dbh->prepare($sql);
  $query->bindParam(':id',$id,PDO::PARAM_STR);
  $result = $query->execute();
  if ($result)
  {
    echo "<script>alert('Etudiant Supprimé');</script>";
    echo "<script>window.location.href= 'manage_students.php'</script>";
  }else{
    echo "<script>alert('Erreur');</script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style/icons/simple-line-icons/css/simple-line-icons.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Matricule</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
      <?php
        foreach($results as $row){
    ?>
    <tr>
      <th scope="row"><?php echo $row->id ?></th>
      <td><?php echo $row->matricule ?></td>
      <td><?php echo $row->nom ?></td>
      <td><?php echo $row->prenom ?></td>
      <td><a href="registration?delid=<?php echo $row->id ?>"><i class="icon-pencil" ></i></a>
        <a href="manage_students?delid=<?php echo $row->id ?>"onclick="return confirm('Voulez vous supprimer?'); " >
      <i class="icon-trash"></i></a>
      
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</body>
</html>

