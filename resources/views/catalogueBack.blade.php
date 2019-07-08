@extends('layouts.app')


@section('style')


<style>
    .checkboxis>label {
        margin-right: 10px;

    }

    .pretty {
        margin-top: 15px;
    }

    a {
        text-decoration: none !important;

    }
</style>

@stop

@section('content')


<div class="container">

    <div id="addVehicule">

        <div class="accordion" id="accordionExample" style="border:1px solid darkgrey !important;">

            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            Ajouter un véhicule au catalogue
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">

                        <label for="immatriculation">Plaque d'immatriculation : </label>
                        <input id="siv" type="text" name="immatriculation" class="" style="width: 15%;">

                        <button class="btn btn-primary mr-4" id="searchVehicle"> Chercher </button>

                        <div id="loadingSpinner" class="spinner-border" style="display:none" role="status">
                            <span class="sr-only">Loading...</span>
                        </div> <br>
                        <span style="color:red; display:none" id="errorSIV">Plaque d'immatriculation invalide ou n'est
                            plus en circulation</span>

                        <br><br>

                        <form action=" {{ url('/home/catalogue') }} " method="post" enctype="multipart/form-data"
                            class="form-group d-flex flex-wrap dropzone">
                            @csrf

                            <div class="col-6 mt-4">
                                <label for="image"> Photos </label>
                                <input type="file" name="image[]" id="file" multiple class="form-control champs"
                                    required>
                            </div>

                            <div class="col-6 mt-4">
                                <label for="brand">Marque</label>
                                <input id="brandVehicle" type="text" name="brand" class="form-control champs" required>
                            </div>

                            <div class="col-6 mt-4">
                                <label for="model">Modèle</label>
                                <input id="modelVehicle" type="text" name="model" class="form-control champs" required>
                            </div>

                            <div class="col-6 mt-4">
                                <label for="version">Version</label>
                                <input id="versionVehicle" type="text" name="version" class="form-control champs"
                                    required>
                            </div>

                            <div class="col-6 mt-4">
                                <label for="door">Nombre de portes</label>
                                <input id="doorVehicle" type="number" name="door" class="form-control champs" required>
                            </div>

                            <div class="col-6 mt-4">
                                <label for="power">Puissance (cv)</label>
                                <input id="powerVehicle" type="number" name="power" class="form-control champs"
                                    required>
                            </div>

                            <div class="col-6 mt-4">
                                <label for="fuel">Carburant</label>

                                <select name="fuel" class="form-control champs" required>

                                    <option value="1">Essence</option>
                                    <option value="2">Diesel</option>
                                    <option value="3">Electrique</option>
                                    <option value="4">Hybride</option>

                                </select>

                            </div>

                            <div class="col-6 mt-4">
                                <label for="distance">Distance parcourue (km) </label>
                                <input type="number" name="distance" class="form-control champs" required>
                            </div>

                            <div class="col-6 mt-4">
                                <label for="price">Prix</label>
                                <input type="number" name="price" class="form-control champs" required>
                            </div>

                            <div class="col-6 mt-4">
                                <label for="date">Date de mise en circulation</label>
                                <input id="dateVehicle" type="date" name="date" class="form-control champs" required>
                            </div>

                            <div class="col-6 mt-4">
                                <label for="boite">Boite de vitesse</label>
                                <select name="boite" class="form-control champs" required>
                                    <option value="1">Automatique</option>
                                    <option value="2">Semi-Automatique</option>
                                    <option value="3">Sequentielle</option>
                                    <option value="4">Manuelle</option>
                                </select>
                            </div>

                            <div class="col-6 mt-4">
                                <label for="place">Nombre de place</label>
                                <input id="placeVehicle" type="number" name="place" class="form-control champs"
                                    required>
                            </div>

                            <div class="col-12 mt-4 checkboxis" id="myOptions">
                                <p>Options</p>

                            </div>
                            <div class="col-6  mt-4">

                                <p>Plus d'options</p>
                                <input type="text" id="moreOption" class="form-control"> <span
                                    class="btn btn-success mt-1" id="addOption"> Ajouter </span>

                            </div>


                            <div class="col-12 mt-4" hidden>
                                <label for="description">option</label>
                                <textarea style="white-space: pre-line; position:relative; z-index: 55" id="myTextArea"
                                    name="option" rows="10" class="form-control"></textarea>
                            </div>

                            <div class="col-12 mt-4">
                                <div id="hereOption">
                                </div>
                            </div>


                            <div class="col-12 mt-4">
                                <label for="description">Description</label>
                                <textarea style="white-space: pre-line; position:relative; z-index: 55" id="myTextArea"
                                    name="description" rows="10" class="form-control" required></textarea>
                            </div>




                            <div class="col-12 mt-4 text-right">
                                <button class="btn btn-primary">Ajouter</button>

                            </div>
                        </form>


                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="true" aria-controls="collapseTwo">
                            Liste des véhicules
                        </button>
                    </h2>
                </div>

                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                    data-parent="#accordionExample">
                    @foreach($vehicles as $index => $vehicle)
                    @if($vehicle->sold == 0)
                    <div class="card-body">
                        <div class="row">

                            <div class="col-2">
                                <img src="/uploads/{{ $images[$index]->imageName }}" alt="" class="image-fluid"
                                    style="width: 100%;">
                            </div>
                            <div class="col-8">
                                <h2><a href="{{ url('/catalogue/'.$vehicle->id) }}">{{ $vehicle->brand }}
                                        {{ $vehicle->model }} {{ $vehicle->version }}</a></h2>
                                <span> {{ $vehicle->power }} cv</span><br>
                                <span> {{ $vehicle->price }} €</span><br>
                                <span> {{ $vehicle->distance }} km</span><br>
                            </div>
                            <div class="col-2">
                                <a href="{{ url('/home/catalogue/update/'.$vehicle->id) }}"><button
                                        class="btn btn-light" value="{{ $vehicle->id }}" id="btnToUpdate"> Modifier
                                    </button></a>

                            </div>

                        </div>

                    </div>
                    <hr>
                    @endif
                    @endforeach

                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseThree"
                            aria-expanded="true" aria-controls="collapseThree">
                            Véhicules vendus
                        </button>
                    </h2>
                </div>

                <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                    @foreach($vehicles as $index => $vehicle)
                    @if($vehicle->sold == 1)
                    <div class="card-body" @if(!empty($vehicle->deleted_at)) style="background-color: lightpink" @endif>
                        <div class="row">

                            <div class="col-2">
                                <img src="/uploads/{{ $images[$index]->imageName }}" alt="" class="image-fluid"
                                    style="width: 100%;">
                            </div>
                            <div class="col-8">
                                <h2><a href="{{ url('/catalogue/'.$vehicle->id) }}">{{ $vehicle->brand }}
                                        {{ $vehicle->model }} {{ $vehicle->version }}</a></h2>
                                <span> {{ $vehicle->power }} cv</span><br>
                                <span> {{ $vehicle->price }} €</span><br>
                                <span> {{ $vehicle->distance }} km</span><br>
                            </div>
                            <div class="col-2">
                                <a href="{{ url('/home/catalogue/update/'.$vehicle->id) }}"><button
                                        class="btn btn-light" value="{{ $vehicle->id }}" id="btnToUpdate"> Modifier
                                    </button></a>

                            </div>
                        </div>

                    </div>
                    <hr>
                    @endif
                    @endforeach

                </div>
            </div>
        </div>



    </div>




</div>

@stop

@section('script')


<script>
    $(document).ready(function() {

        var tab = ["Commandes au volant","Antidémarrage","ABS","Bluetooth","Régulateur/Limiteur de vitesse","ESP","Ordinateur de bord","Radar de recul","Essuie glace automatique","Direction assistée","AUX","USB","Isofix","GPS","Climatiseur","Clim bi-zone","Chargeur 6 CD","Banquette 2/3 1/3","Démarrage sans clé","Démarrage en côte","4x4","4x2","Système DVD","Siège chauffant","Siège refroidissement","Siège électrique","Siège massant","Vitres avant automatiques","Vitres arrière automatiques","MP3","Affichage tête haute","GPS indicatif","Aide au stationnement avant","Aide au stationnement arrière","Park assiste","Anti-franchissement de ligne","Anti-collision","Vision nocturne","Caméra de recul","Caméra 360","Téléphone","Chargeur induction","Boite à gants réfrigéré","Centralisation automatique","Plein phare automatique","Xénon","Anti-brouillard avant","Attelage"].sort();
        for(var i = 0; i < tab.length; i++) {
            $('#myOptions').append('<div class="pretty p-default col-3"><input type="checkbox" class="myChecked" value="'+tab[i]+'" /><div class="state p-danger"><label>'+tab[i]+'</label></div></div>')
        }

        $('#searchVehicle ').on('click', function () {
            $('#loadingSpinner').show();
            $('#errorSIV').hide()


            var siv = $('#siv').val();

            $.ajax({
                headers: {'X-CSRF-Token': '{{ csrf_token() }}'},
                method : 'POST',
                url: '/home/catalogue/api',
                data: {
                    siv : siv 
                },
                
                success: function(data){
                    $('#loadingSpinner').hide();
                    var jsonObj = JSON.parse($($.parseXML(data)).find("vehicleJson").text());
                    $('#brandVehicle').val(jsonObj.CarMake.CurrentTextValue);
                    $('#modelVehicle').val(jsonObj.CarModel.CurrentTextValue);
                    $('#versionVehicle').val(jsonObj.ExtendedData.libVersion);
                    $('#powerVehicle').val(jsonObj.ExtendedData.puissanceDyn);
                    var dateVehicle = jsonObj.ExtendedData.datePremiereMiseCirculation;
                    var year = dateVehicle.slice(4), month = dateVehicle.slice(2, 4), day = dateVehicle.slice(0, 2);
                    $('#dateVehicle').val(year+'-'+month+'-'+day);
                    $('#placeVehicle').val(jsonObj.ExtendedData.nbPlace);

                },
                error: function(data) {
                    $('#loadingSpinner').hide();
                    $('#errorSIV').show()
                    console.log(data)
                }
            });

        });

        $('.myChecked').on('change', function() {
            var optionText = $(this).val();
            if(this.checked) {
               $('#myTextArea').append(optionText+'\n') 
            } else {
                $('#myTextArea').html($('#myTextArea').html().split(optionText+'\n').join(''))
            }

        })

        $('#addOption').on('click', function() {
            moreOption = $('#moreOption').val()+'\n';
            $('#myTextArea').append(moreOption);
            $('#moreOption').val('')
            $('#hereOption').append('<h1 class="badge badge-light" style="font-size: 20px">'+moreOption+'<span style="cursor:pointer" class="deleteMyOption badge badge-danger">X</span></h1>')
        })

        $(document).on('click', '.deleteMyOption', function() {
           
            $('#myTextArea').html($('#myTextArea').html().split(moreOption).join(''))
            $(this).parent().remove()

        })

    

        

})




</script>

@stop