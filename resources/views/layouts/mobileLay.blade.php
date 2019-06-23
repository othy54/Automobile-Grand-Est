<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Automobiles Grand-Est - Achat & Vente de voitures à Lunéville</title>
  <meta name="description"
    content="Automobiles Grand Est est spécialisé dans l'achat, la vente, la location et le nettoyage de voitures situé à Lunéville près de Nancy">


    <link rel="stylesheet" href="/assets/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/aos.css" />
    <link rel="stylesheet" href="/assets/slick.min.css" />
    <link rel="stylesheet" href="/assets/cookieconsent.min.css" />

</head>

<body>
  <style>
     @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            src: local('Montserrat Regular'), local('Montserrat-Regular'), url(/fonts/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: fallback;
        }

        body {
            font-family: 'Montserrat', sans-serif
        }

    nav {}

    #navBar {
      height: fit-content;
      width: 100%;
      position: fixed;
      z-index: 3;
      background-color: white;
      -webkit-box-shadow: 0px -2px 21px -2px rgba(0, 0, 0, 0.75);
      -moz-box-shadow: 0px -2px 21px -2px rgba(0, 0, 0, 0.75);
      box-shadow: 0px -2px 21px -2px rgba(0, 0, 0, 0.75);
    }



    #logo {
      width: 24vh;
      display: block;
      margin: auto;
    }

    #menuB {
      width: 4.8vh;
      display: block;
      position: absolute;
      margin-left: 1em;
      margin-top: 1em;
      border: 1px solid rgba(0, 0, 0, 0.2);
      padding: 5px;
      border-radius: 3px;

    }

    .sidebar {
      position: fixed;
      background-color: white;
      height: 100vh;
      z-index: 5;
      width: 0;
      transition: 0.4s;
      overflow: hidden;
      padding: 50px 0 50px 0;

    }

    .sidebar a {
      display: block;
      font-size: 1.4em;
      text-decoration: none;
      color: #B81111;
      padding-left: 1.9em;
      padding-top: 2em;
      padding-bottom: 1.5em;
    }

    #filter {
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 4;
      height: 100%;
      width: 100%;
      position: fixed;
      display: none;

    }

    #footerContact {

      background-image: url('/img/fond.jpg');
      color: white;


    }

    #footerContact a[href^=tel] {
      color: inherit;
      text-decoration: none;
    }

    h4 {
      font-size: 35px;
    }

    #contactMe input {

      margin-bottom: 15px;

    }

    #contactMe button {
      margin-top: 20px;
      color: white;
      border: 1px solid white;
      background-color: transparent;
      margin-top: 1vh;
      padding: 5px;
      float: right;
      font-size: 2vh
    }

    #miniFooter a {
      text-align: right;
      color: gray;
      text-decoration: none;
    }
  </style>

  @yield('css')

  <div id="filter">

  </div>


  <div class="sidebar">
    <span id="closeNb" style="position: absolute; top: 0; right: 0.5em; font-size: 2.3em;">&times;</span>
    <div class="d-flex flex-column justify-content-start " style="height : 100%;">

      <a href=" {{ url('/') }} ">Accueil</a>
      <a href=" {{ route('cataloguePage') }} ">Catalogue</a>
      <a href=" {{ route('reprisePage') }} ">Reprise</a>
      <a href=" {{ url('/prestations') }} ">Tarifs</a>
      <a href=" {{ url('/a-propos') }} ">L'entreprise</a>

    </div>
  </div>

  <div id="navBar">
    <nav>
      <a href="JavaScript:void(0);">
        <img class="img-fluid" id="menuB" src="/img/menuK.png" alt="">
      </a>
      <img class="img-fluid" id="logo" src='/img/Logo.png' alt="vente achat voiture à lunéville">
    </nav>
  </div>

  @yield('content')



  <div id="footerContact" class="d-flex" data-aos="fade-up">
    <div class="col-6" style="padding-top: 50px; padding-bottom: 50px ; padding-left: 40px; height: 50%;">
      <div style="font-size: 5vw; font-weight:bold">
        CONTACT
      </div>
      <div style="font-size: 3.5vw; color: #B81111; font-weight:bold" class="my-4">
        Téléphone
      </div>
      <div>
        09 84 58 04 23 <br> 06 45 31 84 39 <br> 06 18 24 37 75 <br>
      </div>
      <div style="font-size: 3.5vw; color: #B81111; font-weight:bold" class="my-4">
        Adresse
      </div>
      <div>
        Chemin de la ville <br> 54300 Hériménil
      </div>
    </div>

    <div class="d-flex flex-column col-6" style=" padding-top: 50px;padding-left: 30px; height: 50%">
      <div style="font-size: 5vw; font-weight:bold">
        HORAIRES
      </div>
      <div style="font-size: 3.5vw; color: #B81111; font-weight:bold" class="my-4">
        Lundi - Vendredi
      </div>
      <div>
        09h00 - 12h00 <br> 14h00 - 19h00
      </div>
      <div style="font-size: 3.5vw; color: #B81111; font-weight:bold" class="my-4">
        Samedi
      </div>
      <div>
        09h00 - 19h00
      </div>
    </div>
  </div>
  <div style="background-color: #B81111; color: white" id="contactMe" class="d-flex justify-content-center pt-3"
    data-aos="fade-up">
    <div style="width: 70%;" class="d-flex flex-column justify-content-center">
      <span style="font-size: 5vw">Formulaire de contact</span>
      <form method="POST" action=" {{ url('/contact') }} " class="form-group pt-3">
        {{ csrf_field() }}


        <input id="nameForm" name='name' type="text" placeholder="Nom" class="form-control" required>
        <input id="emailForm" name='email' type="mail" placeholder="Mail" class="form-control" required>
        <input id="objectForm" name='object' type="text" placeholder="Objet" class="form-control">
        <textarea id="messageForm" name='message' placeholder="Message" name="" id="" cols="30" style="height: 20vh"
          class="form-control"></textarea>
        <button type="submit">Envoyer</button> @if(session()->has('message'))
        <div class="alert alert-success" style="width: 50%">
          {{ session()->get('message') }}
        </div>
        @endif
      </form>
    </div>
  </div>
  <div style="color: gray; text-align: center; background-color: #15171c" class="container py-3" id="miniFooter">
    Réalisation <strong> <a href="https://othman-bensaoula.com"> Othman Bensaoula </a> </strong> | 2019 <a
      href="mentions"> Mentions Légales </a>| <strong>Automobiles Grand Est</strong>
  </div>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js"></script>


  @yield('script')

  <script>
    const el = document.querySelector('img');
    const observer = lozad(el); // passing a `NodeList` (e.g. `document.querySelectorAll()`) is also valid
    observer.observe();

    window.addEventListener("load", function(){
    window.cookieconsent.initialise({
    "palette": {
        "popup": {
        "background": "#000"
        },
        "button": {
        "background": "#f1d600"
        }
    },
    "theme": "classic"
    })});

    $('#menuB').on('click', function() {
      $('.sidebar').css({ width: '65%'});
      $('#filter').css('display', 'block');
    })

    $('#closeNb').on('click', function() {
      $('.sidebar').css({ width: 0});
      setTimeout(function() {
        $('#filter').css('display', 'none');
      },330)
      
    })

    AOS.init({
      once: true,
    });



  </script>

</body>

</html>