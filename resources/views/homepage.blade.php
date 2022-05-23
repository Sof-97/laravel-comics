@extends('layouts.basepage')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($comics as $comic)
        <div class="card">
            <img src="{{$comic['thumb']}}" alt="img">
            <h3>{{$comic['series']}}</h3>
        </div>
        @endforeach
    </div>
    <div class="load">
        <p>
            load more
        </p>
    </div>
</div>
@endsection