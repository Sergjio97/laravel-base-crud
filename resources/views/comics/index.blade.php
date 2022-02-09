@extends('layouts.base')

@section('pageContent')

    <h1>Lista Fumetti</h1>

    <ul>
        @foreach ($comics as $comic)           
            <li><img src="{{$comic['image']}}" alt=""></li>
            <li><h2>Title: {{$comic['title']}}</h2>
                <ul>                   
                    <li><span>Description:</span><p>{{$comic['description']}}</p></li>
                    <li><span>Price: </span><p>{{$comic['price']}}</p></li>
                    <li><span>Series: </span><p>{{$comic['series']}}</p></li>
                    <li><span>Sale date: </span><p>{{$comic['sale_date']}}</p></li>
                    <li><span>Type: </span><p>{{$comic['type']}}</p></li>
                    <li><a href="{{route('comics.show', $comic['id'])}}">Visualizza</a></li>
                </ul>
            </li>
        @endforeach
    </ul>

@endsection
