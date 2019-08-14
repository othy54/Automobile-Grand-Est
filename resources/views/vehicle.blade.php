@extends('layouts.desktopLay')

@section('title')

<title> {{ $vehicle[0]->brand }} {{ $vehicle[0]->model }} {{ $vehicle[0]->version }} - Automobiles Grand Est </title>
    
@stop

@section('style')

<style>
    .slick-list {
        margin-top: 5px;

    }

    .slick-arrow {
        margin: 20px;
        border-radius: 700px;
        border: 1px solid #B81111;
        background-color: #B81111;
        height: 100%;

    }

    .slick-arrow:hover {
        background-color: #760B0B;
    }

    .slick-track img {
        border: 2px solid white;
    }

    .slider-for {
        transition: 0.3s;
        z-index: 555;

    }

    

    #titleVehicle h1 {
        text-align: center;
        color: #B81111
    }

    #filter {
        height: 100%;
        width: 100%;
        position: fixed;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 500;
        display: none;
        transition: 0.3s
    }

    tr>td {
        width: 250px;
    }

    td:first-child {
        font-weight: bold;
        color: #B81111
    }
</style>

@stop


@section('content')

<div id="filter">

</div>

<div class="container" style="padding-top: 150px;">

    <div id="titleVehicle" class="mt-5">

        <h1> {{ $vehicle[0]->brand }} {{ $vehicle[0]->model }} {{ $vehicle[0]->version }} @if($vehicle[0]->sold == 1) (Vendu) @endif </h1>
        <hr>


    </div>

    <div style="width:50%; margin: auto">
        <div class="slider slider-for">
            @foreach($images as $image)
            <div><img src="/uploads/{{ $image->imageName }} " alt="" style="margin:auto;" class="img-fluid"></div>
            @endforeach
        </div>
        <div class="slider slider-nav d-flex">
            @foreach($images as $image)
            <div><img src="/uploads/{{ $image->imageName }} " alt="" class="img-fluid"></div>
            @endforeach

        </div>
    </div>
    <hr>

    <div class="container">
        <div style="margin:auto; width: fit-content; font-size: 45px;"><span style="color: #B81111">
                {{ number_format($vehicle[0]->price,0,'.', ' ') }} € </span> | <span>
                {{ number_format($vehicle[0]->distance,0,  '.', ' ') }} Km </span> | <span>
                {{ date('d/m/Y', strtotime($vehicle[0]->date)) }} </span> | <span> {{ $vehicle[0]->power }} Cv</span>
        </div> <br>
        <hr>
        <div class="container d-flex">
            <div style="font-size: large" class="col-6">
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
                        <td>Nombre de places : </td>
                        <td> {{ $vehicle[0]->place }} </td>
                    </tr>
                </table>

            </div>
            <div style="font-size: large" class="col-6">
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
                        <td>Nombre de portes : </td>
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
        <div style="text-align: center; font-size: 30px">
            Appelez le 06 45 31 84 39 ou 06 18 24 37 75 pour ce véhicule
        </div>
    </div>
</div>

<div style="height: 30vh">


</div>

@stop


@section('script')


<script>
    $(document).ready(function() {

        

        $('.slider-for').hover(function () {
            $('#filter').show();
            $(this).css({transform: 'scale(1.7)', transition: '0.3s', zIndex: '900'})
            $('nav').css('z-index', '0')
        },

        function() {
            $('#filter').hide();
            $(this).css({transform: 'scale(1)', transition: '0.3s', zIndex: '500'})
            $('nav').css('z-index', '9000')
        })

        document.getElementById('info').setAttribute('data-aos', ' ');
        document.getElementById('contactMe').setAttribute('data-aos', ' ');

        


        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            centerMode: true,
            focusOnSelect: true
        });

        $('.slick-next').text('>').css('font-weight' ,'bold');
        $('.slick-prev').text('<').css('font-weight' ,'bold');
        $('.slick-arrow').addClass('btn btn-danger');

    })

    


</script>

@stop