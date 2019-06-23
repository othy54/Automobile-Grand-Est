@extends('layouts.mobileLay')
@section('css')


<style>
  #firstDiv {
    color: white;
    font-size: 5vh;
    text-align: right;
    padding-top: 3.2em;
    height: 80vh;
    text-transform: uppercase;
    line-height: 1.4em;
    padding-right: 0.4em;

  }

  #container {
    background-color: white;
    position: relative;
    background-image: url('/img/garageM.jpg');
  }

  hr {
    width: 80%;
    background-color: #B81111;
    margin-bottom: 60px;
  }

  #searchCard {
    width: 80%;
    text-align: center;
    margin: auto;
    background-color: #F2F1F1;
    border-radius: 8px;
    padding: 10px !important;

    -webkit-box-shadow: 0px 0px 11px 0px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: 0px 0px 11px 0px rgba(0, 0, 0, 0.75);
    box-shadow: 0px 0px 11px 0px rgba(0, 0, 0, 0.75);
    margin-bottom: 60px;

  }

  label {
    margin-top: 20px;
    font-size: 25px;
    color: #B81111;
  }


  select {
    width: 75% !important;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 20px;

  }

  #container h3 {
    text-align: center;
    color: #B81111;
  }



  .vignette {
    text-align: center;
  }

  .vignette h4 {
    color: #B81111
  }

  #btnSearchV {
    background-color: #B81111;
    border: 0px
  }

  #fourthContent {

    background-color: #B81111;
    color: white;
    text-align: center;

  }

  #map {
    height: 35vh;
  }

  #fifthContent {
    color: #B81111;
    font-size: 5.5vw;
    background-color: whitesmoke
  }

  #fifthContent img {

    width: 40%;

  }
</style>


@stop

@section('content')

<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/img/slideM1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption" style="width: 100%; left:0; right:0; top:15vh; z-index: 2">
          <h2 style="font-size: 12vw">Automobiles Grand Est</h2>
          <br>
          <br>
          <h2 style="font-size: 6vw">Achat, Vente & Location <br> de voitures à Lunéville</h2>

        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/slideM2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption" style="width: 100%; left:0; right:0; top:15vh; z-index: 2">
          <h3 style="font-size: 12vw">Votre garage près de chez vous</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/slideM3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption" style="width: 100%; left:0; right:0; top:15vh; z-index: 2">
          <h3 style="font-size: 10vw">Tout type d'automobiles, motos & utilitaires</h3>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="container">

  <div style="text-align: center" class="pt-5">
    <h4 style="color: #B81111; font-weight: 700">SPECIALISTE EN VENTE & ACHAT DE VOITURES</h4>
    <p style="font-size: 5vw" class="mt-4">Profitez de nos services variés !</p>
  </div>

  <div class="mt-5">
    <div class="vignette" data-aos="fade-up">
      <img src="/img/vente.png" alt="" class="img-fluid">
      <h4 class="mt-4">ACHAT, VENTE & LOCATION</h4>
      <p style="width: 80%; margin: auto;">Vous trouverez chez nous les meilleurs prix du marché, nous faisons
        même des reprises .</p>

    </div>

    <hr>
    <div class="vignette" data-aos="fade-up">
      <img src="/img/nettoyage.png" alt="" class="img-fluid">
      <h4 class="mt-4">NETTOYAGE</h4>
      <p style="width: 80%; margin: auto;">Intérieur comme extérieur, nettoyage des sièges, nettoyage moteur,
        polissage, lustrage, cire et plus encore !</p>

    </div>
    <hr>
    <div class="vignette" data-aos="fade-up">
      <img src="/img/garantie.png" alt="" class="img-fluid">
      <h4 class="mt-4">GARANTIE</h4>
      <p style="width: 80%; margin: auto;">Nous vous offrons une garantie minimale de <strong>6 mois</strong>
        européenne avec possibilité de l'allonger jusqu'à <strong>60 mois</strong>.</p>

    </div>

    <div style="background-color: #B81111; text-align:center; color:white" class="mt-5 py-3">
      <div data-aos="fade-up" class="d-flex flex-column">
        <span style="font-size: 6vw; font-weight: 700">AUTOMOBILES GRAND EST</span>
        <span> Votre expert en automobiles à Lunéville </span>
      </div>
    </div>

  </div>

  <h3 style="text-align: center; font-size: 8vw; color: #B81111;" class="my-5">Rercherche rapide</h3>


  <div id="searchCard">


    <form action="{{ url('/catalogue/search') }}" method="post">
      {{ csrf_field() }}
      <label for="brand">Marque</label>
      <select name="brand" id="brandSelected" class="selectSearch form-control">
        <option value=""></option>
        @foreach($brands as $brand)
        <option value=" {{ $brand->brand }} "> {{ $brand->brand }} </option>

        @endforeach
      </select>

      <label for="model">Modèle</label>
      <select name="model" id="modelSelected" class="selectSearch form-control"></select>
      <option value=""></option>


      <label for="price">Prix (max)</label>
      <select name="price" id="" class="selectSearch form-control">

        <option value=""></option>
        <option value="2000">2 000 €</option>
        <option value="2500">2 500 €</option>
        <option value="3000">3 000 €</option>
        <option value="3500">3 500 €</option>
        <option value="4000">4 000 €</option>
        <option value="4500">4 500 €</option>
        <option value="5000">5 000 €</option>
        <option value="5500">5 500 €</option>
        <option value="6000">6 000 €</option>
        <option value="6500">6 500 €</option>
        <option value="7000">7 000 €</option>
        <option value="7500">7 500 €</option>
        <option value="8000">8 000 €</option>
        <option value="8500">8 500 €</option>
        <option value="9000">9 000 €</option>
        <option value="9500">9 500 €</option>
        <option value="10000">10 000 €</option>
        <option value="12000">12 000 €</option>
        <option value="15000">15 000 €</option>
        <option value="17000">17 000 €</option>

      </select>

      <button class="btn btn-primary mb-3" id="btnSearchV" onclick="vibrate()"> Rechercher </button>
    </form>


  </div>

  <hr>
  <div>
    <h3>
      Derniers ajouts
    </h3>

    <div class="container mt-5">
      <div style="width: 80%; margin:auto">
        <div class="mySliders d-flex justify-content-center align-items-center">
          @foreach($vehicles as $index => $vehicle)
          <div class="card" style="background-color: whitesmoke; width: fit-content">
            <img src="/uploads/{{ $images[$index]->imageName }}" alt="" class="card-img-top lozard">
            <div class="card-body">
              <h5 class="card-title text-center"><a href={{ url('/catalogue/'.$vehicle->id) }}> {{ $vehicle->brand }}
                  {{ $vehicle->model }} {{ $vehicle->version }} </a></h5>
              <hr class="mb-2">
              <div class="d-flex justify-content-between">
                <span style="font-size: 20px; color: #B81111">{{ number_format($vehicle->distance, 0, '.',' ') }}
                  km</span><span
                  style="font-size: 20px; color: #B81111">{{ number_format($vehicle->price, 0, '.',' ') }} €</span>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>

  <div id="fourthContent" class="d-flex justify-content-center align-items-center py-4 mt-5">
    <div data-aos="fade-up">
      <p style="font-size: 5vw; font-weight: 700">Intéressés par un de nos services ?</p>
      <span style="font-size: 4.5vw">Contactez-nous !</span>
    </div>
  </div>
  <div id="map">

  </div>
  <div id="fifthContent" class="py-4" style="text-align: center;">

    <span>Retrouvez-nous aussi sur :<span>

        <div class="mt-3">
          <a href="https://www.facebook.com/Automobiles-Grand-Est-1453452848057353/" target=_blank><img
              src="/img/facebook.png" alt="" class="img-fluid mr-3"></a> <a
            href="https://www.leboncoin.fr/boutique/71099" target=_blank><img src="/img/leboncoin.png" alt=""
              class="img-fluid"></a>

        </div>

  </div>
</div>



@endsection




@section('script')

<script>
  $('.mySliders').slick({
            arrows: false,
            autoplay: true,
        });


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

  function vibrate() {
    navigator.vibrate(200);
  }

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
                    $('#modelSelected').html('<option></option>');
                    $.each(data, function(i, val) {

                        $('#modelSelected').append('<option>' + val.model + '</option>')
                    })

                }
            });
        })

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXEm7b72ypHVBS-nio-qX9715xxB8IrSU&callback=initMap" async
  defer></script>

@endsection