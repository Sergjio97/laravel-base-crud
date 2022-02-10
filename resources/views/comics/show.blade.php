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
        <li><a href="{{route('comics.edit', $comic->id)}}">Edit</a></li>
        <li><a href="{{route('comics.index')}}">Back to homepage</a></li>
        <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
            {{-- token --}}
            @csrf
            {{-- method --}}
            @method('DELETE')

            <button type="submit">Delete</button>

        </form>
    </ul>
@endsection