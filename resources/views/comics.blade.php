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
    <div class="row">
        <div class="talent">
            <h3>Talent</h3>
            <div>
                <p>Art by:</p>
                <p>Written by:</p>
            </div>
            <div>
                <p>
                    @php
                        $gigi = 'gigi'
                    @endphp
                    @foreach($comic['artists'] as $value)
                        {{$value}} @if(count($comic['artists'])>1)
                            -
                        @endif
                    @endforeach
                </p>
                <p>
                @foreach($comic['writers'] as $value)
                        {{$value}} @if(count($comic['writers'])>1)
                            -
                        @endif
                    @endforeach
                </p>
            </div>
        </div>
        <div class="specs">
            <h3>Specs</h3>
            <div>
                <p>Series:</p>
                <p>U.S Price:</p>
                <p>On Sale Date:</p>
            </div>
            <div>
                <p>{{$comic['series']}}</p>
                <p>{{$comic['price']}}</p>
                <p>{{$comic['sale_date']}}</p>
            </div>
        </div>
    </div>
</div>11

@endsection