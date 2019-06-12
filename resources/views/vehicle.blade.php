@extends('layouts.desktopLay')

@section('style')

@stop


@section('content')

<div class="container" style="padding-top: 150px;">
    <div class="slider slider-for">
            @foreach($images as $image)
            <div><img src="/uploads/{{ $image->imageName }} " alt="" style="margin:auto;"></div>
            @endforeach
    </div>
    <div class="slider slider-nav">
            @foreach($images as $image)
            <div><img src="/uploads/{{ $image->imageName }} " alt="" class="img-fluid"></div>
            @endforeach

    </div>


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

    })


</script>

@endsection