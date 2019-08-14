@extends('layouts.mobileLay')

@section('title')

<title> Recherche personnalisée - Automobiles Grand Est </title>
    
@stop

@section('css')

<style>
    .container h1 {
        text-align: center;
        color: #B81111;
    }
</style>

@stop

@section('content')

<div class="container" style="padding-top: 150px;">

    <h1 style="font-size: 8vw; font-weight: bold">RECHERCHE PERSONNALISÉE</h1>
    <hr>
    @if(session()->has('message2'))
    <div class="alert alert-success" style="width: 50%">
        {{ session()->get('message2') }}
    </div>
    @endif
    <div>
        <h5 style="text-align: center">Renseignez les détails et nous ferons de notre mieux pour trouver le véhicule
            souhaité.</h5>
        <br>
        <form action="{{ url('/custom') }}" class="col-12" method="post">
            {{ csrf_field() }}
            <div class="col-10 mt-4">
                <label for="brand">Marque</label>
                <input type="text" name="brand" class="form-control" required>
            </div>

            <div class="col-10 mt-4">
                <label for="model">Modèle</label>
                <input type="text" name="model" class="form-control">
            </div>

            <div class="col-10 mt-4">
                <label for="color">Couleur</label>
                <input type="text" name="color" class="form-control">
            </div>

            <div class="col-10 mt-4">
                <label for="distance">Kilométrage maximal</label>
                <input type="number" name="distance" class="form-control">
            </div>

            <div class="col-10 mt-4">
                <label for="price">Prix maximal</label>
                <input type="number" name="price" class="form-control">
            </div>
            <div class="col-10 mt-4">
                <label for="option">Option / détails</label>
                <textarea name="option" class="form-control" style="height: 150px"></textarea>
            </div>
            <hr>

            <div class="col-10 mt-4">
                <label for="name">Nom</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="col-10 mt-4">
                <label for="mail">Mail</label>
                <input type="email" name="mail" class="form-control" required>
            </div>
            <div class="col-10 mt-4">
                <label for="phone">Numéro de téléphone</label>
                <input type="number" name="phone" class="form-control" required>
            </div>
            <div class="col-10 mt-4">
                <button class="btn btn-success" type="submit">Envoyer</button>
            </div>


        </form>


    </div>

</div>
<br>

@endsection