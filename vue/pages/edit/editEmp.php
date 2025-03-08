<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/bootstrap5.3.2/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
     <nav class="navbar navbar-dark justify-content-center fs-3 mb-5"style="background-color:orange;">
        Gestion de pointage et congé de personnel
</nav>
  <div class="container">
    <div class="text-center mb-4">
          Enter a new information
          <p>click save after completed all things below</p>
    </div>
    <div class="d-flex justify-content-center">
      <form action="" method="post" style="width=50vw;min-width:700px; ">
          <div class="row mb-3">
          <label for="numEmp">Numéro d'employé :</label>
        <input type="text" id="numEmp" name="numEmp"  class="form-control"><br><br>

          </div>
        <div class="row mb-3">
          <div class="col">
            <label for="" class="form-label">nom:</label>
         <input type="text" class="form-control" placeholder="ANDRIANILANA" name="nom">
</div>
          <div class="col">
            <label for="" class="form-label">Prenom:</label>
         <input type="text" class="form-control" placeholder="bryan thierry" name="Prenom">
        </div>
</div>
        <div class="row mb-3">
          <div class="col">
            <label for="" class="form-label">Poste:</label>
         <input type="text" class="form-control" placeholder="DIRECTEUR" name="Poste">
          </div>
          <div class="col">
            <label for="" class="form-label">SALAIRE</label>
         <input type="text" class="form-control" placeholder="3000000" name="Salaire">
    
        </div>
        <div class="d-flex justify-content-center mt-4 " >
          <button type="submit" class="btn btn-primary" name="submit">Save</button>
          <a href="index.php" class=" btn btn-danger ms-4">Cancel</a>
        </div>
</div>
      </form>
    </div>
  </div>
</body>
</html>