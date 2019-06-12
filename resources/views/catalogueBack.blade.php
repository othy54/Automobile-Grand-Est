@extends('layouts.app')


@section('style')


<style>
    .checkboxis>label {
        margin-right: 10px;

    }

    .pretty {
        margin-top: 15px;
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

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                    data-parent="#accordionExample">
                    <div class="card-body">

                        <label for="immatriculation">Plaque d'immatriculation : </label>
                        <input id="siv" type="text" name="immatriculation" class="" style="width: 15%;">

                        <button class="btn btn-primary mr-4" id="searchVehicle"> Chercher </button>

                        <div id="loadingSpinner" class="spinner-border" style="display:none" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>

                        <br><br>

                        <form action=" {{ url('/home/catalogue') }} " method="post" enctype="multipart/form-data"
                            class="form-group d-flex flex-wrap dropzone">
                            @csrf



                            <div class="col-6 mt-4">
                                <label for="file"> Photos </label>
                                <input type="file" name="image[]" id="file" multiple class="form-control champs">
                            </div>




                            <div class="col-6 mt-4">
                                <label for="brand">Marque</label>
                                <input id="brandVehicle" type="text" name="brand" class="form-control champs">
                            </div>


                            <div class="col-6 mt-4">
                                <label for="model">Modèle</label>
                                <input id="modelVehicle" type="text" name="model" class="form-control champs">
                            </div>

                            <div class="col-6 mt-4">
                                <label for="version">Version</label>
                                <input id="versionVehicle" type="text" name="version" class="form-control champs">
                            </div>


                            <div class="col-6 mt-4">
                                <label for="door">Nombre de portes</label>
                                <input id="doorVehicle" type="number" name="door" class="form-control champs">
                            </div>


                            <div class="col-6 mt-4">
                                <label for="power">Puissance (cv)</label>
                                <input id="powerVehicle" type="number" name="power" class="form-control champs">
                            </div>

                            <div class="col-6 mt-4">
                                <label for="fuel">Carburant</label>

                                <select name="fuel" class="form-control champs">

                                    <option value="1">Essence</option>
                                    <option value="2">Diesel</option>
                                    <option value="3">Electrique</option>
                                    <option value="4">Hybride</option>

                                </select>

                            </div>

                            <div class="col-6 mt-4">
                                <label for="distance">Distance parcourue (km) </label>
                                <input type="number" name="distance" class="form-control champs">
                            </div>

                            <div class="col-6 mt-4">
                                <label for="price">Prix</label>
                                <input type="number" name="price" class="form-control champs">
                            </div>

                            <div class="col-6 mt-4">
                                <label for="date">Date de mise en circulation</label>
                                <input id="dateVehicle" type="date" name="date" class="form-control champs">
                            </div>

                            <div class="col-6 mt-4">
                                <label for="boite">Boite de vitesse</label>
                                <select name="boite" class="form-control champs">
                                    <option value="1">Automatique</option>
                                    <option value="2">Semi-Automatique</option>
                                    <option value="3">Sequentielle</option>
                                    <option value="4">Manuelle</option>
                                </select>
                            </div>

                            <div class="col-6 mt-4">
                                <label for="place">Nombre de place</label>
                                <input id="placeVehicle" type="number" name="place" class="form-control champs">
                            </div>

                            <div class="col-12 mt-4 checkboxis">
                                <p>Options</p>


                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="ABS" />
                                    <div class="state p-danger">
                                        <label>ABS</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Bluetooth" />
                                    <div class="state p-danger">
                                        <label>Bluetooth</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Régulateur/Limiteur de vitesse" />
                                    <div class="state p-danger">
                                        <label>Régulateur/Limiteur de vitesse</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="ESP" />
                                    <div class="state p-danger">
                                        <label>ESP</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Ordinateur de bord" />
                                    <div class="state p-danger">
                                        <label>Ordinateur de bord</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Radar de recul" />
                                    <div class="state p-danger">
                                        <label>Radar de recul</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Essuie glace automatique" />
                                    <div class="state p-danger">
                                        <label>Essuie glace automatique</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Direction assistée" />
                                    <div class="state p-danger">
                                        <label>Direction assistée</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="AUX" />
                                    <div class="state p-danger">
                                        <label>AUX</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="USB" />
                                    <div class="state p-danger">
                                        <label>USB</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Isofix" />
                                    <div class="state p-danger">
                                        <label>Isofix</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="GPS" />
                                    <div class="state p-danger">
                                        <label>GPS</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Climatiseur" />
                                    <div class="state p-danger">
                                        <label>Climatiseur</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Clim bi-zone" />
                                    <div class="state p-danger">
                                        <label>Clim bi-zone</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Chargeur 6 CD" />
                                    <div class="state p-danger">
                                        <label>Chargeur 6 CD</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Banquette 2/3 1/3" />
                                    <div class="state p-danger">
                                        <label>Banquette 2/3 1/3</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Démarrage sans clé" />
                                    <div class="state p-danger">
                                        <label>Démarrage sans clé</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Démarrage en côte" />
                                    <div class="state p-danger">
                                        <label>Démaragge en côté</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="4x4" />
                                    <div class="state p-danger">
                                        <label>4x4</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="4x2" />
                                    <div class="state p-danger">
                                        <label>4x2</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Système DVD" />
                                    <div class="state p-danger">
                                        <label>Système DVD</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Siège chauffant" />
                                    <div class="state p-danger">
                                        <label>Siège chauffant</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Siège refroidissant" />
                                    <div class="state p-danger">
                                        <label>Sièege refroidissement</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Siège electrique" />
                                    <div class="state p-danger">
                                        <label>Siège electrique</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Siège massant" />
                                    <div class="state p-danger">
                                        <label>Siège massant</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Vitre avant" />
                                    <div class="state p-danger">
                                        <label>Vitre avant</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Vitre arrière" />
                                    <div class="state p-danger">
                                        <label>Vitre arrière</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="MP3" />
                                    <div class="state p-danger">
                                        <label>MP3</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Affichage tête haute" />
                                    <div class="state p-danger">
                                        <label>Affichage tête haute</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="GPS indicatif" />
                                    <div class="state p-danger">
                                        <label>GPS indicatif</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Aide au stationnement avant" />
                                    <div class="state p-danger">
                                        <label>Aide au stationnement avant</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Aide au stationnement arrière" />
                                    <div class="state p-danger">
                                        <label>Aide au stationnement arrière</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Park assist" />
                                    <div class="state p-danger">
                                        <label>Park assist</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Anti-franchissement de ligne" />
                                    <div class="state p-danger">
                                        <label>Anti-franchissement de ligne</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Anti-collision" />
                                    <div class="state p-danger">
                                        <label>Anti-collision</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Vision nocturne" />
                                    <div class="state p-danger">
                                        <label>Vision nocturne</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Caméra de recul" />
                                    <div class="state p-danger">
                                        <label>Caméra de recul</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Caméra 360" />
                                    <div class="state p-danger">
                                        <label>Caméra 360</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Téléphone" />
                                    <div class="state p-danger">
                                        <label>Téléphone</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Chargeur induction" />
                                    <div class="state p-danger">
                                        <label>Chargeur induction</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Boite à gants réfrigéré" />
                                    <div class="state p-danger">
                                        <label>Boite à gants réfrigéré</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Centralisation automatique" />
                                    <div class="state p-danger">
                                        <label>Centralisation automatique</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Feu automatique" />
                                    <div class="state p-danger">
                                        <label>Automatique</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Essuie glace automatique" />
                                    <div class="state p-danger">
                                        <label>Essuie glace automatique</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Plein phare automatique" />
                                    <div class="state p-danger">
                                        <label>Plein phare automatique</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Xénon" />
                                    <div class="state p-danger">
                                        <label>Xénon</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Anti-brouillard avant" />
                                    <div class="state p-danger">
                                        <label>Anti-brouillard avant</label>
                                    </div>
                                </div>
                                <div class="pretty p-default">
                                    <input type="checkbox" class="myChecked" value="Attelage" />
                                    <div class="state p-danger">
                                        <label>Attelage</label>
                                    </div>
                                </div>
                                




                            </div>
                            <div class="col-6  mt-4">

                                <p>Plus d'options</p>
                                <input type="text" id="moreOption" class="form-control"> <span
                                    class="btn btn-success mt-1" id="addOption"> Ajouter </span> <span
                                    class="btn btn-danger mt-1" style="float: right" id="btnReset"> Reset </span>

                            </div>

                            <div class="col-12 mt-4">
                                <label for="boite">Description</label>
                                <textarea style="white-space: pre-line; position:relative; z-index: 55" id="myTextArea"
                                    name="description" id="" rows="10" class="form-control" disabled>Options :
</textarea>
                            </div>



                            <div class="col-12 mt-4 text-right">
                                <button class="btn btn-primary">Ajouter</button>

                            </div>
                        </form>
                        {{-- <img src="images/{{ Session::get('image') }}"> --}}



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
                    <div class="card-body">
                        <div class="row">

                            <div class="col-2">
                                <img src="/uploads/{{ $images[$index]->imageName }} " alt="" class="image-fluid"
                                    style="width: 100%;">
                            </div>
                            <div class="col-10">
                                <h2>{{ $vehicle->brand }} {{ $vehicle->model }} {{ $vehicle->version }}</h2>
                                <span> {{ $vehicle->power }} cv</span><br>
                                <span> {{ $vehicle->price }} €</span><br>
                                <span> {{ $vehicle->distance }} km</span><br>
                            </div>

                        </div>

                    </div>
                    <hr>
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
        $('#myTextArea').html('Options :\n');
    
        $('#searchVehicle ').on('click', function () {
            $('#loadingSpinner').show();

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
                    console.log(jsonObj);
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
                    console.log(data)
                }
            });

        });

        $('.myChecked').on('change', function() {
            var optionText = $(this).val();
            if(this.checked) {
               $('#myTextArea').append('- '+optionText+'\n') 
            } else {
                $('#myTextArea').html($('#myTextArea').html().split('- '+optionText+'\n').join(''))
            }

        })

        $('#addOption').on('click', function() {
            $('#myTextArea').append('- '+$('#moreOption').val()+'\n');
            $('#moreOption').val('')
        })

        $('#btnReset').on('click', function() {
            $('#myTextArea').html('Options :\n');
        })

})


</script>

@stop