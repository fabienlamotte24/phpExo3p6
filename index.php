<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 3</title>
  </head>
  <body>
    <p>
<?php
/*Condition pour vérifier l'existence des paramètres*/
  if(isset($_GET['startDate']) && isset($_GET['endDate'])){
    /*Affichage des paramètres*/
    echo $_GET['startDate'] . ' ' . $_GET['endDate'];
  }
?>
    </p>
  </body>
</html>
