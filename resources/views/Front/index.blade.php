<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cote d'ivoire évènement</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <!-- Vendor CSS fichiers -->
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!--  Main CSS fichier -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">infos@cievent.ci</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+225 2722497873</span></i>
      </div>
      <div class="social-links d-none d-md-flex">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/cievent225/" class="facebook" ><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
      <a href="/">
        <img src="{{ asset('assets/img/logo.png') }}" alt="logo Ci-event" class="img-fluid">
        <!-- <span id="ci"> Cote d'ivoire</span> 
        <span id="event"> Evènement</span> -->
      </a>
        <!-- <h1><a href="/">
           <img src="{{ asset('assets/css/style.css') }}" alt="logo Ci-event">
        </h1> -->
         <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
          <li><a class="nav-link scrollto" href="#about">Apropos</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url({{ asset('assets/img/slide/slide-1.jpg') }});">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Welcome à <span>Cote d'ivoire Evènement</span></h2>
                <p class="animate__animated animate__fadeInUp">
                  Notre agence de communication de marque, avec
                 des strategies publicitaires de marques pour atteintre vos cibles! 
                  
                </p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Lire plus</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url({{ asset('assets/img/slide/slide-2.jpg') }});">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Communication évènementielle & Relations publiques</h2>
                <p class="animate__animated animate__fadeInUp">
                Notre expertise en tant qu’organisateur d'événements, nos collaborateurs experts de l'événementiel ainsi que notre large réseau vous garantissent une véritable promotion auprès d'une cible spécifique, le tout animé par une approche artistique.
                </p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Lire plus</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url({{ asset('assets/img/slide/slide-3.jpg') }});">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Site Internet & Communication digitale</h2>
                <p class="animate__animated animate__adeInUp">Nous travaillons au quotidien avec des experts en création de site Internet, video et en communication digitale afin de vous proposer toutes les dernières tendances : Web marketing, Community management, Newsletters/SMS, Brand content, etc.</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Lire plus</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon ri-arrow-left-line" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon ri-arrow-right-line" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

      <div class="section-title">
          <span>Présentation</span>
          <h2>Présentation</h2>
          <p>Qui nous sommes au près de vous ?</p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <h2 class="ci-event">Votre Agence, Côte d’Ivoire Évènement </h2>
            <h3>Une Agence événementielle spécialisée dans la gestion événementielle de bout en bout et la communication</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
            Vous accompagne de grandes entreprises locales et internationales 
            dans leur transformation numérique : de la stratégie de communication
             à la création de campagnes, de la production d’expériences cross canal 
            jusqu’au développement et à l’animation de leur plateformes digitales.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Une organisation de qualité a des prix très compétitifs</li>
              <li><i class="ri-check-double-line"></i> En totale transparence </li>
              <li><i class="ri-check-double-line"></i> En exclusivité </li>
            </ul>
            <p class="fst-italic">
            C'est bénéficier d'une équipe dotée de 24 années d'expérience dont la
             compétence n'est plus à prouver pour l'événementiel partout autour du monde,
              que ce soit pour vos séminaires, conventions,
             soirées, inaugurations ou lancements de produits.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= About List Section ======= -->
    <section id="about-list" class="about-list">
      <div class="container">
        

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1">
            <div class="icon-box mt-5 mt-lg-0">
              <i class="bx bx-receipt"></i>
              <h4>CONTENT</h4>
              <p>Universelle, drôle, belle, officielle, fantastique ou secrète : il y a toujours une histoire à raconter. </p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-cube-alt"></i>
              <h4>PUBLIC RELATIONS</h4>
              <p>
              Développer votre réputation mais aussi défendre vos intérêts, créer de la conviction et de la préférence : nous croyons à la force de stratégies construites sur mesure.
              </p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-images"></i>
              <h4>PROGRAMMES DE COACHING</h4>
              <p>
                Faites-vous suivres par les professionnes avec nos leaders au pres de nos clients
              </p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-shield"></i>
              <h4>DIGITAL & FORMATION</h4>
              <p>Tel un porte-voix, le digital fait résonner celle des consommateurs comme des marques.</p>
            </div>
          </div>
          <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("assets/img/about-list-img.jpg");'></div>
        </div>

      </div>
    </section><!-- End About List Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container position-relative">

        <div class="text-center title">
          <h3>Ce que nous avons accompli jusqu'à présent</h3>
          <p>Des clients incroyables nous ont permis de faire du travail dont nous sommes fiers</p>
        </div>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <!-- <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span> -->
            <span class='counter' data-target="2500">0</span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
          <span class='counter' data-target="1801">0</span>
            <p>Projets</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
          <span class='counter' data-target="1320">0</span>
            <p>Evènements</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
          <span class='counter' data-target="1201">0</span>
            <p>Formation et coaching</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <span>Services</span>
          <h2>Services</h2>
          <p>Nos services & prestations en quelques mots</p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="bi bi-briefcase"></i>
              <h4><a href="#">Organisation</a></h4>
              <p>
              Séminaires, Incentives, Conventions,
               Soirées, Inaugurations, Lancement de produit...
              </p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h4><a href="#">Régie événementielle</a></h4>
              <p>
              Concepts événementiels créatifs, Son, lumière et vidéos, Lumière et décoration...
              </p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-bar-chart"></i>
              <h4><a href="#">Logistique</a></h4>
              <p>
              Salles de réunion, Assistance locale, oirées, echnique son / vidéo ...
              </p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-binoculars"></i>
              <h4><a href="#">Communication éditoriale</a></h4>
              <p>Conception pour vos conventions de messages pertinents et audibles, Intervenants et speakers ...</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-brightness-high"></i>
              <h4><a href="#">Formation & Coaching</a></h4>
              <p>
              Notre formation va vous permettre de maîtriser les logiciels, les outils et les langages de référence du web. Issus d'écoles de communication digitale...
              </p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-calendar4-week"></i>
              <h4><a href="#">Développement personnel</a></h4>
              <p>A l'aide de conseils d'experts et d'exercices, notre dossier vous donne les clés pour mieux vous connaître et gagner en sérénité au travail.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <span>Portfolio</span>
          <h2>Portfolio</h2>
          <p>Quelque de nos évènements effectués avec nos partenaires !</p>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Tous</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="ri-add-fill"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="ri-links-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="ri-add-fill"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="ri-links-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="ri-add-fill"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="ri-links-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="ri-add-fill"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="ri-links-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="ri-add-fill"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="ri-links-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="ri-add-fill"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="ri-links-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="ri-add-fill"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="ri-links-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="ri-add-fill"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="ri-links-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="ri-add-fill"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="ri-links-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <span>Team</span>
          <h2>Team</h2>
          <p>Comité executif</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('assets/img/team/team-1.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>N'chho foster</h4>
                <span>PRÉSIDENT-DIRECTEUR GÉNÉRAL</span>
                <p>Accompagner les dirigeants est aussi clé dans la réussite des projets, dans un monde qui va vite et laisse peu de place à l’approximation.</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title">
          <span>Contact</span>
          <h2>Contact</h2>
          <p>Formulaire de contact</p>
        </div>
      </div>

      <div class="map">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://maps.google.com/maps?q=cote%20d'ivoire%20%C3%A9v%C3%A8nement&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" allowfullscreen></iframe>
      </div>

        <div class="info-wrap mt-5">
          <div class="row">
            <div class="col-lg-4 info">
              <i class="ri-map-pin-line"></i>
              <h4>Localité:</h4>
              <p>Abidjan, Angrée<br>Pharmacie Saint Viateur</p>
            </div>

            <div class="col-lg-4 info mt-4 mt-lg-0">
              <i class="ri-mail-line"></i>
              <h4>Email:</h4>
              <p>infos@cievent.ci</p>
            </div>

            <div class="col-lg-4 info mt-4 mt-lg-0">
              <i class="ri-phone-line"></i>
              <h4>Téléphone:</h4>
              <p>+225 2722497873<br>+225 0757829346</p>
            </div>
          </div>
        </div>
        <div class="container">
          
            @if(Session::has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>{{Session::get('success')}}</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
            @endif
       </div>

        <!-- Message de succes en cas d'envois  -->
        <form action="{{ route('contact.store') }}"  class="p-4 shadow" method="post">
           @csrf

          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'error' : '' }}" id="name" placeholder="Votre nom">
              <!-- Error -->
                @if ($errors->has('name'))
                   <div class="error">
                       {{ $errors->first('name') }}
                   </div>
                @endif   
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email" placeholder="Votre email">
                @if ($errors->has('email'))
                    <div class="error">
                        {{ $errors->first('email') }}
                    </div>
                @endif  
            </div>
          </div>

          <div class="row mt-2">
            <div class="col-md-6 form-group">
             <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject" id="subject" placeholder="Votre subjet">
             @if ($errors->has('subject'))
                <div class="error">
                    {{ $errors->first('subject') }}
                </div>
              @endif
            </div>

            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="number" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="subject" placeholder="Exemple:02250576654342">
              @if ($errors->has('phone'))
                <div class="error">
                    {{ $errors->first('phone') }}
                </div>
              @endif
              
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" rows="5" placeholder="Votre message complet"></textarea>
            @if ($errors->has('message'))
                <div class="error">
                    {{ $errors->first('message') }}
                </div>
              @endif
          </div>

          <div class="text-center"><button type="submit" name="send" class="btn orange fw-bold mt-2">Envoyer le massage</button></div>
        </form>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3><img src="{{ asset('assets/img/logo.png') }}" alt="logo Ci-event" class="img-fluid"></h3>
              <p>Abidjan, Angrée<br>Pharmacie Saint Viateur</br>
                <strong>Tel:</strong> +225 2722497873<br>
                <strong>Email:</strong> infos@cievent.ci<br>
              </p>
              <div class="social-links mt-3">
                <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Listes liens</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Accueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Apropos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Teams</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nos Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Communication éditoriale</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Régie événementielle</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Formation & Coaching</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Organisation</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Notre Newsletter</h4>
            <p>Reçevoir tous notre actualité avant, pendant et après</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="S'abonner">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Ci Event<span id="ci">225</span></span></strong>. 
        Tous les droits sont réservés!
      </div>
      <div class="credits">
        <!-- JE SUIS LE SEUL PROPRIETAIRE DE CE PROGRAMME. -->
        Designed by <a href="/">
          <span id="ci"> Cote d'ivoire</span> 
        <span id="event"> Evènement</span>
       </a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>