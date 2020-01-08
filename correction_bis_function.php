<?php
$portrait1 = array('name' => 'Victor', 'firstname' => 'Hugo', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name' => 'Jean', 'firstname' => 'de La Fontaine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name' => 'Pierre', 'firstname' => 'Corneille', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name' => 'Jean', 'firstname' => 'Racine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
function displayTab() {
    $portraits = func_get_args();
    foreach ($portraits as $portrait) {
        $name = $portrait['name'];
        $firstName = $portrait['firstname'];
        $portrait = $portrait['portrait'];
        ?>
        <div>
            <div>
                <?= $name ?>
                <?= $firstName ?>
            </div>
            <div>
                <img src="<?= $portrait ?>" width="500" height="500">
            </div>
        </div>
        <?php
    }
}
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Tp 3 Partie 10 PHP</title>
        <style>
            body
{
  text-align: center;
  background-image: url('../img/bear.jpg');
  background-size: cover;
  background-repeat: no-repeat;
}
h1
{
  background-color: yellow;
}
.container-fluid
{
  display: flex;
  justify-content: center;
  background-color: black;
  align-items: center;
  color: white;
  margin-top: 10%;
}
img
{
    border: 5px solid red;
}
         </style>
    </head>
    <body>
        <h1>Tp 3 Partie 10 PHP</h1>
        <div class="container-fluid">
            <?= displayTab($portrait1, $portrait2, $portrait3, $portrait4) ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>