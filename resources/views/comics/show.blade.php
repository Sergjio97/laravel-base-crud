@extends('layouts.base')

@section('pageContent')
    <h1>{{$comic['title']}}</h1>
    <img src="{{$comic['image']}}" alt="{{$comic['title']}}">
    <ul>
        <li><span>Description:</span><p>{{$comic['description']}}</p></li>
        <li><span>Price: </span><p>{{$comic['price']}}</p></li>
        <li><span>Series: </span><p>{{$comic['series']}}</p></li>
        <li><span>Sale date: </span><p>{{$comic['sale_date']}}</p></li>
        <li><span>Type: </span><p>{{$comic['type']}}</p></li>
    </ul>
@endsection