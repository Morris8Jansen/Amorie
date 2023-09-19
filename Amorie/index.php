<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Amorie</title>
</head>

<body>

  <!-- bovenste bar voor 'vandaag voor 5 uur besteld morgen in huis' -->

  <nav class="navbar d-lg-block d-none d-flex sticky-top">
    <p class="text-center">vandaag voor 5 uur besteld morgen in huis! (alleen op werkdagen binnen nederland)</p>
  </nav>

  <!-- eerste navbar en hamburger -->

  <nav class="navbar bg-body-tertiary navbar-expand-lg sticky-top">
    <div class="container-fluid">

      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand d-flex justify-content-center" href="#">
        <img class="navbar-logo" src="./images/amorie-logo.png" alt="logo">
      </a>
      <div class="offcanvas offcanvas-start d-flex" tabindex="-1" id="offcanvasNavbar"
        aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>


        <!-- binnenkant hamburger -->

        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 d-lg-none">
            <!-- alle links -->
            <a class="nav-item" href="index.html">
              <h5 class="my-2 h4 nav-link active" aria-current="page" style="color: #0047AB;">Home</h5>
            </a>


            <a class="nav-item" href="new.html">
              <h5 class="my-2 h4 nav-link" style="color: #0047AB;">Nieuw</h5>
            </a>



            <a class="nav-item" href="sieraden.html">
              <h5 class="my-2 h4 nav-link" style="color: #0047AB;">Sieraden</h5>
            </a>          





            <a class="nav-item" href="accessoires.html">
              <h5 class="my-2 h4 nav-link" style="color: #0047AB;">Accesoires</h5>
            </a>


            <a class="nav-item" href="cadeauwinkel.html">
              <h5 class="my-2 h4 nav-link" style="color: #0047AB;">Cadeauwinkel</h5>
            </a>


            <a class="nav-item" href="collecties.html">
              <h5 class="my-2 h4 nav-link" style="color: #0047AB;">Collecties</h5>
            </a>

            
            <a class="nav-item" href="persoonlijk.html">
              <h5 class="my-2 h4 nav-link" style="color: #0047AB;">Persoonlijk</h5>
            </a>

          </ul>
        </div>
      </div>
    </div>

    <!-- aan de rechterkant groot scherm logo links -->
    <div class="d-none d-lg-flex align-items-center">
      <a href="" class="logo-link">

<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="black" class="bi bi-suit-heart" viewBox="0 0 16 16">
  <path d="m8 6.236-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z"/>
</svg>
      </a>

      <a href="" class="logo-link">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="black" class="bi bi-bag" viewBox="0 0 16 16">
  <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
</svg>
      </a>

      <a href="" class="logo-link">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="black" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>
      </a>
    </div>

    </div>


    <!-- klein scherm logo links rechtsboven op het scherm -->
    <div class="d-flex align-items-center ms-auto d-lg-none">
      <a href="" class="sm-navbar-icons">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-hearts" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M4.931.481c1.627-1.671 5.692 1.254 0 5.015-5.692-3.76-1.626-6.686 0-5.015Zm6.84 1.794c1.084-1.114 3.795.836 0 3.343-3.795-2.507-1.084-4.457 0-3.343ZM7.84 7.642c2.71-2.786 9.486 2.09 0 8.358-9.487-6.268-2.71-11.144 0-8.358Z"/>
</svg>
      </a>

      <a href="" class="sm-navbar-icons">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-bag" viewBox="0 0 16 16">
  <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
</svg>
      </a>

      <a href="" class="sm-navbar-icons">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>
      </a>

    </div>
  </nav>




  <!-- tweede navbar voor desktop -->
  <nav class="navbar navbar-expand-lg  bg-custom d-lg-block d-none tweede-navbar sticky-top">
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
        <!-- binnenkant hamburger -->
        <div class="offcanvas-body">
          <ul class="navbar-links">
            <!-- alle links -->
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="new.html">Nieuw</a>
            </li>


            <!-- <li class="nav-item">
              <a class="nav-link" href="sieraden.html">Sieraden</a>
            </li> -->
            <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="sieradenDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Sieraden
  </a>
  <ul class="dropdown-menu" aria-labelledby="sieradenDropdown">
    <li><a class="dropdown-item" href="sieraden.html">Alle Sieraden</a></li>
    <li><a class="dropdown-item" href="armbanden.html">Armbanden</a></li>
    <li><a class="dropdown-item" href="enkelbandjes.html">Enkelbandjes</a></li>
    <li><a class="dropdown-item" href="oorbellen.html">Oorbellen</a></li>
    <li><a class="dropdown-item" href="ringen.html">Ringen</a></li>
    <li><a class="dropdown-item no-border" href="kettingen.html">Kettingen</a></li>
  </ul>
</li>



            <li class="nav-item">
              <a class="nav-link" href="accessoires.html">Accesoires</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cadeauwinkel.html">Cadeauwinkel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="collecties.html">Collecties</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="persoonlijk.html">Persoonlijk</a>
            </li>
          </ul>
          <form class="d-flex mt-3" role="search">

          </form>
        </div>
      </div>
    </div>
  </nav>


  
<!-- alert -->



<div class="alert alert-primary custom-alert alert-dismissible fade show text-white text-center" role="alert">
  gratis verzending vanaf €15
  <button type="button" class="btn-close alert-button" data-bs-dismiss="alert" aria-label="Close"></button>
</div>



<!-- eerste foto -->
<div class="container-fluid d-flex align-items-center justify-content-center">
<img class="img-fluid img-1 align-content-center" src="./images/1.png" alt="sieraden">
</div>

  <!-- knoppen onder grote foto (grid banner items) -->
  <section class="grid-banner-items">
  <div class="container mt-5 mb-3">
    <div class="row">
      <div class="col-12 col-md-6 col-lg-4 mb-3">
        <div class="grid-banner-item d-flex align-items-center">
          <div class="grid-banner-item__text">
            <h2>Nieuw</h2>
          </div>
          <div class="square-photo">
          <img src="images/nieuw-grid-banner-item.png" alt="Nieuw" class="img-fluid"/>
        </div>
        </div>
      </div>


      <div class="col-12 col-md-6 col-lg-4 mb-3">
        <div class="grid-banner-item d-flex align-items-center">
          <div class="grid-banner-item__text">
            <h2>Sieraden</h2>
          </div>
          <div class="square-photo">
          <img src="images/sieraden-grid-banner-item.png" alt="Sieraden" class="img-fluid" />
        </div>
        </div>
      </div>


      <div class="col-12 col-md-6 col-lg-4 mb-3">
        <div class="grid-banner-item d-flex align-items-center">
          <div class="grid-banner-item__text">
            <h2>Accesoires</h2>
          </div>
          <div class="square-photo">
          <img src="images/accesoires-grid-banner-item.png" alt="Accesoires" class="img-fluid"/>
        </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-3">
        <div class="grid-banner-item d-flex align-items-center">
          <div class="grid-banner-item__text">
            <h2>Cadeauwinkel</h2>
          </div>
          <div class="square-photo">
          <img src="images/Cadeauwinkel-grid-banner-item.png" alt="Cadeaubon" class="img-fluid" />
        </div>
        </div>
      </div>


      <div class="col-12 col-md-6 col-lg-4 mb-3">
        <div class="grid-banner-item d-flex align-items-center">
          <div class="grid-banner-item__text">
            <h2>Collecties</h2>
          </div>
          <div class="square-photo">
          <img src="images/Collecties-grid-banner-item.png" alt="Collecties" class="img-fluid"/>
        </div>
        </div>
      </div>


      <div class="col-12 col-md-6 col-lg-4 mb-3">
        <div class="grid-banner-item d-flex align-items-center">
          <div class="grid-banner-item__text">
            <h2>Persoonlijk</h2>
          </div>
          <div class="square-photo">
          <img src="images/persoonlijk-grid-banner-item.png" alt="Persoonlijk" class="img-fluid" />
        </div>
        </div>
      </div>
    </div>
  </div>
  </section>

<!-- product preview -->
<!-- hier wil ik nog een mooi hover effect opzetten van mensen die de sieraden aanhebben als je hoverd -->
<section class="products-preview-section">
  <div class="container-fluid">
    <div class="row">
      <div class="product-item col-12 col-sm-4 col-md-3 col-lg-2">
        <img src="images/preview-product-1.webp" alt="preview-product-1">
        <p>Ring Venice</p>
        <p>34,95€</p>
      </div>
      <div class="product-item col-12 col-sm-4 col-md-3 col-lg-2">
        <img src="images/preview-product-2.jpg" alt="preview-product-1">
        <p>Ring Paris</p>
        <p>29,95€</p>
      </div>
      <div class="product-item col-12 col-sm-4 col-md-3 col-lg-2">
        <img src="images/preview-product-3.jpg" alt="preview-product-1">
        <p>Ring Florence</p>
        <p>29,95€</p>
      </div>
      <div class="product-item col-12 col-sm-4 col-md-3 col-lg-2">
        <img src="images/preview-product-4.jpg" alt="preview-product-1">
        <p>Ring Catalunya</p>
        <p>29,95€</p>
      </div>
      <div class="product-item col-12 col-sm-4 col-md-3 col-lg-2">
        <img src="images/preview-product-5.jpg" alt="preview-product-1">
        <p>Ring Sydney</p>
        <p>24,95€</p>
      </div>
      <div class="product-item col-12 col-sm-4 col-md-3 col-lg-2">
        <img src="images/preview-product-6.jpg" alt="preview-product-1">
        <p>Ring Madrid</p>
        <p>24,95€</p>
      </div>
    </div>
    <div class="show-more-button-container">
      <button class="show-more-button">Show more</button>
    </div>
  </div>
</section>



<section class="naamloos">


<!-- welkom bij Amorie -->

<div class="container my-5">
  <div class="row">
    <div class="col-md-4">
      <div class="text-center">
        <h2>Welkom bij Amorie</h2>
        <p class="my-5">shop nu een van onze mooie collecties</p>
        <a href="#" class="welkom-bij-button my-5">bekijk collecties</a>
      </div>
    </div>
    <div class="col-md-8">
      <!-- zou wel de tekst in de foto moeten veranderen naar amorie -->
      <img src="images/welkom-bij-lotsofjewelz.jpg" alt="welkom bij Amorie" class="img-fluid">
    </div>
  </div>
</div>



<div class="container my-5">
  <div class="row">
    <div class="col-md-8">
      <!-- zou wel de tekst in de foto moeten veranderen naar amorie -->
      <img src="images/welkom-bij-lotsofjewelz.jpg" alt="welkom bij Amorie" class="img-fluid">
    </div>
    <div class="col-md-4">
      <div class="text-center">
        <h2>Welkom bij Amorie</h2>
        <p class="my-5">shop nu een van onze mooie collecties</p>
        <a href="#" class="welkom-bij-button my-5">bekijk collecties</a>
      </div>
    </div>
  </div>
</div>



<div class="container my-5">
  <div class="row">
    <div class="col-md-4">
      <div class="text-center">
        <h2>Welkom bij Amorie</h2>
        <p class="my-5">shop nu een van onze mooie collecties</p>
        <a href="#" class="welkom-bij-button my-5">bekijk collecties</a>
      </div>
    </div>
    <div class="col-md-8">
      <!-- zou wel de tekst in de foto moeten veranderen naar amorie -->
      <img src="images/welkom-bij-lotsofjewelz.jpg" alt="welkom bij Amorie" class="img-fluid">
    </div>
  </div>
</div>






<!-- 
er onder misschien een zelfde vak maken met een carousel van alle collecties -->



<!-- 
ook wil ik hier nog een zelfde vak met een plek waar je je e-mail kan achterlaten -->


<!-- dan nog een klein vakje met stuur ons gerust een e-mail als je een vraag hebt of iets dergelijks -->
</section>









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
