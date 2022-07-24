@extends('layouts.basepage')
@section('title', 'Dettagli')
@section('content')

<div class="showcase-top">
    <img src="{{ $comic['thumb'] }}" alt="comic">
</div>
<div class="container_white">
    <div class="row">
        <div>
            <h2>{{$comic['title']}}</h2>
            <div class="info">
                <div>
                    <p>Us.Price: 
                        <span>{{$comic['price']}}</span>
                    </p>
                    <p>AVAILABLE</p>
                </div>
                <p>Check Availability <i class="fa-solid fa-sort-down"></i></p>
            </div>
            <p>{{$comic['description']}}</p>
        </div>
        <img src="{{ asset('images/dc-logo.png') }}" alt="adv">
    </div>
</div>
<div class="container_grey">
    <div class="row"></div>
</div>

@endsection