@extends('layouts.desktopLay')

@section('style')
<link rel="stylesheet" href="assets/twentytwenty.css" type="text/css" media="screen" />


<style>
    .container h1 {
        text-align: center;
        color: #B81111;
    }
</style>

@stop

@section('content')

<div class="container" style="padding-top: 150px;">

    <h1 style="font-size: 2.5vw; font-weight: bold">TARIFS</h1>
    <hr>

    <h2 style="font-size: 2vw; color: #B81111">Nettoyage : </h2>
    <ul>
        <li>Nettoyage intérieur / extérieur</li>
        <li>Nettoyage des sièges</li>
        <li>Nettoyage moteur</li>
        <li>Polissage</li>
        <li>Lustrage</li>
        <li>Cire</li>
        <li>...</li>
    </ul>
    <span style="font-size: 1.5vw">A partir de 50 € sur devis.</span>
    <br><br>

    <div class="twentytwenty-container" style="width: 70%; margin: auto">
        <img src="/img/1aa.jpg" alt="">
        <img src="/img/1a.jpg" alt="">
    </div>
    <br>
    <div class="twentytwenty-container" style="width: 70%; margin: auto">
        <img src="/img/2.jpg" alt="">
        <img src="/img/2a.jpg" alt="">
    </div>
    <br>
    <div class="twentytwenty-container" style="width: 70%; margin: auto">
        <img src="/img/3.jpg" alt="">
        <img src="/img/3a.jpg" alt="">
    </div>
    <br>
    <div class="twentytwenty-container" style="width: 70%; margin: auto">
        <img src="/img/4.jpg" alt="">
        <img src="/img/4a.jpg" alt="">
    </div>
    <br>
    <hr>
    <h2 style="font-size: 2vw; color: #B81111">Carte grise : </h2>
    <span style="font-size: 1.5vw">Française : 20 €</span>
    <span style="font-size: 1.5vw">Etrangère : 40 €</span>






</div>
<br>

@stop

@section('script')

<script src="assets/jquery.event.move.js" type="text/javascript"></script>
<script src="assets/jquery.twentytwenty.js" type="text/javascript"></script>

<script>
    $(document).ready(function(){
    $('.twentytwenty-container').twentytwenty({
        before_label: 'Avant',
        after_label: 'Après',
    });
})

</script>

@stop