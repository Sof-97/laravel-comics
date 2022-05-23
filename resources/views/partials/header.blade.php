<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Dc Comics: @yield('title')</title>
</head>

<body>

</body>

</html>
<header>
    <div class="top-header">
        <p>DC POWER VISA</p>
        <p>ADDITIONAL DC SITES <i class="fa-solid fa-sort-down"></i></p>
    </div>
    <div class="bot-header">
        <img src="{{asset('images/dc-logo.png')}}" alt="">
        <ul>
            <li>
                <a href="{{route('home')}}">charachters</a>
            </li>
            <li>
                <a href="{{route('home')}}">comics</a>
            </li>
            <li>
                <a href="{{route('home')}}">movies</a>
            </li>
            <li>
                <a href="{{route('home')}}">tv</a>
            </li>
            <li>
                <a href="{{route('home')}}">games</a>
            </li>
            <li>
                <a href="{{route('home')}}">collectibles</a>
            </li>
            <li>
                <a href="{{route('home')}}">videos</a>
            </li>
            <li>
                <a href="{{route('home')}}">fans</a>
            </li>
            <li>
                <a href="{{route('home')}}">news</a>
            </li>
            <li>
                <a href="{{route('home')}}">shop <i class="fa-solid fa-sort-down"></i></a>
            </li>
        </ul>
        <div class="search-bar">
            <input type="text" placeholder="Search">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
    </div>
</header>