@extends('layouts.mobileLay')

@section('css')

<style>
    .slick-track img {
        border: 2px solid white;
    }

    #titleVehicle h1 {
        text-align: center;
        color: #B81111
    }

    tr {
        border-bottom: 1px solid #E8E8E8
    }


    table {
        font-size: 4vw
    }

    td:first-child {
        font-weight: bold;
        color: #B81111;

    }

    td {
        width: 45vw
    }
</style>

@stop


@section('content')


<div class="container" style="padding-top: 80px;">

    <div id="titleVehicle" class="mt-5">

        <h1> {{ $vehicle[0]->brand }} {{ $vehicle[0]->model }} @if($vehicle[0]->sold == 1) (Vendu) @endif</h1>
        <hr>


    </div>

    <div style="width:90%; margin: auto">
        <div class="slider slider-for">
            @foreach($images as $image)
            <div><img src="/uploads/{{ $image->imageName }} " alt="" style="margin:auto;" class="img-fluid"></div>
            @endforeach
        </div>
    </div>
    <hr>

    <div class="container">
        <div style="margin:auto; width: fit-content; font-size: 3.5vw; font-weight: bold"><span style="color: #B81111">
                {{ number_format($vehicle[0]->price,0,'.', ' ') }} € </span> | <span>
                {{ number_format($vehicle[0]->distance,0,  '.', ' ') }} Km </span> | <span>
                {{ date('d/m/Y', strtotime($vehicle[0]->date)) }} </span> | <span> {{ $vehicle[0]->power }} Cv</span>
        </div> <br>
        <hr>
        <div class="container d-flex flex-wrap">
            <div style="font-size: large" class="col-12">
                <table>
                    <tr>
                        <td>Marque : </td>
                        <td>{{ $vehicle[0]->brand }}</td>
                    </tr>
                    <tr>
                        <td>Modèle : </td>
                        <td>{{ $vehicle[0]->model }} </td>
                    </tr>
                    <tr>
                        <td>Version : </td>
                        <td>{{ $vehicle[0]->version }} </td>
                    </tr>
                    <tr>
                        <td>Places : </td>
                        <td> {{ $vehicle[0]->place }} </td>
                    </tr>
                </table>

            </div>
            <div style="font-size: large" class="col-12">
                <table>
                    <tr>
                        <td>Boite : </td>
                        <td>{{ $vehicle[0]->boite }}</td>
                    </tr>
                    <tr>
                        <td>Carburant : </td>
                        <td>{{ $vehicle[0]->fuel }} </td>
                    </tr>
                    <tr>
                        <td>Année : </td>
                        <td>{{ date('Y', strtotime($vehicle[0]->date) )  }} </td>
                    </tr>
                    <tr>
                        <td>Portes : </td>
                        <td> {{ $vehicle[0]->door }} </td>
                    </tr>
                </table>
            </div>

        </div>
        <hr>
        <div style="text-align: center; font-size: 20px">

            <span style="font-weight: bold; color: #B81111">Options</span><br>
            <div id="allOptions">

                {!! nl2br($vehicle[0]->option) !!}

            </div>

        </div>
        <hr>
        <div style="text-align: center; font-size: 20px">

            <span style="font-weight: bold; color: #B81111">Description</span><br> <br>
            <div style="text-align: left">

                {!! nl2br($vehicle[0]->description) !!}

            </div>
        </div>
        <hr>
        <div style="text-align: center; font-size: 6vw; color:#B81111" class="mb-4">

                Appelez le 06 45 31 84 39 ou 06 18 24 37 75 pour ce véhicule


        </div>

    </div>

</div>


@stop


@section('script')


<script>
    $(document).ready(function() {

        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            autoplay: true,
        });

    })

</script>

@endsection