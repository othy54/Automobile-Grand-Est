@extends('layouts.desktopLay')

@section('style')

<style>

    #firstContent {
        text-align: center;
        padding-top: 100px;
        background-image: url('/img/garage.jpg');
        height: 80vh;
        color: #B81111
    }

    #firstContent>h3 {
        font-size: 2.3vw;
        font-weight: 700;
        
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
                    <h2 style="font-size: 3.5vw" class="mt-5">Automobiles Grand Est</h2>

                    <h1 style="font-size: 1.8vw">Achat et Vente de voiture à Lunéville</h1>

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

    <h3> SPECIALISTE EN VENTE & ACHAT DE VOITURES</h3>
    <span style="font-size: 20px;"> Profitez de nos services variés !</span>



</div>

@stop

@section('script')

<script>



</script>

@endsection