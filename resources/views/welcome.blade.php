@extends('layouts.desktopLay')

@section('style')


<style>
    #firstContent {
        text-align: center;
        padding-top: 100px;
        background-image: url('/img/garage.jpg');

    }

    #firstContent h3,
    #firstContent h4 {
        color: #B81111
    }



    #firstContent>div>h3 {
        font-size: 2.3vw;
        font-weight: 700;
        letter-spacing: 0.1vw
    }

    .vignette {
        width: 36vw;
    }

    .vignette>h4 {
        margin-top: 6vh;
        font-weight: bold;
        font-size: 1.1vw;
        text-align: center;
    }

    #secondContent {
        height: 190px;
        background-color: #B81111;
        color: white;
    }

    #secondContent>h3 {
        text-align: center;
        padding-top: 30px;
        font-size: 2.5vw;
        font-weight: bold
    }
</style>

@stop

@section('content')

<div class="bd-example" style="padding-top: 25px;">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/slide1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center"
                    style="height: 100%">
                    <h2 style="font-size: 3.8vw" class="mt-5">Automobiles Grand Est</h2>

                    <h1 style="font-size: 1.8vw">Achat, Vente & Location de voitures à Lunéville</h1>

                </div>
            </div>
            <div class="carousel-item">
                <img src="img/slide2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex align-items-center justify-content-center" style="height: 100%">
                    <h3 style="font-size: 3.5vw" class="mt-5">Votre garage près de chez vous</h3>

                </div>
            </div>
            <div class="carousel-item">
                <img src="img/slide3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex align-items-center justify-content-center" style="height: 100%">
                    <h3 style="font-size: 3.5vw" class="mt-5">Votre garage près de chez vous</h3>

                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div id="firstContent">

    <div data-aos="fade-up">
        <h3> SPECIALISTE EN VENTE & ACHAT DE VOITURES</h3>
        <span style="font-size: 1.5vw;"> Profitez de nos services variés !</span>
    </div>

    <div class="container" style="margin-top: 140px; padding-bottom: 140px;">
        <div class="d-flex justify-content-around">

            <div class="vignette" data-aos="fade-left">
                <img src="/img/vente.png" alt="" class="img-fluid">

                <h4>ACHAT, VENTE & LOCATION</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sed iure labore magnam perferendis
                    sunt numquam enim.</p>

            </div>

            <div class="vignette">
                <img src="/img/nettoyage.png" alt="" class="img-fluid">
                <h4>NETTOYAGE</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sed iure labore magnam perferendis
                    sunt numquam enim.</p>

            </div>

            <div class="vignette" data-aos="fade-right">
                <img src="/img/garantie.png" alt="" class="img-fluid">
                <h4>GARANTIE</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sed iure labore magnam perferendis
                    sunt numquam enim.</p>

            </div>

        </div>
    </div>
</div>
<div id="secondContent">

    <h3 data-aos="fade-up">AUTOMOBILES GRAND EST</h3>


</div>

<div style="height: 80vh">

</div>


<div id="map">

</div>


@stop

@section('script')


<script>
    var map;
        function initMap() {
          map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 48.5708179, lng: 6.4885831},
            zoom: 13
          });
          var marker = new google.maps.Marker({
            position: {lat: 48.5708179, lng: 6.4885831},
            map: map,
            animation: google.maps.Animation.DROP,
            title: 'AUTOMOBILES GRAND EST'
            });
        }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXEm7b72ypHVBS-nio-qX9715xxB8IrSU&callback=initMap" async
    defer></script>

@endsection