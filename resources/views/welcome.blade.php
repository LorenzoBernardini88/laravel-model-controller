@dump($data_movies)
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel-Model-Controller</title>
</head>
<body>
    <main>
        @foreach ($data_movies as $valore)
        <div class="film_cont">
            <h2>Titolo: {{$valore['title']}}</h2>
            <p>Titolo-Originale: {{$valore['original_title']}}</p>
            <p>Nazionalità: {{$valore['nationality']}}</p>
            <p>Data: {{$valore['date']}}</p>
            <p>Voto: {{$valore['vote']}}</p>
        </div>
        @endforeach
    </main>
</body>
</html>
            