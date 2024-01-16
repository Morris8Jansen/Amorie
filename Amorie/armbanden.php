<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Armbanden</title>
</head>
<body>
  

  <!-- dit is de werkende navbar met verkeerde order -->

  <nav class="navbar bg-body-tertiary navbar-expand-lg eerste-navbar fixed-top">
    <div class="container-fluid">


<!-- zoekbalk voor grote schermen -->

<div class="container-zoekbalk grote-zoeker">
  <div class="row">
    <div class="col-11">
      <form class="d-flex">
        <div class="input-group">
          <input class="form-control" type="search" placeholder="Zoek..." aria-label="Zoeken">
          <button class="btn grote-zoek-knop" type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
          </button>
        </div>
      </form>
    </div>
  </div>
</div>





<!-- eerste navbar en hamburger -->
    
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand d-flex justify-content-center" href="#">
        <img class="navbar-logo" src="./images/amorie-logo.png" alt="logo">
      </a>

      <!-- hamburger toggler-->

        <div class="offcanvas offcanvas-start d-flex" tabindex="-1" id="offcanvasNavbar"
          aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>


          <!-- binnenkant hamburger -->

          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 d-lg-none">
              <!-- alle links -->
              <a class="nav-item" href="index.php">
                <h5 class="my-2 h4 nav-link active" aria-current="page" style="color: #0047AB;">Home</h5>
              </a>


              <a class="nav-item" href="nieuw.php">
                <h5 class="my-2 h4 nav-link" style="color: #0047AB;">Nieuw</h5>
              </a>



              <a class="nav-item" href="sieraden.php">
                <h5 class="my-2 h4 nav-link" style="color: #0047AB;">Sieraden</h5>
              </a>          





              <a class="nav-item" href="accessoires.php">
                <h5 class="my-2 h4 nav-link" style="color: #0047AB;">Accessoires</h5>
              </a>


              <a class="nav-item" href="cadeauwinkel.php">
                <h5 class="my-2 h4 nav-link" style="color: #0047AB;">Cadeauwinkel</h5>
              </a>


              <a class="nav-item" href="collecties.php">
                <h5 class="my-2 h4 nav-link" style="color: #0047AB;">Collecties</h5>
              </a>

              
              <a class="nav-item" href="persoonlijk.php">
                <h5 class="my-2 h4 nav-link" style="color: #0047AB;">Persoonlijk</h5>
              </a>

            </ul>
          </div>
        </div>
    

    <!-- aan de rechterkant groot scherm logo links -->
    <div class="d-none d-lg-flex align-items-center">
      <a href="favorieten.php" class="logo-link">

<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="black" class="bi bi-suit-heart" viewBox="0 0 16 16">
  <path d="m8 6.236-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z"/>
</svg>
      </a>

      <a href="winkelwagen.php" class="logo-link">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="black" class="bi bi-bag" viewBox="0 0 16 16">
  <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
</svg>
      </a>

      <a href="account.php" class="logo-link">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="black" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>
      </a>
    </div>



    <!-- klein scherm logo links rechtsboven op het scherm -->
    <div class="d-flex align-items-center ms-auto d-lg-none sm-icons-container">
      <a href="favorieten.php" class="sm-navbar-icons">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-suit-heart" viewBox="0 0 16 16">
  <path d="m8 6.236-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z"/>
</svg>
      </a>

      <a href="winkelwagen.php" class="sm-navbar-icons">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-bag" viewBox="0 0 16 16">
  <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
</svg>
      </a>

      <a href="account.php" class="sm-navbar-icons">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>
      </a>

    </div>
  </nav>



  <!-- zoekbalk voor kleine schermen -->
  <div class="container-zoekbalk d-lg-none kleine-zoeker">
  <div class="row">
    <div class="col-11">
      <form class="d-flex">
        <div class="input-group">
          <input class="form-control" type="search" placeholder="Zoek..." aria-label="Zoeken">
          <button class="btn kleine-zoek-knop" type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
          </button>
        </div>
      </form>
    </div>
  </div>
</div>






  <!-- tweede navbar voor desktop -->


  <nav class="navbar navbar-expand-lg fixed-top bg-custom d-lg-block d-none tweede-navbar" id="navbar">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title mx-auto" id="offcanvasNavbarLabel">Amorie</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">
          <ul class="navbar-links">
            <!-- alle links -->
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="nieuw.php">Nieuw</a>
            </li>

  <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" >
    Sieraden
  </a>
    <ul class="dropdown-menu">
      <li><a href=""class="dropdown-item dropdown-toggle rechts">Oorbellen</a>
      <ul class="dropdown-menu submenu oorbellen">
        <li><a href="" class="dropdown-item">Alle oorbellen</a></li>
        <li><a href="" class="dropdown-item">Hoops</a></li>
        <li><a href="" class="dropdown-item">Oorringen & hangers</a></li>
        <li><a href="" class="dropdown-item">Oorknopjes</a></li>
        <li><a href="" class="dropdown-item">Doortrek oorbellen</a></li>
        <li><a href="" class="dropdown-item">Ear Cuffs</a></li>
        <li><a href="" class="dropdown-item">Piercings</a></li>
        <li><a href="" class="dropdown-item">Sets</a></li>
        <li><a href="" class="dropdown-item">Mix & match</a></li>


      </ul>
    </li>
      <li><a href=""class="dropdown-item dropdown-toggle rechts">Kettingen</a>
    <ul class="dropdown-menu submenu kettingen">
      <li><a href="kettingen.php?cat=alle" class="dropdown-item">Alle kettingen</a></li>
      <li><a href="kettingen.php?cat=meerdere-lagen" class="dropdown-item">Meerdere lagen</a></li>

    </ul>
    </li>



    <li><a href="#" class="dropdown-item dropdown-toggle rechts">Ringen</a>
    <ul class="dropdown-menu submenu ringen">
      <li><a href="ringen.php?cat=alle" id="alle" class="dropdown-item">Alle ringen</a></li>
      <li><a href="ringen.php?cat=zegel" id="zegel" class="dropdown-item">Zegelringen</a></li>
      <li><a href="ringen.php?cat=onesize" id="onesize" class="dropdown-item">One size ringen</a></li>
      <li><a href="ringen.php?cat=vintage" id="vintage" class="dropdown-item">Vintage look</a></li>
    </ul>
</li>



    <li><a href="armbanden.php" class="dropdown-item">Armbanden</a></li>
    <li><a href="enkelbandjes.php" class="dropdown-item">Enkelbandjes</a></li>

    </ul>
  </li>




<!-- accessoires dropdown -->
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="accessoiresDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Accesoires
  </a>
  <ul class="dropdown-menu" aria-labelledby="accessoiresDropdown">
    <li><a class="dropdown-item" href="sieraden.php">Alle Accesoires</a></li>
    <li><a class="dropdown-item" href="armbanden.php">Haaraccessoires</a></li>
    <li><a class="dropdown-item" href="enkelbandjes.php">Telefoon Accesoires</a></li>
    <li><a class="dropdown-item" href="oorbellen.php">Schipperspetten & Baretten</a></li>
    <li><a class="dropdown-item" href="ringen.php">Tassen & Portemonnees</a></li>
  </ul>
</li>

            <li class="nav-item">
              <a class="nav-link" href="cadeauwinkel.php">Cadeauwinkel</a>
            </li>
            <!-- collecties dropdown -->

            <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="collecties-submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Collecties
  </a>
  <ul class="dropdown-menu scrolling-menu collecties" aria-labelledby="sieradenDropdown">
    <li><a class="dropdown-item" href="sieraden.php">Alle Collecties</a></li>
    <li><a class="dropdown-item" href="armbanden.php">Tell me your name</a></li>
    <li><a class="dropdown-item" href="enkelbandjes.php">Year Of Birth</a></li>
    <li><a class="dropdown-item" href="oorbellen.php">Mixed Symbols</a></li>
    <li><a class="dropdown-item" href="ringen.php">Your favorite destination</a></li>
    <li><a class="dropdown-item" href=".php">Classy Pearl</a></li>
    <li><a class="dropdown-item" href=".php">You name it</a></li>
    <li><a class="dropdown-item" href=".php">Kind words</a></li>
    <li><a class="dropdown-item" href=".php">Asymmetrical symbols</a></li>
    <li><a class="dropdown-item" href=".php">Shine on with zirconia</a></li>
    <li><a class="dropdown-item" href=".php">Shine on with zirconia stud</a></li>
    <li><a class="dropdown-item" href=".php">Daisy & Butterfly</a></li>
    <li><a class="dropdown-item" href=".php">Fresh Vibes</a></li>
    <li><a class="dropdown-item" href=".php">(Sea) Animals</a></li>
    <li><a class="dropdown-item" href=".php">Galaxy</a></li>
    <li><a class="dropdown-item" href=".php">Stones</a></li>
    <li><a class="dropdown-item" href=".php">Pastel</a></li>
    <li><a class="dropdown-item" href=".php">Over the Moon</a></li>
    <li><a class="dropdown-item" href=".php">Lovely Summer</a></li>
    <li><a class="dropdown-item" href=".php">Wild Ones</a></li>
    <li><a class="dropdown-item" href=".php">Postcards</a></li>
    <li><a class="dropdown-item" href=".php">Stylish Simplicity</a></li>
    <li><a class="dropdown-item" href=".php">Smiley's</a></li>
  </ul>
</li>
            <li class="nav-item">
              <a class="nav-link" href="persoonlijk.php">Persoonlijk</a>
            </li>
          </ul>
          <form class="d-flex mt-3" role="search">

          </form>
        </div>
      </div>
  </nav>
  

  
<!-- alert -->

<div class="container-fluid m-5">
<br>
</div>
<div class="alert-container" id="alert-container">
  <div class="alert alert-primary custom-alert alert-dismissible fade show text-white text-center" role="alert">
    gratis verzending vanaf €15
    <button type="button" class="btn-close alert-button" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  </div>





























































  <?php
// Functie om de specifieke logica voor zilveren, gouden producten en naam/beschikbaarheid bewerkingen uit te voeren
  function processMetalLogic($products)
  {
      $processedProducts = [];

      foreach ($products as $product) {
          // Zorg ervoor dat de array voor beschikbaarheid altijd is gedefinieerd
          $product['availability'] = [];

          // Specifieke controle voor 'Initial Vintage oorbel'
          if (stripos($product['productnaam'], 'Initial Vintage oorbel') !== false) {
              // Voeg beschikbaarheid toe op basis van 'goud' en 'zilver'
              if (stripos($product['productnaam'], 'goud') !== false) {
                  $product['availability'][] = 'Goud';
              }
              if (stripos($product['productnaam'], 'zilver') !== false) {
                  $product['availability'][] = 'Zilver';
              }

              // Voeg het verwerkte product toe aan de array
              $processedProducts[] = $product;

              // Ga door met de volgende iteratie om dubbele verwerking te voorkomen
              continue;
          }

          // Normale verwerking voor andere producten
          $metalOptions = ['zilver', 'goud'];

          foreach ($metalOptions as $metal) {
              // Kijk naar zowel keuze_combinatie als productnaam
              if (isset($product['keuze_combinatie']) && stripos($product['keuze_combinatie'], $metal) !== false) {
                  $product['availability'][] = ucfirst($metal); // Eerste letter naar hoofdletter
              } elseif (stripos($product['productnaam'], $metal) !== false) {
                  $product['availability'][] = ucfirst($metal); // Eerste letter naar hoofdletter
              }
          }

          // Verwijder 'goud' en 'zilver' uit de productnaam (hoofdletterongevoelig)
          $product['productnaam'] = preg_replace("/\b(goud|zilver)\b/i", '', $product['productnaam']);

          // Voeg het verwerkte product toe aan de array
          $processedProducts[] = $product;
      }

      return $processedProducts;
  }

// Functie om producten samen te voegen
  function mergeProducts($products)
  {
      $mergedProducts = [];

      foreach ($products as $product) {
          $productNameWithoutMetal = $product['productnaam'];

          // Zoek naar een product met dezelfde naam en voeg de beschikbaarheid samen
          $mergedProductFound = false;
          foreach ($mergedProducts as &$mergedProduct) {
              if ($productNameWithoutMetal === $mergedProduct['productnaam']) {
                  $mergedProduct['availability'] = array_merge($mergedProduct['availability'], $product['availability']);
                  $mergedProductFound = true;
                  break;
              }
          }

          // Als er geen samengevoegd product is gevonden, voeg het huidige product toe aan de array
          if (!$mergedProductFound) {
              $mergedProducts[] = $product;
          }
      }

      return $mergedProducts;
  }

// Functie om beschikbaarheid te bepalen
  function getAvailability($availability)
  {
      return implode(" & ", array_unique($availability));
  }

// Databaseverbinding
  $dbHost = 'localhost';
  $dbUser = 'morris_jansen';
  $dbName = 'amorie_database';
  $dbPass = 'Wasmachine1';

// Gebruik PDO voor veiligheid bij het verbinden met de database
  try {
      $pdoConnection = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
      $pdoConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
      die("Databaseverbinding is mislukt: " . $e->getMessage());
  }

// Standaardquery voor alle enkelbandjes met prepared statement voor veiligheid
  $preparedQuery = "SELECT * FROM producten WHERE productnaam LIKE :searchTerm";
  $statement = $pdoConnection->prepare($preparedQuery);
  $searchTerm = '%armband%';
  $statement->bindParam(':searchTerm', $searchTerm, PDO::PARAM_STR);
  $statement->execute();

// Zorg ervoor dat alle resultaten op een veilige manier worden opgehaald
  $armbandenResultaten = $statement->fetchAll(PDO::FETCH_ASSOC);

// Logica voor het verwerken van armbanden
  $processedArmbanden = [];
  $mergedArmbanden = [];

  foreach ($armbandenResultaten as $row) {
      $row['availability'] = [];

      $metalOptions = ['zilver', 'goud'];

      foreach ($metalOptions as $metal) {
          if (isset($row['keuze_combinatie']) && stripos($row['keuze_combinatie'], $metal) !== false) {
              $row['availability'][$metal] = ucfirst($metal);
          }
      }

      // Als er geen metaal in keuze_combinatie is, kijk naar de productnaam
      if (empty($row['availability']) && !empty($row['productnaam'])) {
          foreach ($metalOptions as $metal) {
              if (stripos($row['productnaam'], $metal) !== false) {
                  $row['availability'][$metal] = ucfirst($metal);
              }
          }
      }

      // Verwijder 'goud' en 'zilver' uit de productnaam (hoofdletterongevoelig)
      $row['productnaam'] = preg_replace("/\b(goud|zilver)\b/i", '', $row['productnaam']);

      // Voeg het verwerkte armband toe aan de array
      $processedArmbanden[] = $row;
  }

// Voorkom dubbelen door armbanden samen te voegen
  foreach ($processedArmbanden as $armband) {
      $productNameWithoutMetal = $armband['productnaam'];

      foreach ($processedArmbanden as $otherArmband) {
          if ($armband !== $otherArmband && $productNameWithoutMetal === $otherArmband['productnaam']) {
              $armband['availability'] = array_merge($armband['availability'], $otherArmband['availability']);
          }
      }

      // Voeg het samengevoegde armband toe aan de array
      $mergedArmbanden[$productNameWithoutMetal] = $armband;
  }

// Toon de resultaten in HTML
  echo "<div class='container-fluid'>";
  echo "<div class='row justify-content-around'>";

// Gebruik htmlspecialchars voor veiligheid
  foreach ($mergedArmbanden as $mergedArmband) {
      echo "<div class='col-md-3 col-lg-2 product-item mb-4'>";
      echo "<img style='max-width: 100%; height: auto;' src='./images/preview-product-1.webp' alt='Productafbeelding'>";
      echo "<h3>" . htmlspecialchars($mergedArmband['productnaam']) . "</h3>";
      echo "<p>Prijs: €" . htmlspecialchars($mergedArmband['prijs']) . "</p>";

      if (!empty($mergedArmband['availability'])) {
          echo "<p>Beschikbaar in " . implode(" & ", array_map('htmlspecialchars', $mergedArmband['availability'])) . "</p>";
      }

      echo "<div class='favoriet-button-container'>";
      echo "<div class='favoriet-icoon-cirkel'>";
      echo "<button class='favoriet-button'></button>";
      echo "</div>";
      echo "</div>";

      echo "</div>";
  }

  echo "</div>";
  echo "</div>";

// Sluit de databaseverbinding
  $pdoConnection = null;
    ?>






































  
<!-- footer -->
<!-- eerste kolom footer -->
<footer class="bg-dark text-white">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mt-4">
        <h5>Hulp & Info</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-white">Verzendkosten</a></li>
          <li><a href="#" class="text-white">Levertijd</a></li>
          <li><a href="#" class="text-white">Retourneren & Ruilen</a></li>
          <li><a href="#" class="text-white">Veelgestelde Vragen</a></li>
          <li><a href="#" class="text-white">Algemene Voorwaarden</a></li>
          <li><a href="#" class="text-white">Over Ons</a></li>
        </ul>
      </div>



      <!-- middelste kolom footer (volg ons op social media) -->
      <div class="col-md-4 mt-4">
  <h5>Volg Ons Op Social Media</h5>
  <ul class="list-unstyled social-media-list">
    <li class="my-3">
      <a href="URL-naar-Facebook" target="_blank" class="text-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
        </svg>
        <span>Facebook</span>
      </a>
    </li>
    <li class="mb-3">
      <a href="URL-naar-Instagram" target="_blank" class="text-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.510-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.780-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
        </svg>
        <span>Instagram</span>
      </a>
    </li>
    <li class="mb-3">
      <a href="URL-naar-Pinterest" target="_blank" class="text-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pinterest" viewBox="0 0 16 16">
          <path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z"/>
        </svg>
        <span>Pinterest</span>
      </a>
    </li>
    <li class="mb-3">
      <a href="URL-naar-Tiktok" target="_blank" class="text-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
          <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"/>
        </svg>
        <span>Tiktok</span>
      </a>
    </li>
  </ul>
</div>

      <!-- laatste kolom van de footer (veilig betalen) -->

      <div class="col-md-4 mt-4">
        <h5>Veilig betalen</h5>
        <ul class="list-unstyled">
          
        
        <li>
          <a href="#">
            <img src="images/ideal-logo.svg" alt="Ideal" class=".svg-icon img-fluid my-2" style="max-width: 40px;">
            <span>ideal</span>
          </a>
        </li>
          
          
          <li>
            <a href="#">
              <img src="images/mastercard-logo.svg" alt="Mastercard" class=".svg-icon img-fluid my-2" style="max-width: 60px;">
              <span>mastercard</span>
            </a>
          </li>
          
          
          
          <li>
            <a href="#">
          <img src="images/klarna-logo.svg" alt="Klarna" class=".svg-icon img-fluid my-2" style="max-width: 80px;">
            <span>Klarna</span>
            </a>
          </li>
          




          <li>
            <a href="#">
              <img src="images/paypal-logo.svg" alt="Paypal" class=".svg-icon img-fluid my-2" style="max-width: 90px;">
          <span>paypal</span>
            </a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container text-center mt-4">
    <p>Amorie 2018-2023 | Website gemaakt door Morris</p>
  </div>
</footer>










<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="script.js"></script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>


</body>
</html>
