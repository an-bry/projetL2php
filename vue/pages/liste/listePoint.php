

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../../css/bootstrap5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<style>
        .search-container {
            display: flex;
            align-items: center;
            background-color: #f8f9fa;
        }

      

        .search-container i {
            background-color: black;
            color: white;
            width: 30px; 
            height: 35px; 
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 5px; 
            padding: 10px;
            cursor: pointer;
        }
    </style>
<body>
<nav class="navbar navbar-dark justify-content-center fs-3 mb-5"style="background-color:orange;">
    PRESENCE
</nav>

<div class="container mt-5">
    <div class="search-container mb-4">
        <!-- Icône de recherche avec fond noir -->
        <i class="fa-solid fa-search mt-2"></i>
        <!-- Champ de saisie de texte -->
        <input type="text" class="form-control mt-2" placeholder="Rechercher...">
    </div>
</div>
<table class="table">
  <thead class="table-dark">
  <tr>
  <tr>
        <th scope="col">Date de Pointage</th>
        <th scope="col">Numéro d'Employé</th>
        <th scope="col">Pointage</th>
        <th>#</th>
    </tr>
    
    </tr>
  </thead>
  <tbody>
    <?php
    include "../connexiondb/db.php";
      $requete=$connexion->prepare(
        "SELECT * FROM pointage");
$requete->execute();
while($row=$requete->fetch()){
  ?>
  <tr>
      <th scope="row"><?php echo $row['numEmp']?></th>
      <th scope="row"><?php echo $row['datePointage']?></th>
      <th scope="row"><?php echo $row['pointage']?></th>
     
      <td>
    <a href="../edit/editPoint.php?numEmp=<?php echo $row['numEmp'] ?>" class="link-dark  " style="color:black;"> 
       <i class="fa-solid fa-pen-to-square fs-5 me-3" ></i> </a>
       <a href="delete.php?id" class="link-red " style="color:red;">
                           <i class="fa-solid fa-trash fs-5"></i>
                        </a>
    </td>
    
    </tr>
   
    <?php
    }
    ?>
    
  </tbody>
</table>
</div>
</body>
</html>