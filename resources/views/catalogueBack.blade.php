@extends('layouts.app')

@section('style')

<style>
    .checkboxis>label {
        margin-right: 10px;

    }
    .pretty{
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

                        <button class="btn btn-primary" id="searchVehicle"> Chercher </button>

                        <br><br>

                        <form action=" {{ url('/home/catalogue') }} " method="post" enctype="multipart/form-data"
                            class="form-group d-flex flex-wrap">
                            @csrf

                            <div class="col-6 mt-4">
                                <label for="image[]"> Photos </label>
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
                                <p for="name">Options</p>


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


                            </div>

                            <div class="col-12 mt-4">
                                <label for="boite">Description</label>
                                <textarea id="myTextArea" name="description" id="" rows="10" class="form-control">Options :
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

    
        $('#searchVehicle ').on('click', function () {
            var siv = $('#siv').val();

            $.ajax({
                headers: {'X-CSRF-Token': '{{ csrf_token() }}'},
                method : 'POST',
                url: '/home/catalogue/api',
                data: {
                    siv : siv 
                },
                
                success: function(data){
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

})


</script>

@stop