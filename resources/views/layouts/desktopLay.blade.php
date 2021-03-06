<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('title')
    

    <link rel="stylesheet" href="/assets/bootstrap.min.css" defer>
    <link rel="stylesheet" href="/assets/aos.css" defer>
    <link rel="stylesheet" href="/assets/slick.min.css" defer>
    <link rel="stylesheet" href="/assets/cookieconsent.min.css" defer/>
    
    <!-- Styles -->
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

        #logo {
            margin-left: 10%;
        }

        nav {
            width: 100%;
            position: fixed;
            -webkit-box-shadow: 0px -2px 21px -2px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 0px -2px 21px -2px rgba(0, 0, 0, 0.75);
            box-shadow: 0px -2px 21px -2px rgba(0, 0, 0, 0.75);
            z-index: 9000;
            background-color: white;
        }

        #menu>a {
            color: #B81111;
            font-size: 1.3vw;
            margin-right: 30px;
        }

        #menu>a:hover {
            text-decoration: none;
            border-bottom: 2px solid #B81111;
        }

        #contactMe {
            background-color: #B81111;
        }

        #contactMe input,
        #contactMe textarea {
            margin-top: 1vh;
        }

        #contactMe span {
            color: white;
            font-size: 2vw;
            font-weight: 500;
        }

        #contactMe button {
            color: white;
            border: 1px solid white;
            background-color: transparent;
            margin-top: 1vh;
            padding: 5px;
            float: right;
            font-size: 2vh
        }

        #miniFooter {
            background-color: #15171c;
            height: 40px;
            display: flex;
            justify-content: flex-end;
        }

        #miniFooter a {
            text-align: right;
            color: gray;
            text-decoration: none;
        }

        #info {
            background-image: url('/img/contact.jpg');
            background-size: cover;
            color: white;
            letter-spacing: 1.5px;
        }
    </style>
    @yield('style')
</head>

<body>

    <nav>
        <div class="d-flex justify-content-around " style="height : 100%;">
            <img src="/img/vente-voiture-luneville.png" alt="vente achat voiture à lunéville près de nancy" class="img-fluid" id="logo">

            <div id="menu" class="d-flex align-items-center">
                <a href=" {{ url('/') }} ">Accueil</a>
                <a href=" {{ url('/catalogue') }} ">Catalogue</a>
                <a href=" {{ url('/reprise') }} ">Reprise</a>
                <a href=" {{ url('/prestations') }} ">Tarifs</a>
                <a href=" {{ url('/a-propos') }} ">L'entreprise</a>
                <a href="#contactMe">Contact</a>
            </div>

        </div>
    </nav>

    @yield('content')

    <div id="contactContent" class="d-flex" style="height: 70vh;">

        <div style="width:50%;" id="info" class="d-flex align-items-center" data-aos="fade-up">

            <div class="col-6" style="padding-left: 80px; height: 50%; ">
                <div style="font-size: 2vw; font-weight:bold">
                    CONTACT
                </div>
                <div style="font-size: 1.3vw; color: #B81111; font-weight:bold" class="my-4">
                    Téléphone
                </div>
                <div>
                    09 84 58 04 23 <br> 06 45 31 84 39 <br> 06 18 24 37 75 <br>
                </div>
                <div style="font-size: 1.3vw; color: #B81111; font-weight:bold" class="my-4">
                    Adresse
                </div>
                <div>
                    Chemin de la ville <br> 54300 Hériménil
                </div>
            </div>

            <div class="d-flex flex-column col-6" style="padding-left: 80px; height: 50%">
                <div style="font-size: 2vw; font-weight:bold">
                    HORAIRES
                </div>
                <div style="font-size: 1.3vw; color: #B81111; font-weight:bold" class="my-4">
                    Lundi - Vendredi
                </div>
                <div>
                    09h00 - 12h00 <br> 14h00 - 19h00
                </div>
                <div style="font-size: 1.3vw; color: #B81111; font-weight:bold" class="my-4">
                    Samedi
                </div>
                <div>
                    09h00 - 19h00
                </div>
            </div>


        </div>

        <div style="width:50%;" id="contactMe" class="d-flex justify-content-center" data-aos="fade-down">
            <div style="width: 70%;" class="d-flex flex-column justify-content-center">
                <span>Formulaire de contact</span>
                <form method="POST" action=" {{ url('/contact') }} " class="form-group">
                    {{ csrf_field() }}


                    <input id="nameForm" name='name' type="text" placeholder="Nom" class="form-control" required>
                    <input id="emailForm" name='email' type="mail" placeholder="Mail" class="form-control" required>
                    <input id="objectForm" name='object' type="text" placeholder="Objet" class="form-control" required>
                    <textarea id="messageForm" name='message' placeholder="Message" name="" id="" cols="30"
                        style="height: 30vh" class="form-control" required></textarea>
                    <button type="submit">Envoyer</button> @if(session()->has('message'))
                    <div class="alert alert-success" style="width: 50%">
                        {{ session()->get('message') }}
                    </div>
                    @endif
                </form>
            </div>
        </div>

    </div>


    <div id="miniFooter">


        <div class="d-flex justify-content-between align-items-center" style="width: 100%">
            <div style="color: gray; padding-left: 350px; ">
                Réalisation <strong> <a href="https://othman-bensaoula.com"> Othman Bensaoula </a> </strong> | 2019 <a
                    href="mentions"> Mentions Légales </a>| <strong>Automobiles Grand Est</strong>
            </div>
            @if (Route::has('login'))
            <div style="padding-right: 60px">
                @auth
                <a href="{{ url('/home') }}">Home</a> @else
                <a href="{{ route('login') }}">Login</a> @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a> @endif @endauth
            </div>
            @endif

        </div>


    </div>

    <script src="/assets/jquery-3.3.1.min.js"></script>
    <script src="/assets/popper.min.js"></script>
    <script src="/assets/bootstrap.min.js"></script>
    <script src="/assets/aos.js" defer></script>
    <script src="/assets/slick.min.js"></script>
    <script src="/assets/lozad.min.js"></script>
    <script src="/assets/cookieconsent.min.js"></script>

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

        $(document).ready(function() {

            // Add smooth scrolling to all links
            $("a").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function() {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });




            AOS.init({
                once: true,
                duration: 700,
            });

            $(window).scroll(function() {

                var scroll = $(window).scrollTop();
                if (scroll >= 150) {
                    $('#logo').css({
                        width: '193px',
                        transition: '0.5s'
                    })
                } else {
                    $('#logo').css({
                        width: '285px',
                        transition: '0.5s'
                    })
                }
            });





        });
    </script>
    @yield('script')
</body>

</html>