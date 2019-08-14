@extends('layouts.desktopLay')

@section('title')

<title> Reprise - Automobiles Grand Est </title>
    
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

<div class="container mb-5" style="padding-top: 150px;">

    <h1 style="font-size: 2.5vw; font-weight: bold">REPRISE</h1>
    <hr>
    <h4 style="text-align: center">Renseignez les détails et nous ferons de notre mieux pour examiner votre proposition.</h4>
    <br>
    @if(session()->has('message2'))
    <div class="alert alert-success" style="width: 50%">
        {{ session()->get('message2') }}
    </div>
    @endif
    <form method="POST" action=" {{ url('/reprise') }} " enctype="multipart/form-data" onsubmit="return validate()">
        {{ csrf_field() }}
        <div class="col-4 mt-4">
            <label for="brand">Marque</label>
            <input type="text" name="brand" class="form-control" required>
        </div>

        <div class="col-4 mt-4">
            <label for="model">Modèle</label>
            <input type="text" name="model" class="form-control">
        </div>

        <div class="col-4 mt-4">
            <label for="color">Couleur</label>
            <input type="text" name="color" class="form-control">
        </div>

        <div class="col-4 mt-4">
            <label for="distance">Kilométrage</label>
            <input type="number" name="distance" class="form-control">
        </div>
        <div class="col-6 mt-4">
            <label for="option">Option / détails</label>
            <textarea name="option" class="form-control" style="height: 150px"></textarea>
        </div>
        <div class="col-6 mt-4">
            <label for="image">Photo de la carte grise</label>
            <input type="file" name="image" class="form-control" id="file"><span id="erreur" style="color: red"></span>
        </div>

        <hr>

        <div class="col-4 mt-4">
            <label for="name">Nom</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="col-4 mt-4">
            <label for="mail">Mail</label>
            <input type="email" name="mail" class="form-control" required>
        </div>
        <div class="col-4 mt-4">
            <label for="phone">Numéro de téléphone</label>
            <input type="number" name="phone" class="form-control" required>
        </div>
        <div class="col-4 mt-4">
            <button class="btn btn-success" type="submit">Envoyer</button>
        </div>
    </form>

</div>

@stop

@section('script')

<script>

    function validate() {
        $('#erreur').html('');
        $('#file').css('border-color', '');
        var fileSize = $('#file')[0].files[0].size;
        if(fileSize > 4096000) {
            $('#erreur').html('Votre fichier ne doit pas dépasser 4Mo');
            $('#file').css('border-color', '#FF0000');
            return false
        }
        return true;
    }

</script>

@stop