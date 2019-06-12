@extends('layouts.desktopLay')

@section('style')

<style>
    .slick-list {
        margin-top: 5px;

    }

    .slick-arrow {
        margin: 20px;
        border-radius: 700px;
        border: 1px solid #B81111;
        background-color: #B81111;
        height: 100%;

    }

    .slick-arrow:hover {
        background-color: #760B0B;
    }

    .slick-track img {
        border: 2px solid white;
    }

    .slider-for {
        transition: 0.3s;

    }

    .slider-for:hover {
        transform: scale(1.7);
        transition: 0.3s;
        z-index: 555;
    }

    #titleVehicle h1 {
        text-align: center;
        color: #B81111
    }
</style>

@stop


@section('content')

<div class="container" style="padding-top: 150px;">

    <div id="titleVehicle" class="mt-5">

        <h1> {{ $vehicle[0]->brand }} {{ $vehicle[0]->model }} </h1>
        <hr>


    </div>

    <div style="width:60%; margin: auto">
        <div class="slider slider-for">
            @foreach($images as $image)
            <div><img src="/uploads/{{ $image->imageName }} " alt="" style="margin:auto;" class="img-fluid"></div>
            @endforeach
        </div>
        <div class="slider slider-nav d-flex">
            @foreach($images as $image)
            <div><img src="/uploads/{{ $image->imageName }} " alt="" class="img-fluid"></div>
            @endforeach

        </div>
    </div>
    <hr>

    <div>

        <span> Marque :  </span> <span> {{ $vehicle[0]->brand }} </span>

    </div>




</div>

<div style="height: 30vh">


</div>

@stop


@section('script')

<script>
    $(document).ready(function() {

        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            centerMode: true,
            focusOnSelect: true
        });

        $('.slick-next').text('🡆');
        $('.slick-prev').text('🡄');
        $('.slick-arrow').addClass('btn btn-danger');

    })

    


</script>

@endsection