<!-- dit zijn de placeholders om in de database te komen -->
<?php
$dbHost = 'localhost';
$dbName = 'Amorie_database';
$dbUser = 'morris_jansen';
$dbPass = 'MorrisWebDev';
?>

<!-- dit is voor inloggen/uitloggen admin page -->
<?php
session_start();


if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit();
}



if (isset($_GET['logout'])) {
    session_unset(); 
    session_destroy(); 
    header('Location: login.php');
    exit();
}
?>








<?php
// Controleer of het formulier is verzonden
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Haal de ingediende gegevens op
    $categorie = $_POST['categorie'];
    $naam = $_POST['naam'];
    $prijs = $_POST['prijs'];
    $beschrijving = $_POST['beschrijving'];
    $materiaal = $_POST['materiaal'];
    $sub_materiaal = $_POST['sub_materiaal'];
    $gewicht = $_POST['gewicht'];

  // Voer de benodigde validatie en database-invoeging uit
  // ...

  // Hier kun je de benodigde code toevoegen om de gegevens in de database op te slaan

  // Na het opslaan kun je bijvoorbeeld een bevestigingsbericht weergeven
    echo "Product is succesvol toegevoegd!";
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>admin page</title>
  <link rel="stylesheet" href="process.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous">
</head>
<body>
  <h1>Nieuw product toevoegen</h1>


  <form action="process.php" method="POST">
    <label class="mx-3 my-3" for="categorie">Categorie:</label>
    <select name="categorie" id="categorie">
      <option value="1">Ringen</option>
      <option value="2">Armbanden</option>
      <option value="3">Kettingen</option>
      <option value="4">Oorbellen</option>
    </select>
    <br>

    <label class="mx-3 my-3" for="naam">Naam:</label>
    <input type="text" name="naam" id="naam" required>
    <br>

    <label class="mx-3 my-3" for="prijs">Prijs:</label>
    <input type="number" name="prijs" id="prijs" required>
    <br>

    <label class="mx-3 my-3" for="beschrijving">Beschrijving:</label>
    <textarea name="beschrijving" id="beschrijving" required></textarea>
    <br>

    <label class="mx-3 my-3" for="materiaal">Materiaal:</label>
    <input type="text" name="materiaal" id="materiaal" required>
    <br>

    <label class="mx-3 my-3" for="sub_materiaal">Sub Materiaal:</label>
    <input type="text" name="sub_materiaal" id="sub_materiaal">
    <br>

    <label class="mx-3 my-3" for="gewicht">Gewicht:</label>
    <input type="text" name="gewicht" id="gewicht">
    <br>

    <button class="mx-3 my-3" type="submit">Opslaan</button>
  </form>
  <br>

  <button>
    <a href="process.php?logout=1">Logout</a>
  </button>



  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
</body>
</html>
