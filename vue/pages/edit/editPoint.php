<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/bootstrap5.3.2/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<?php 
       include "../connexiondb/db.php";
        $numEmp=$_GET['numEmp'];
       $requete=$connexion->prepare(
        "SELECT * FROM POINTAGE WHERE numEmp=:numEmp LIMIT 1"
       );
    $requete->bindParam(':numEmp',$numEmp,PDO:: PARAM_INT);
       $requete->execute();
       $resultat=$requete->fetch();
      
        ?>
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
    <form method="POST">
    <div class="row mb-3">
        <!-- <div class="col">
            <label for="numEmp" class="form-label">Numéro de l'employé :</label>
            <input type="text" id="numEmp" name="numEmp" class="form-control" required>
        </div> -->
        <div class="col">
            <label for="datePointage" class="form-label">Date et heure du pointage :</label>
            <input type="datetime-local" id="datePointage" name="datePointage" class="form-control"
            value ="<?php print_r($resultat['datePointage']);?>" required>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <label for="pointage" class="form-label">Pointage :</label>
            <select id="pointage" name="pointage" class="form-control" 
              required>
                <!-- <option value="1">OUI</option>
                <option value="0">NON</option> -->
                <option value="1" <?php echo ($resultat['pointage'] == 1) ? 'selected' : ''; ?>>OUI</option>
            <option value="0" <?php echo ($resultat['pointage'] == 0) ? 'selected' : ''; ?>>NON</option>
            </select>
        </div>
    </div>

    <div class="d-flex justify-content-center mt-4">
        <button type="submit" name="submit" class="btn btn-primary">Enregistrer le pointage</button>
        <a href="index.php" class="btn btn-danger ms-4">Annuler</a>
    </div>
</form>
      </form>
    </div>
  </div>
</body>
</html>
<?php

include "../connexiondb/db.php";


if (isset($_POST['submit'])) {
   
    $numEmp = $_GET['numEmp'];             
    $datePointage = $_POST['datePointage']; 
    $pointage = $_POST['pointage'];         
    
    $requete=$connexion->prepare(
        "UPDATE `POINTAGE` SET `datePointage`='$datePointage',
        `pointage`='$pointage' WHERE numEmp=$numEmp"
    );

      if ($requete->execute()) {
        echo "Le pointage a été ajouté avec succès.";
    } else {
        echo "Une erreur est survenue lors de l'ajout du pointage.";
    }
}
?>
