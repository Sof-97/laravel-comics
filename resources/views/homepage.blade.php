@extends('layouts.basepage')
@section('title', 'Homepage')

@section('content')
<div class="container">
    <div class="series">
        current series
    </div>
    <div class="row">
        @foreach ($comics as $key => $value)
        <div class="card">
            <a href="{{ route('comics', ['id' => $key]) }}">
                <img src="{{$value['thumb']}}" alt="img">
                <h3>{{$value['series']}}</h3>
            </a>
        </div>
        @endforeach
    </div>
    <div class="load">
        <p>
            load more
        </p>
    </div>
</div>
@include('partials.store')
@endsection
