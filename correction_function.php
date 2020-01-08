<?php
// Declaration des tableaux
$portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
// Texte associé aux personnes des tableaux (facultatif)
$victorBio = 'Victor Hugo, né le 26 février 1802 à Besançon et mort le 22 mai 1885 à Paris, est un poète lyrique ou engagé; romancier du peuple qui rencontre un grand succès avec Notre-Dame de Paris (1831) ainsi que Les Misérables (1862).';
$jeanLfBio = 'Jean de La Fontaine est un poète français né à Château-Thierry en 1621 et mort à Paris en 1695. Il est surtout connu pour être l\'auteur de ses très célèbres Fables.';
$pierreBio = 'Corneille est né à Rouen le 6 juin 1606 dans une famille bourgeoise. Il fait de brillantes études au collège des Jésuites de Rouen (de 1615 à 1622) et devient avocat en 1624.';
$jeanRBio = 'Célèbre poète, auteur de nombreuses tragédies durant la période classique, Jean Racine est connu dans le monde de l\'écriture grâce au succès de la pièce d\'Andromaque en 1667. Il décède à Paris le 21 avril 1699, à l\'âge de 59 ans.';
// Déclaration d'un tableau de tableaux
$portraits = [$portrait1, $portrait2, $portrait3, $portrait4]; ?>
<!DOCTYPE html>
<html lang='fr' dir='ltr'>
<head>
  <title>Projet 3</title>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
  <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
  <style>
      html, body {
  overflow: hidden;
}
body {
  background-color: #ffffff;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' %3E%3Cdefs%3E%3ClinearGradient id='a' x1='0' x2='0' y1='0' y2='1'%3E%3Cstop offset='0' stop-color='%230d2791'/%3E%3Cstop offset='1' stop-color='%23cc7416'/%3E%3C/linearGradient%3E%3C/defs%3E%3Cpattern id='b' width='24' height='24' patternUnits='userSpaceOnUse'%3E%3Ccircle fill='%23ffffff' cx='12' cy='12' r='12'/%3E%3C/pattern%3E%3Crect width='100%25' height='100%25' fill='url(%23a)'/%3E%3Crect width='100%25' height='100%25' fill='url(%23b)' fill-opacity='0.1'/%3E%3C/svg%3E");
  background-attachment: fixed;
  background-size: cover;
  height: 100vh;
  width: 100vw;
}
.card {
  max-width: 45%;
}
.row {
  height: 100%;
}
.card-img {
  height: 33vh;
}
/* Media Queries */
@media only screen and (max-width: 768px) {
  .card {
    max-width: 90%;
  }
  .card-img {
    width: 50%;
  }
}
  </style>
</head>
<body class='container-fluid d-flex flex-wrap pt-5'>
  <?php
  // Pour chaque tableau du tableau principal
  foreach($portraits as $array){
    // Pour chaque clef associée à une valeur
    foreach($array as $key => $value){
      // Récupération des informations pour la création d'une carte
      if($key === 'portrait'){ $imageURL = $value; } // URL
      elseif ($key === 'firstname') { $lastName = $value; } // Nom
      else { $firstName = $value; } // Prénom
    }
    // Association de la personne avec sa description (facultatif)
    if (strlen($lastName) < 5){ $description = $victorBio; }
    elseif (strlen($lastName) < 7){ $description = $jeanRBio; }
    elseif (strlen($lastName) < 10){ $description = $pierreBio; }
    else {$description = $jeanLfBio; }
    // Création d'une carte pour chaque sous-tableau ?>
    <div class="card col-md-6 col-sm-12 mx-auto mb-3">
      <div class="row no-gutters">
        <div class="col-md-4 d-flex">
          <img src="<?= $imageURL ?>" class="card-img m-auto" alt="<?= $firstName.$lastName ?>">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title text-center mb-4"><?= $firstName. ' ' .$lastName ?></h5>
            <p class="card-text text-justify"><?= $description ?></p>
          </div>
        </div>
      </div>
    </div>
  <?php // Fin de la boucle principale
  } ?>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
  <script src='assets/js/script.js'></script>
</body>
</html>