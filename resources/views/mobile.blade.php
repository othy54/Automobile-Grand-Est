@extends('layouts.mobileLay')
@section('css')

<style>
  body {
    background-image: url('img/mercedes2.jpg');
    background-attachment: fixed;
    background-size: contain;
    background-repeat: no-repeat;
  }

  #firstDiv {
    color: white;
    font-size: 5vh;
    text-align: right;
    padding-top: 3.2em;
    height: 80vh;
    text-transform: uppercase;
    line-height: 1.4em;
    padding-right: 0.4em;

  }

  #container {
    background-color: white;
    position: relative;
  }

  #mainCard {
    background-color: white;
    width: 60%;
    margin-left: auto;
    margin-right: auto;
    left: 0;
    right: 0;
    text-align: center;
    height: 16em;
    border-radius: 5px;
    position: relative;
    top: -60px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding-top: 25px;

    -webkit-box-shadow: 0px 0px 11px 0px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: 0px 0px 11px 0px rgba(0, 0, 0, 0.75);
    box-shadow: 0px 0px 11px 0px rgba(0, 0, 0, 0.75);
  }

  hr {
    width: 80%;
    background-color: #B81111;
    margin-bottom: 60px;
  }

  #searchCard {
    width: 80%;
    text-align: center;
    margin: auto;
    background-color: #F2F1F1;
    border-radius: 8px;
    padding: 10px !important;

    -webkit-box-shadow: 0px 0px 11px 0px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: 0px 0px 11px 0px rgba(0, 0, 0, 0.75);
    box-shadow: 0px 0px 11px 0px rgba(0, 0, 0, 0.75);
    margin-bottom: 60px;

  }

  label {
    margin-top: 20px;
    font-size: 25px;
    color: #B81111;
  }


  select {
    width: 75% !important;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 20px;

  }

  #container h3 {
    text-align: center;
    color: #B81111;
  }

  #lastAdd {
    width: 40%;
    height: 350px;
    border : 1px solid black;
    margin: auto;
  }

  

  
</style>


@stop

@section('content')

{{-- <div id="firstDiv" class="animated fadeInLeft">

  <span>Votre garage <br> près de <br> chez vous</span>

</div> --}}
<div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/img/mercedes2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h1 class="animated fadeInLeft" style="text-align:right; ">Votre garage près de chez vous</h1>
            
          </div>
        </div>
        <div class="carousel-item">
          <img src="/img/mercedes2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="/img/mercedes2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

<div id="container">

  <div id="mainCard" class="animated slideInUp">

    <p style="font-size: 3.5vh; color : #B81111">AUTOMOBILE GRAND EST<p>

        <p style="font-size: 2.7vh">Lunéville<p>

  </div>

  <hr>

  <div id="searchCard">

    <form>
      <label for="brand">Marque</label>
      <select name="brand" id="" class="selectSearch form-control"></select>
      
      <label for="model">Modèle</label>
      <select name="model" id="" class="selectSearch form-control"></select>
      
      <label for="price">Prix</label>
      <select name="price" id="" class="selectSearch form-control"></select>

      <button> Rechercher </button>
    </form>


  </div>

  <hr>

  <h3>
    Derniers ajouts
  </h3>

  <br>

  <div id="lastAdd"> </div>

  <br>


</div>



@endsection




@section('script')

@endsection