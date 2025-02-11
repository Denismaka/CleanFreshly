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
    <div id="carouselExample" class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active" style="height: 100vh;">
          <img src="/assets/images/banner-01.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/assets/images/banner-02.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/assets/images/banner-03.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
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
        <div class="col-md-4 shadow bg-white p-5 hover-effect">
          <i class="fas fa-star shadow p-3 bg-primary text-white rounded "></i>
          <h4 class="pt-4 text-capitalize fw-bold">meilleure qualité</h4>
          <p>Nous nous engageons à offrir un service de nettoyage de la meilleure qualité, avec un souci du détail inégalé. Chaque intervention utilise des produits écologiques pour garantir un environnement sain.</p>
        </div>
        <div class="col-md-4 shadow p-5 bg-warning text-dark  hover-effect">
          <i class="fas fa-comments shadow p-3 bg-white text-primary rounded "></i>
          <h4 class="pt-4 text-capitalize fw-bold">conseils d'experts</h4>
          <p>Nos experts en nettoyage fournissent des conseils personnalisés pour répondre à vos besoins spécifiques. Avec leur expérience, ils vous aident à optimiser la propreté de vos espaces.</p>
        </div>
        <div class="col-md-4 shadow bg-white p-5 hover-effect">
          <i class="fas fa-tools shadow p-3 bg-primary text-white rounded "></i>
          <h4 class="pt-4 text-capitalize fw-bold">expertise en main-d'œuvre</h4>
          <p>Notre équipe de professionnels qualifiés assure des résultats impeccables dans tous les aspects du nettoyage. Nous croyons en la formation continue pour garantir les meilleures pratiques.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ################  -->
  <!-- About  -->
  <!-- ################  -->
  <section class="about" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="/assets/images/about.jpg" class="rounded img-fluid" alt="">
        </div>
        <div class="col-md-6 py-5">
          <h6>Bienvenue chez Nettoyage Express</h6>
          <h3 class="text-capitalize fw-bold"> À propos de notre entreprise</h3>
          <p>Chez <span>Nettoyage Express</span>, nous sommes passionnés par la propreté et le bien-être de nos clients. Fondée sur des valeurs d'excellence et de fiabilité, notre entreprise s'engage à fournir des services de nettoyage de haute qualité pour les espaces résidentiels et commerciaux.Notre équipe est composée de professionnels expérimentés, formés aux dernières techniques et utilisant des produits écologiques. Nous croyons que chaque environnement mérite d'être propre et sain, et nous travaillons sans relâche pour dépasser les attentes de nos clients. Que vous ayez besoin d'un nettoyage régulier ou d'un service ponctuel, CleanFreshly est votre partenaire de confiance pour un espace impeccable.</p>
          <a href="#" class="btn">En savoir plus</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ################  -->
  <!-- Services  -->
  <!-- ################  -->
  <section class="services" id="services">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h3 class="text-capitalize fw-bold pt-5">nous fournissons des services de haute qualité.</h3>
        </div>
        <div class="col-md-4">
          <h3>CleanFreshly propose des services variés, incluant travaux électriques, peinture, déplacement de meubles, installation de machines à laver et cuisines modulables.</h3>
        </div>
        <div class="col-md-4">
          <h3>Nous assurons également un nettoyage de tapis efficace, avec un engagement envers la qualité et la satisfaction client.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <i class="fas fa-bolt"></i>
          <h6 class="pt-4 fw-semibold">Travail électrique</h6>
        </div>
        <div class="col-md-2">
          <i class="fas fa-paint-roller"></i>
          <h6 class="pt-4 fw-semibold">Travaux de peinture</h6>
        </div>
        <div class="col-md-2">
          <i class="fas fa-arrows-alt"></i>
          <h6 class="pt-4 fw-semibold">Déplacement de meubles</h6>
        </div>
        <div class="col-md-2">
          <i class="fas fa-paint-roller"></i>
          <h6 class="pt-4 fw-semibold">Machine à laver</h6>
        </div>
        <div class="col-md-2">
          <i class="fas fa-utensils"></i>
          <h6 class="pt-4 fw-semibold">MCuisine modulable</h6>
        </div>
        <div class="col-md-2">
          <i class="fas fa-broom"></i>
          <h6 class="pt-4 fw-semibold">Nettoyage de tapis</h6>
        </div>
      </div>
    </div>
  </section>

  <!-- ################  -->
  <!-- Blog  -->
  <!-- ################  -->
  <section class="blog" id="blog">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <i class="fas fa-water text-primary pb-4"></i>
          <h6 class="text-capitalize fw-bold">plomberie</h6>
          <p>Nous offrons des services de plomberie pour assurer le bon fonctionnement de vos installations sanitaires.</p>
        </div>
        <div class="col-md-3">
          <i class="fas fa-tools text-primary pb-4"></i>
          <h6 class="text-capitalize fw-bold">réparation</h6>
          <p>Nos services de réparations couvrent une large gamme de besoins pour maintenir votre équipement en parfait état.</p>
        </div>
        <div class="col-md-3">
          <i class="fas fa-sun text-primary pb-4"></i>
          <h6 class="text-capitalize fw-bold">ressort</h6>
          <p>Nous proposons des services saisonniers pour préparer votre maison au printemps, en optimisant son entretien.</p>
        </div>
        <div class="col-md-3">
          <i class="fas fa-hammer text-primary pb-4"></i>
          <h6 class="text-capitalize fw-bold">charpentier</h6>
          <p>Nos charpentiers qualifiés réalisent des travaux de menuiserie sur mesure pour embellir votre espace.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ################  -->
  <!-- Contact  -->
  <!-- ################  -->
  <section class="contact" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p class="fw-bold text-capitalize text-white">Fournisseur de services de nettoyage professionnel</p>
          <div class="row">
            <div class="col-md-4 shadow bg-white text-center">
              <i class="fas fa-phone fs-2 pb-3"></i>
              <h6 class="text-capitalize fw-bold">téléphone</h6>
              <span>+243997435030</span>
            </div>
            <div class="col-md-4 shadow bg-white text-center">
              <i class="fas fa-envelope fs-2 pb-3"></i>
              <h6 class="text-capitalize fw-bold">email</h6>
              <span>denisamore703@gmail</span>
            </div>
            <div class="col-md-4 shadow bg-white text-center">
              <i class="fas fa-clock fs-2 pb-3"></i>
              <h6 class="text-capitalize fw-bold">heures d'ouverture</h6>
              <span>10h à 18h</span>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="contact-form">
            <form action="">
              <input type="text" placeholder="Nom" />
              <input type="email" name="" id="" placeholder="Adress mail" />
              <textarea
                name=""
                id=""
                cols="30"
                rows="10"
                placeholder="Écrivez votre message ici..."></textarea>
              <input type="button" value="Envoyer" class="contact-button" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ################  -->
  <!-- Témoignages  -->
  <!-- ################  -->
  <section class="témoignages" id="témoignages">
    <div class="heading">
      <h4>Témoignages</h4>
      <h2>ce que disent nos clients</h2>
      <p>Découvrez les témoignages de nos clients satisfaits qui partagent leurs expériences positives avec nos services.</p>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem voluptatem placeat harum minima iusto consequuntur. Modi magnam, vitae, illo deleniti inventore doloremque rem ea placeat, sunt eligendi suscipit qui dolor!</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ################  -->
  <!-- Footer  -->
  <!-- ################  -->
  <footer class="text-white" style="background-color: #000;">
    <div class="container">
      <footer class="py-5">
        <div class="row">
          <div class="col-md-6">Nettoyage<span>Express</span></div>
          <div class="col-md-6">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-x-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-google-plus-g"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
          </div>
          <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
            <div class="container">
            </div>
          </div>
          <div class="col-6 col-md-3 mb-3">
            <h5>Liens</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Services</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Blog</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Contact</a></li>
            </ul>
          </div>

          <div class="col-6 col-md-2 mb-3">
            <h5>services</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Travail électrique</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Travaux de peinture</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Déplacement de meubles</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Machine à laver</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">MCuisine modulable</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Nettoyage de tapis</a></li>
            </ul>
          </div>

          <div class="col-md-5 offset-md-1 mb-3">
            <form>
              <h5>Subscribe to our newsletter</h5>
              <p>Monthly digest of what's new and exciting from us.</p>
              <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                <label for="newsletter1" class="visually-hidden">Email address</label>
                <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                <button class="btn btn-warning" type="button"><a href="#" class="text-decoration-none text-white">Subscribe</a></button>
              </div>
            </form>
          </div>
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
          <p>&copy; 2025 Design by <a href="#" class="text-decoration-none text-white">Denismaka</a>, Tout droit réservé</p>
          <ul class="list-unstyled d-flex">
            <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                  <use xlink:href="#twitter" />
                </svg></a></li>
            <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                  <use xlink:href="#instagram" />
                </svg></a></li>
            <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                  <use xlink:href="#facebook" />
                </svg></a></li>
          </ul>
        </div>
      </footer>
    </div>
  </footer>
</body>

<!-- <script src="/assets/scrollreveal/dist/scrollreveal.min.js"></script> -->
<script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/Js/app.js"></script>

</html>