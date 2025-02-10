<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="/assets/font/css/all.min.css">
  <title>Nettoyage Express</title>
</head>

<body>
  <!-- ################  -->
  <!-- Header  -->
  <!-- ################  -->
  <header>
    <a href="#" class="logo">Nettoyage <span>Express</span></a>
    <ul class="navigation">
      <li><a href="#" class="active">home</a></li>
      <li><a href="#">about</a></li>
      <li><a href="#">services</a></li>
      <li><a href="#">blog</a></li>
      <li><a href="#">contact</a></li>
    </ul>
  </header>

  <!-- ################  -->
  <!-- Home  -->
  <!-- ################  -->
  <section class="home" id="home">
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/assets/images/banner-01.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/assets/images/banner-02.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/assets/images/banner-03.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <!-- ################  -->
  <!-- subhome  -->
  <!-- ################  -->
  <section class="subhome" id="subhome">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <i class="fas fa-star"></i>
          <h4>Meilleure qualité</h4>
          <p>Nous nous engageons à offrir un service de nettoyage de la meilleure qualité, avec un souci du détail inégalé. Chaque intervention utilise des produits écologiques pour garantir un environnement sain.</p>
        </div>
        <div class="col-md-4">
          <i class="fas fa-comments"></i>
          <h4>Conseils d'experts</h4>
          <p>Nos experts en nettoyage fournissent des conseils personnalisés pour répondre à vos besoins spécifiques. Avec leur expérience, ils vous aident à optimiser la propreté de vos espaces.</p>
        </div>
        <div class="col-md-4">
          <i class="fas fa-tools"></i>
          <h4>Expertise en main-d'œuvre</h4>
          <p>Notre équipe de professionnels qualifiés assure des résultats impeccables dans tous les aspects du nettoyage. Nous croyons en la formation continue pour garantir les meilleures pratiques.</p>
        </div>
      </div>
    </div>
  </section>

</body>

<script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/Js/app.js"></script>

</html>