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
                            Modifier véhicule
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                    data-parent="#accordionExample">
                    <div class="card-body">


                        <form action=" {{ url('/home/catalogue/update') }} " method="post" enctype="multipart/form-data"
                            class="form-group d-flex flex-wrap dropzone">
                            @csrf

                            <div class="col-6 mt-4">
                                <label for="sold"> Vendu : </label>
                                <select name="sold" id="sold" class="form-control champs">
                                    <option value="0">Non</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>


                            <div class="col-6 mt-4">
                                <label for="file"> Photos </label>
                                <input type="file" name="image[]" id="file" multiple class="form-control champs">
                            </div>


                            <div class="col-6 mt-4">
                                <label for="brand">Marque</label>
                                <input id="brandVehicle" type="text" name="brand" class="form-control champs"
                                    value="{{ $vehicle[0]->brand }}">
                            </div>


                            <div class="col-6 mt-4">
                                <label for="model">Modèle</label>
                                <input id="modelVehicle" type="text" name="model" class="form-control champs"
                                    value="{{ $vehicle[0]->model }}">
                            </div>

                            <div class="col-6 mt-4">
                                <label for="version">Version</label>
                                <input id="versionVehicle" type="text" name="version" class="form-control champs"
                                    value="{{ $vehicle[0]->version }}">
                            </div>


                            <div class="col-6 mt-4">
                                <label for="door">Nombre de portes</label>
                                <input id="doorVehicle" type="number" name="door" class="form-control champs"
                                    value="{{ $vehicle[0]->door }}">
                            </div>


                            <div class="col-6 mt-4">
                                <label for="power">Puissance (cv)</label>
                                <input id="powerVehicle" type="number" name="power" class="form-control champs"
                                    value="{{ $vehicle[0]->power }}">
                            </div>

                            <div class="col-6 mt-4">
                                <label for="fuel">Carburant</label>

                                <select name="fuel" class="form-control champs" id="fuel">
                                    <option value="Diesel">Diesel</option>
                                    <option value="Essence">Essence</option>
                                    <option value="Electrique">Electrique</option>
                                    <option value="Hybride">Hybride</option>

                                </select>

                            </div>

                            <div class="col-6 mt-4">
                                <label for="distance">Distance parcourue (km) </label>
                                <input type="number" name="distance" class="form-control champs"
                                    value="{{ $vehicle[0]->distance }}">
                            </div>

                            <div class="col-6 mt-4">
                                <label for="price">Prix</label>
                                <input type="number" name="price" class="form-control champs"
                                    value="{{ $vehicle[0]->price }}">
                            </div>

                            <div class="col-6 mt-4">
                                <label for="date">Date de mise en circulation</label>
                                <input id="dateVehicle" type="date" name="date" class="form-control champs"
                                    value="{{ $vehicle[0]->date }}">
                            </div>

                            <div class="col-6 mt-4">
                                <label for="boite">Boite de vitesse</label>
                                <select name="boite" class="form-control champs" id="boite">
                                    <option value="Manuelle">Manuelle</option>
                                    <option value="Automatique">Automatique</option>
                                    <option value="Semi-Automatique">Semi-Automatique</option>
                                    <option value="Sequentielle">Sequentielle</option>

                                </select>
                            </div>

                            <div class="col-6 mt-4">
                                <label for="place">Nombre de place</label>
                                <input id="placeVehicle" type="number" name="place" class="form-control champs"
                                    value="{{ $vehicle[0]->place }}">
                            </div>

                            <div class="col-12 mt-4 checkboxis" id="myOptions">
                                <p>Options</p>

                            </div>
                            <div class="col-6  mt-4">

                                <p>Plus d'options</p>
                                <input type="text" id="moreOption" class="form-control"> <span
                                    class="btn btn-success mt-1" id="addOption"> Ajouter </span>

                            </div>

                            <div class="col-12 mt-4">
                                <div id="hereOption">
                                </div>
                            </div>


                            <div class="col-12 mt-4" hidden>
                                <label for="">Options</label>
                                <textarea style="white-space: pre-line; position:relative; z-index: 55" id="myTextArea"
                                    name="option" rows="10"
                                    class="form-control">{{ $vehicle[0]->option."\n" }}</textarea>
                            </div>

                            <div class="col-12 mt-4">
                                <label for="description">Description</label>
                                <textarea style="white-space: pre-line; position:relative; z-index: 55"
                                    name="description" rows="10"
                                    class="form-control">{{ $vehicle[0]->description."\n" }}</textarea>
                            </div>



                            <input type="text" name="id" value="{{ $vehicle[0]->id }}" hidden>



                            <div class="col-12 mt-4 text-right">
                                <button class="btn btn-primary">Modifier</button>
                            </div>


                        </form>
                        <div class="col-12 mt-4 text-right">
                            <a href="{{ url('/home/catalogue/delete/'.$vehicle[0]->id) }}"
                                onclick="return confirm('Supprimer définitivement ce produit ?')"><button
                                    class="btn btn-danger"> Supprimer</button> </a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('script')


<script>
    $(document).ready(function() {
        var tab = ["Commandes au volant","Antidémarrage","ABS","Bluetooth","Régulateur/Limiteur de vitesse","ESP","Ordinateur de bord","Radar de recul","Essuie glace automatique","Direction assistée","AUX","USB","Isofix","GPS","Climatiseur","Clim bi-zone","Chargeur 6 CD","Banquette 2/3 1/3","Démarrage sans clé","Démarrage en côte","4x4","4x2","Système DVD","Siège chauffant","Siège refroidissement","Siège électrique","Siège massant","Vitres avant automatiques","Vitres arrière automatiques","MP3","Affichage tête haute","GPS indicatif","Aide au stationnement avant","Aide au stationnement arrière","Park assiste","Anti-franchissement de ligne","Anti-collision","Vision nocturne","Caméra de recul","Caméra 360","Téléphone","Chargeur induction","Boite à gants réfrigéré","Centralisation automatique","Plein phare automatique","Xénon","Anti-brouillard avant","Attelage"].sort();        for(var i = 0; i < tab.length; i++) {
            $('#myOptions').append('<div class="pretty p-default col-3"><input type="checkbox" class="myChecked" value="'+tab[i]+'" /><div class="state p-danger"><label>'+tab[i]+'</label></div></div>')
        }

        var desc = $('#myTextArea').text().split('\n');
    
      

        for(var j = 0; j < desc.length; j++) {
            if(!tab.includes(desc[j])) {
                $('#myOptions').append('<div class="pretty p-default col-3"><input type="checkbox" class="myChecked" value="'+desc[j]+'" /><div class="state p-danger"><label>'+desc[j]+'</label></div></div>')

            }
        }

        var checkkkk = $('.myChecked');        
        

        for(var i = 0; i < $('.myChecked').length; i++) {
            if(desc.includes(checkkkk[i].value)) {
                checkkkk[i].checked = true;
            }
            
        }


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

        $('#btnToUpdate').on('click', function() {
             var vehicleId = $(this).val();
            
        })

        $('#fuel').val('{{ $vehicle[0]->fuel }}');
        $('#boite').val('{{ $vehicle[0]->boite }}');

        console.log(' {{ $vehicle[0]->fuel }} ')

       
})




</script>

@stop