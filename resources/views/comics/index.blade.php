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
                    <li><a href="{{route('comics.show', $comic['id'])}}">Show</a></li>
                    <li><a href="{{route('comics.edit', $comic->id)}}">Edit</a></li>
                    <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                        {{-- token --}}
                        @csrf
                        {{-- method --}}
                        @method('DELETE')

                        <button type="submit">Delete</button>

                    </form>
                    
                </ul>
            </li>
        @endforeach
        <li><a href="{{route('comics.create')}}">Generate</a></li>
    </ul>

@endsection
