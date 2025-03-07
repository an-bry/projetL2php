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
    <form action="" method="post" style="width:50vw; min-width:700px; margin: auto;">
        <div class="row mb-3">
            <div class="col">
                <label for="numConge" class="form-label">Numéro de congé :</label>
                <input type="text" class="form-control" id="numConge" name="numConge" placeholder="Numéro de congé" required>
            </div>
            <div class="col">
                <label for="numEmp" class="form-label">Numéro d'employé :</label>
                <input type="text" class="form-control" id="numEmp" name="numEmp" placeholder="Numéro d'employé" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="motif" class="form-label">Motif :</label>
                <input type="text" class="form-control" id="motif" name="motif" placeholder="Maladie, Vacances, etc." required>
            </div>
            <div class="col">
                <label for="nbrjr" class="form-label">Nombre de jours :</label>
                <input type="number" class="form-control" id="nbrjr" name="nbrjr" placeholder="Nombre de jours" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="dateDemande" class="form-label">Date de demande :</label>
                <input type="date" class="form-control" id="dateDemande" name="dateDemande" required>
            </div>
            <div class="col">
                <label for="dateRetour" class="form-label">Date de retour :</label>
                <input type="date" class="form-control" id="dateRetour" name="dateRetour" required>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-4">
            <button type="submit" class="btn btn-primary" name="submit">Soumettre</button>
            <a href="index.php" class="btn btn-danger ms-4">Annuler</a>
        </div>
    </form>
    </div>
  </div>
</body>
</html>
<?php
include "../connexiondb/db.php";
if(isset($_POST['submit'])){
    $numConge=$_POST['numConge'];
  $numEmp=$_POST['numEmp'];
  $motif=$_POST['motif'];
  $nbjr=$_POST['nbrjr'];
  $dateDemande=$_POST['dateDemande'];
  $dateRetour=$_POST['dateRetour'];
  
    $requete = $connexion->prepare("INSERT INTO CONGE (numConge,numEmp,motif, nbrjr, dateDemande, dateRetour)
     VALUES (:numConge,:numEmp,:motif, :nbrjr, :dateDemande, :dateRetour)");
$requete->bindParam(':numConge', $numConge);
$requete->bindParam(':numEmp', $numEmp);
  $requete->bindParam(':motif', $motif);
    $requete->bindParam(':nbrjr', $nbjr);
    $requete->bindParam(':dateDemande', $dateDemande);
    $requete->bindParam(':dateRetour', $dateRetour);
    if ($requete->execute()) {
      echo "L'employé a été ajouté avec succès.";
  } else {
      echo "Une erreur est survenue lors de l'ajout de l'employé.";
  }
}


?>