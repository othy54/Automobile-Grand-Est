<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Automobile Grand-Est</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="/assets/animate.css">
</head>

<body>
  <style>
    body {
      font-family: 'Roboto', sans-serif;
    }

    #navBar {
      height: fit-content;
      position: fixed;
      z-index: 1;
      background-color: white;
      -webkit-box-shadow: 0px -2px 21px -2px rgba(0, 0, 0, 0.75);
      -moz-box-shadow: 0px -2px 21px -2px rgba(0, 0, 0, 0.75);
      box-shadow: 0px -2px 21px -2px rgba(0, 0, 0, 0.75);
    }



    #logo {
      width: 48%;
      display: block;
      margin: auto;
    }

    #menuB {
      width: 9%;
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
      z-index: 3;
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
      z-index: 2;
      height: 100%;
      width: 100%;
      position: fixed;
      display: none;

    }

    #footerContact {

      background-color: #585858;
      padding: 40px;
      color: white;

    }

    #footerContact a[href^=tel] {
      color: inherit;
      text-decoration: none;
    }

    h4 {
      font-size: 35px;
    }
  </style>

  @yield('css')

  <div id="filter">

  </div>


  <div class="sidebar">
    <span id="closeNb" style="position: absolute; top: 0; right: 0.5em; font-size: 2.3em;">&times;</span>
    <div class="d-flex flex-column justify-content-start " style="height : 100%;">

      <a href=" {{ url('/') }} ">Accueil</a>
      <a href="">Catalogue</a>
      <a href="">Devis</a>
      <a href="">Reprise</a>
      <a href="">L'entreprise</a>

    </div>
  </div>

  <div id="navBar">
    <nav>
      <a href="JavaScript:void(0);">
        <img class="img-fluid" id="menuB" src="img/menuK.png" alt="">
      </a>
      <img class="img-fluid" id="logo" src='img/Logo.png' alt="Garage Luneville">
    </nav>
  </div>

  @yield('content')



  <div id="footerContact">

    <h4>Contact</h4>
    <br>
    <div>

      <span>Tél : 09 84 58 04 23</span><br>
      <span>Tél : 06 45 31 84 39</span><br>
      <span>Tél : 06 18 24 37 75</span><br>

    </div>
    <br>
    <br>
    <h4>Adresse</h4>
    <br>

    <p>Chemin de la ville <br> 54300 Hériménil</p>

    <br>
    <br>

    <h4>Localisation</h4>
    <br>

    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d660.0016718206159!2d6.48633694805958!3d48.57142071630071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4794805151917ca1%3A0xc676d6a73780dfbd!2sChemin+de+la+ville%2C+54300+H%C3%A9rim%C3%A9nil!5e0!3m2!1sfr!2sfr!4v1558897118101!5m2!1sfr!2sfr"
      width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

    <br><br>
    <h4>Formulaire de contact</h4>
    <br>

    <form action="" ">

        <input type=" text" class="form-control" placeholder="Nom"> <br>
      <input type="mail" class="form-control" placeholder="Email"> <br>
      <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Message..."></textarea> <br>
      <button
        style="background-color: transparent; color: white; height: 40px; border: 1px solid white; float:right; border-radius: 3px;">Envoyer</button>
      <br>

    </form>


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

  <script>
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



  </script>

</body>

</html>