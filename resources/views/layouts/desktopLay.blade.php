<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Automobile Grand-Est - Achat | Vente | Location & Nettoyage de voitures à Lunéville</title>
    <meta name="description" content="">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="/assets/animate.css">
    <!-- Styles -->
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            font-display: fallback;
            margin: 0
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
            z-index: 9999;
            background-color: white;
        }

        #menu>a {
            color: #B81111;
            font-size: 1.3vw;
            margin-right: 30px;
            
            
        }
       
        #menu>a:hover {
            
            text-decoration: none;
            border-bottom : 2px solid #B81111;

        }
    </style>
    @yield('style')
</head>

<body>

    <nav>
        <div class="d-flex justify-content-around " style="height : 100%;">
            <img src="/img/Logo.png" alt="" class="img-fluid" id="logo">

            <div id="menu" class="d-flex align-items-center">
                <a href=" {{ url('/') }} ">Accueil</a>
                <a href="">Catalogue</a>
                <a href="">Reprise</a>
                <a href="">L'entreprise</a>
                <a href="">Contact</a>
            </div>

        </div>
    </nav>

    @yield('content')




    <br>


    <div style="height: 80vh">


    </div>




    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {

            $(window).scroll(function() {

                var scroll = $(window).scrollTop();
                if (scroll >= 150 ) {
                    $('#logo').css({width: '193px', transition: '0.5s'})
                }else{
                    $('#logo').css({width: '285px', transition: '0.5s'})
                }
            })


        })
                
    </script>
    @yield('script')
</body>

</html>