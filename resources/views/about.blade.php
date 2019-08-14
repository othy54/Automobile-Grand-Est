@extends('layouts.desktopLay')

@section('title')

<title> L'entreprise - Automobiles Grand Est</title>
    
@stop

@section('style')

<style>
    .container h1 {
        text-align: center;
        color: #B81111;
    }
</style>

@stop

@section('content')

<div class="container" style="padding-top: 150px;">

    <h1 style="font-size: 2.5vw; font-weight: bold">L'ENTREPRISE</h1>
    <hr>

    <div class="container" style="padding-left: 90px; padding-right: 90px; font-size: 20px; text-align:justify">
        <p>Automobiles Grand Est est une entreprise familiale spécialisée dans l'achat et la vente de vehicules
            d'occasions toutes marques confondues.</p>
        <p>Localisée en Lorraine, Automobiles Grand Est vous livre votre véhicule dans toute la France.</p>
        <p>Notre engagement est de vous fournir un service et un conseil adaptés à vos besoins en fonction de votre
            budget, ainsi qu'un service après vente pour toute autre attente.</p>
        <p>Automobiles Grand Est a commercialisé une multitude de voitures d'occasions et plus de 90% de nos clients se
            sont montrés tout à fait satisfaits de la commande à la livraison d'un véhicule.</p>
        <p>Notre garage vous propose également la réalisation des cartes grises françaises, étrangères, et cartes
            provisoires afin de vous fournir un service complet.</p>
        <p>Automobiles Grand Est est ouvert du lundi au samedi, nous sommes joignables par mail ou par téléphone et
            restons à votres disposition pour toute information.</p>
            <br>

        <img src="/img/age.jpg" alt="" class="img-fluid">
        

    </div>
    <br>

</div>

@endsection