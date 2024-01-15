<?php

// Dit zijn de placeholders om in de database te komen
$dbHost = 'localhost';
$dbName = 'amorie_database';
$dbUser = 'morris_jansen';
$dbPass = 'Wasmachine1';

// Dit is voor inloggen/uitloggen admin page
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

// Probeer een databaseverbinding tot stand te brengen
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
    die("Databaseverbinding is mislukt: " . mysqli_connect_error());
}

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

  // Voer de benodigde validatie uit
  // ...

  // Voeg de gegevens toe aan de database
    $query = "INSERT INTO producten (categorie, productnaam, prijs, beschrijving, materiaal, sub_materiaal, gewicht) 
            VALUES ('$categorie', '$naam', '$prijs', '$beschrijving', '$materiaal', '$sub_materiaal', '$gewicht')";

    if (mysqli_query($conn, $query)) {
        echo "Product is succesvol toegevoegd!";
    } else {
        echo "Fout bij het toevoegen van het product: " . mysqli_error($conn);
    }
}

// Sluit de databaseverbinding
mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
<head>
  <title>Admin Page</title>
  <link rel="stylesheet" href="process.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous">
</head>
<body>
  <h1>Nieuw product toevoegen</h1>

  <form action="process.php" method="POST" class="was-validated">
    <label class="mx-3 my-3" for="productnaam">Productnaam:</label>
    <input type="text" name="productnaam" id="productnaam" required>
    <div class="invalid-feedback">Dit veld is verplicht!</div>
    <br>

    <label class="mx-3 my-3" for="beschrijving">Beschrijving:</label>
    <textarea name="beschrijving" id="beschrijving"></textarea>
    <div class="invalid-feedback">Dit veld is verplicht!</div>
    <br>

    <label class="mx-3 my-3" for="prijs">Prijs:</label>
    <input type="number" name="prijs" id="prijs" required>
    <div class="invalid-feedback">Dit veld is verplicht!</div>
    <br>

    <label class="mx-3 my-3" for="inkoopprijs">Inkoopprijs:</label>
    <input type="number" name="inkoopprijs" id="inkoopprijs" required>
    <div class="invalid-feedback">Dit veld is verplicht!</div>
    <br>

    <label class="mx-3 my-3">BTW heffen:</label>
<input type="radio" name="btw_heffen" id="btw_ja" value="ja" required>
<label for="btw_ja">Ja</label>

<input type="radio" name="btw_heffen" id="btw_nee" value="nee" required>
<label for="btw_nee">Nee</label>
<div class="invalid-feedback">Dit veld is verplicht!</div>

    <br>

    <label class="mx-3 my-3" for="voorraad">Voorraad:</label>
    <input type="number" name="voorraad" id="voorraad" required>
    <div class="invalid-feedback">Dit veld is verplicht!</div>

    <br>

    <label class="mx-3 my-3" for="levertijd">Levertijd:</label>
    <input type="text" name="levertijd" id="levertijd">
    <br>

    <label class="mx-3 my-3" for="combinatieprijs">Combinatieprijs:</label>
    <input type="number" name="combinatieprijs" id="combinatieprijs">
    <br>

    <label class="mx-3 my-3" for="keuze_combinatie">Keuze Combinatie:</label>
    <input type="text" name="keuze_combinatie" id="keuze_combinatie">
    <br>

    <label class="mx-3 my-3" for="actieprijs">Actieprijs:</label>
    <input type="number" name="actieprijs" id="actieprijs">
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
