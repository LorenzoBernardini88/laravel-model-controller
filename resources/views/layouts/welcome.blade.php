{{-- @dump($data_movies) --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Laravel-Model-Controller</title>
</head>
<body>
    @include('commons.header')
    <main>
        @yield('content')
        {{-- <div class="container"> --}}
            {{-- // <div class="film_cont">
            //     <h3>Titolo: {{$valore['title']}}</h3>
            //     <p>Titolo-Originale: {{$valore['original_title']}}</p>
            //     <p>Nazionalità: {{$valore['nationality']}}</p>
            //     <p>Data: {{$valore['date']}}</p>
            //     <p>Voto: {{$valore['vote']}}</p>
            // </div> --}}
        {{-- </div> --}}
    </main>
</body>
</html>
