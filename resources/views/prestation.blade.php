@extends('layouts.desktopLay')

@section('style')
<link rel="stylesheet" href="assets/twentytwenty.css" type="text/css" media="screen" />


<style>

.container h1 {
    text-align:center;
    color: #B81111;
}

</style>

@stop

@section('content')

<div class="container" style="padding-top: 150px;">

    <h1 style="font-size: 2.5vw; font-weight: bold">PRESTATIONS</h1>
    <hr>

    <div class="twentytwenty-container">
        <img src="/img/1aa.jpg" alt="">
        <img src="/img/1a.jpg" alt="">

    </div>

</div>
<br>

@stop

@section('script')

<script src="assets/jquery.event.move.js" type="text/javascript"></script>
<script src="assets/jquery.twentytwenty.js" type="text/javascript"></script>

<script>

$(function(){
    $('.twentytwenty-container').twentytwenty({
        before_label: 'Avant',
        after_label: 'Après',
    });
})

</script>

@stop