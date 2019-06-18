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
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center
    }

    #secondContent h3 {
        font-size: 2.5vw;
        font-weight: bold
    }

    #secondContent h2 {
        font-size: 1.5vw;
    }



    #cardSearch {
        background-color: whitesmoke;
        padding: 30px;
        text-align: center;
        -webkit-box-shadow: 0px 0px 12px 0px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 0px 0px 12px 0px rgba(0, 0, 0, 0.75);
        box-shadow: 0px 0px 12px 0px rgba(0, 0, 0, 0.75);
        border-radius: 5px;
    }

    #cardSearch button {
        background-color: #B81111;
        border-color: #B81111
    }

    #cardSearch button:hover {
        background-color: #760B0B !important;
        border-color: #760B0B !important
    }

    #thirdContent {
        background-image: url('/img/speed.jpg');
        padding-top: 60px;
        padding-bottom: 40px;
    }

    .slick-current {
        display: flex !important;
        flex-direction: column;
        align-items: center;

    }



    .slick-arrow {
        margin: 20px;
        border-radius: 700px;
        border: 1px solid #B81111;
        background-color: #B81111;
    }

    .slick-arrow:hover {
        background-color: #760B0B;
    }

    #fourthContent {
        background-color: #B81111;
        height: 20vh;
        color: white;
        text-align: center;
    }

    a {
        text-decoration: none !important;
    }

    #fifthContent {
        color: #B81111;
        font-size: 2vw;
        background-color: whitesmoke
    }

    #fifthContent img {
        width: 10%;
    }

    
</style>

@stop @section('content')



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
                    <h3 style="font-size: 3.5vw" class="mt-5">Tout type d'automobiles, motos & utilitaires</h3>

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
                <p style="width: 80%; margin: auto;">Vous trouverez chez nous les meilleurs prix du marché, nous faisons
                    même des reprises .</p>

            </div>

            <div class="vignette">
                <img src="/img/nettoyage.png" alt="" class="img-fluid">
                <h4>NETTOYAGE</h4>
                <p style="width: 80%; margin: auto;">Intérieur comme extérieur, nettoyage des sièges, nettoyage moteur,
                    polissage, lustrage, cire et plus encore !</p>

            </div>

            <div class="vignette" data-aos="fade-right">
                <img src="/img/garantie.png" alt="" class="img-fluid">
                <h4>GARANTIE</h4>
                <p style="width: 80%; margin: auto;">Nous vous offrons une garantie minimale de <strong>6 mois</strong>
                    européenne avec possibilité de l'allonger jusqu'à <strong>60 mois</strong>.</p>

            </div>

        </div>
    </div>
</div>
<div id="secondContent">

    <div data-aos="fade-up" class="d-flex flex-column">
        <h3>AUTOMOBILES GRAND EST</h3>
        <h2> Votre expert en automobiles à Lunéville </h2>
    </div>


</div>

<div id="thirdContent">

    <h3 style="text-align: center; font-size: 2vw; color: #B81111;">Rercherche rapide</h3>
    <div class="container mt-5">
        <div class="row justify-content-center ">
            <div style="width: 90%" id="cardSearch">
                <form action="{{ url('/catalogue/search') }}" method="post"
                    class="d-flex flex-wrap justify-content-center align-items-end">
                    {{ csrf_field() }}
                    <div class="col-3">
                        <label for="brand">Marque</label> <select class="form-control mx-2" name="brand"
                            id="brandSelected">
                            <option value=""></option>
                            @foreach($brands as $brand)
                            <option value=" {{ $brand->brand }} "> {{ $brand->brand }} </option>

                            @endforeach

                        </select>
                    </div>

                    <div class="col-3">
                        <label for="model">Modèle</label> <select class="form-control mx-2" name="model"
                            id="modelSelected">
                            <option value=""></option>

                        </select>
                    </div>

                    <div class="col-3">
                        <label for="price">Prix (max)</label> <select class="form-control mx-2  " name="price" id="">
                            <option value=""></option>
                            <option value="2000">2 000 €</option>
                            <option value="4000">4 000 €</option>
                            <option value="6000">6 000 €</option>
                            <option value="8000">8 000 €</option>
                            <option value="10000">10 000 €</option>
                            <option value="15000">15 000 €</option>

                        </select>
                    </div>


                    <div class="col-3">
                        <button class="btn btn-primary" id="searchBtn">Rechercher</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <hr class="mt-5" style="width: 80%;">
    <h3 class="mx-5" style="text-align: center; font-size: 2vw; color: #B81111">Derniers ajouts</h3>

    <div class="container mt-5">
        <div style="width: 80%; margin:auto">
            <div class="mySliders d-flex justify-content-center align-items-center">

                @foreach($vehicles as $index => $vehicle)
                <div class="card" style="background-color: whitesmoke; width: fit-content">
                    <img src="/uploads/{{ $images[$index]->imageName }}" alt="" class="card-img-top lozard"
                        style="width: 100%">
                    <div class="card-body">
                        <h5 class="card-title"><a href={{ url('/catalogue/'.$vehicle->id) }}> {{ $vehicle->brand }}
                                {{ $vehicle->model }} {{ $vehicle->version }} </a></h5>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <span style="font-size: 20px; color: #B81111">{{ number_format($vehicle->distance, 0, '.',' ') }} km</span><span
                                style="font-size: 20px; color: #B81111">{{ number_format($vehicle->price, 0, '.',' ') }} €</span>
                        </div>

                    </div>

                </div>
                @endforeach

            </div>


        </div>

    </div>
</div>

<div id="fourthContent" class="d-flex justify-content-center align-items-center">

    <div data-aos="fade-up">
        <h3 style="font-size: 2.3vw">Intéressés par un véhicule ou un service ?</h3>
        <span style="font-size: 1.5vw">Prenez rendez-vous ici</span>
    </div>
</div>





<div id="map">

</div>
<div id="fifthContent" class="py-4" style="text-align: center;">

    <span>Retrouvez-nous aussi sur :<span>

            <div class="mt-3">
                <a href="https://www.facebook.com/Automobiles-Grand-Est-1453452848057353/" target=_blank><img src="/img/facebook.png"
                        alt="" class="img-fluid mr-5"></a> <a href="https://www.leboncoin.fr/boutique/71099" target=_blank><img
                        src="/img/leboncoin.png" alt="" class="img-fluid"></a>

            </div>

</div>


@stop @section('script')


<script>

    var map;

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {
                lat: 48.5708179,
                lng: 6.4885831
            },
            zoom: 13
        });
        var marker = new google.maps.Marker({
            position: {
                lat: 48.5708179,
                lng: 6.4885831
            },
            map: map,
            animation: google.maps.Animation.DROP,
            title: 'AUTOMOBILES GRAND EST'
        });
    }

    $(document).ready(function() {

        $('.mySliders').slick({
            arrows: true,
            autoplay: true,


        });

        $('.slick-next').text('🡆');
        $('.slick-prev').text('🡄');
        $('.slick-arrow').addClass('btn btn-danger');



        $('#brandSelected').on('change', function() {
            var brand = $('#brandSelected option:selected').text();
            $.ajax({
                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}'
                },
                method: 'post',
                url: '/search',
                data: {
                    brand: brand
                },
                success: function(data) {
                    data = JSON.parse(data)
                    console.log(data)
                    $('#modelSelected').html('<option></option>');
                    $.each(data, function(i, val) {

                        $('#modelSelected').append('<option>' + val.model + '</option>')
                    })

                }
            });
        })
    })
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXEm7b72ypHVBS-nio-qX9715xxB8IrSU&callback=initMap" async
    defer></script>

@endsection