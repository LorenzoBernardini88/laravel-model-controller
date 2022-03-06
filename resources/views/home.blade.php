@extends('layouts.welcome')

@section('content')
<table>
    <tr class="title_column">
        <th>titolo</th>
        <th>Titolo-Originale</th>
        <th>Nazionalità</th>
        <th>Data</th>
        <th>Voto</th>
    </tr>
    @foreach ($data_movies as $valore)
    <tr class="data_table">
        <th>{{$valore['title']}}</th>
        <th>{{$valore['original_title']}}</th>
        <th>{{$valore['nationality']}}</th>
        <th>{{$valore['date']}}</th>
        <th>{{$valore['vote']}}</th>
    </tr>
    @endforeach
</table>
@endsection