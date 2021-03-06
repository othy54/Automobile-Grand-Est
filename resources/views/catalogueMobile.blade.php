@extends('layouts.mobileLay')

@section('title')

<title> Catalogue - Automobiles Grand Est </title>
    
@stop

@section('css')

<style>
    #titlePage {
        padding-top: 100px;
        text-align: center;
        color: #B81111
    }

    hr {
        width: 80%;
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
    #sold {
        background-image: url('/img/vendu.png');
        background-size: cover;
        width: 40%;
        height: 40%;
        position: absolute;

    }
</style>

@stop

@section('content')

<div id="titlePage">
    <h3 style="font-size: 10vw; font-weight: bold">CATALOGUE</h3>
    <hr>
</div>

<div class="container mt-5">
    <div class="row justify-content-center ">
        <div style="width: 80%" id="cardSearch" data-aos="flip-left">
            <form action=" {{ url('/catalogue/search') }} " method="post"
                class="d-flex flex-wrap justify-content-center align-items-end">
                {{ csrf_field() }}
                <div class="col-12 mt-4">
                    <label for="brand">Marque</label> <select class="form-control mx-2" name="brand" id="brandSelected">
                        <option value=""></option>
                        @foreach($brands as $brand)
                        <option value=" {{ $brand->brand }} "> {{ $brand->brand }} </option>

                        @endforeach

                    </select>
                </div>

                <div class="col-12 mt-4">
                    <label for="model">Modèle</label> <select class="form-control mx-2" name="model" id="modelSelected">
                        <option value=""></option>

                    </select>
                </div>

                <div class="col-12 mt-4">
                    <label for="price">Prix (max)</label> <select class="form-control mx-2  " name="price" id="">
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
                </div>

                <div class="col-12 mt-4 hideSelect" style="display: none">
                    <label for="distance">Km (max)</label> <select class="form-control mx-2 " name="distance" id="">
                        <option value=""></option>
                        <option value="50000">50 000 km</option>
                        <option value="100000">100 000 km</option>
                        <option value="150000">150 000 km</option>
                        <option value="200000">200 000 km</option>
                        <option value="250000">250 000 km</option>
                    </select>
                </div>
                <div class="col-12 mt-4 hideSelect" style="display: none">
                    <label for="fuel">Carburant</label> <select class="form-control mx-2 " name="fuel" id="">
                        <option value=""></option>
                        <option value="Essence">Essence</option>
                        <option value="Diesel">Diesel</option>
                        <option value="Electrique">Electrique</option>
                        <option value="Hybride">Hybride</option>
                    </select>
                </div>
                <div class="col-12 mt-4 hideSelect" style="display: none">
                    <label for="boite">Boîte</label> <select class="form-control mx-2 " name="boite" id="">
                        <option value=""></option>
                        <option value="Manuelle">Manuelle</option>
                        <option value="Automatique">Automatique</option>
                        <option value="Semi-Automatique">Semi-Automatique</option>
                        <option value="Sequentielle">Séquentielle</option>
                    </select>
                </div>




                <div class="col-12 mt-5">
                    <button class="btn btn-primary" id="searchBtn">Rechercher</button>
                </div>
                <div class="col-12 mt-3">

                    <span style="cursor: pointer; color: #B81111;" id="moreCriteria">+ de critère</span>

                </div>
            </form>
        </div>
    </div>
</div>
<hr class="mt-5" style="width: 100%; margin-bottom: 0">
<div style="background-color: #f4f7f7 ; padding-top: 50px;">
    @isset($count)
    <h3 class="mb-5" style="text-align: center">
        Résultats de recherche : {{ $count }}
    </h3>
    @endisset

    <div class="container" style="width: 80%;">

        @foreach($vehicles as $index => $vehicle)

        <div class="card" style="" data-aos="fade-up">

            <div class="row no-gutters">

                <div class="col-12">
                    @if($vehicle->sold == '1')
                    <div id="sold">

                    </div>
                    @endif
                    <a href={{ url( '/catalogue/'.$vehicle->id) }}><img src="/uploads/{{ $images[$index]->imageName }} "
                            alt="" class="card-img-top img-fluid"></a>
                </div>
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center"><a href={{ url( '/catalogue/'.$vehicle->id) }}>
                            {{ $vehicle->brand }}
                            {{ $vehicle->model }} {{ $vehicle->version }}</a>
                    </h5>
                    <hr style="width: 100%">
                    <h5> Boite {{ $vehicle->boite }}</h5>
                    <h5> {{ $vehicle->place }} places, {{ $vehicle->door }} portes </h5>
                    <h5> {{ $vehicle->fuel }} </h5>
                    <hr style="width: 100%">
                    <h5 style="float:left; color: darkblue; font-weight: bold "><span class="thousands">
                            {{ number_format($vehicle->distance, 0, '.',' ') }}</span> km
                    </h5>
                    <h5 style="float:right; color: #B81111; font-weight: bold"> <span
                            class="thousands">{{ number_format($vehicle->price, 0, '.',' ') }} <span>€
                    </h5>
                </div>
            </div>

        </div>
        <hr>

        @endforeach

    </div>

    <div style="background-color: #B81111; padding: 25px" class="d-flex justify-content-center align-items-center">

        <div style="text-align: center; color: white" data-aos="fade-up">
            <h2 style=" line-height: 30px; font-size: 5.5vw; font-weight: 700">Vous ne trouvez pas ce que vous cherchez
                ? </h2><br>
            <h3 style="font-size: 4.5vw">Faites une recherche personnalisée <br> <a href="{{ url('/perso') }}"
                    style="color: white; font-size: 10vw"> >> ici << </a> </h3> </div> </div> </div> @stop
                        @section('script') <script>

                        $('#brandSelected').on('change', function() {

                        var brand = $('#brandSelected option:selected').text();
                        $.ajax({
                        headers: { 'X-CSRF-Token': '{{ csrf_token() }}' },
                        method: 'post',
                        url: '/search',
                        data: { brand: brand },
                        success: function(data) {
                        data = JSON.parse(data)
                        $('#modelSelected').html('<option></option>');
                        $.each(data, function(i, val) {

                        $('#modelSelected').append('<option>' + val.model + '</option>')
                        })

                        }
                        });
                        })

                        $('#moreCriteria').on('click', function() {
                        $('.hideSelect').slideToggle();

                        if($('#moreCriteria').text() == "+ de critère") {
                        $('#moreCriteria').text("- de critère")
                        }else{
                        $('#moreCriteria').text("+ de critère")
                        }

                        })

                        </script>

                        @stop