@extends('layouts.base')

@section('pageContent')
    
    <h1>Add new comic</h1>

    {{-- form --}}
    <form action="{{route('comics.store')}}" method="POST">

        {{-- token --}}
        @csrf

        <div class="form-group">
            <label for="title"><h4>Insert title</h4></label>
            <input type="text" class="form-controll @error('title') is-invalid @enderror" id="title" name="title" placeholder="Insert title" value="{{old('title')}}">

            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>

        <div class="form-group">
            <label for="type"><h4>Comic type</h4></label>
            <select class="form-controll form-controll-md @error('type') is-invalid @enderror" name="type" id="type">
                <option value="comic book" {{old('type') == 'comic book' ? 'selected' : null}}>Comic book</option>
                <option value="graphic novel" {{old('type') == 'graphic novel' ? 'selected' : null}}>Graphic novel</option>
            </select>

            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>

        <div class="form-group">
            <label for="series"><h4>Series</h4></label>
            <input type="text" class="form-controll @error('series') is-invalid @enderror" id="series" name="series" placeholder="Insert series" value="{{old('series')}}">

            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>

        <div class="form-group">
            <label for="sale_date"><h4>Sale date</h4></label>
            <input type="date" class="form-controll @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" placeholder="Insert Sale date" value="{{old('sale_date')}}">

            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>

        <div class="form-group">
            <label for="price"><h4>Price</h4></label>
            <input type="number" class="form-controll @error('price') is-invalid @enderror" id="price" name="price" placeholder="Insert price" value="{{old('price')}}">

            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="image"><h4>Image</h4></label>
            <input type="text" class="form-controll @error('image') is-invalid @enderror" id="image" name="image" placeholder="Add image" value="{{old('image')}}">

            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>

        <div class="form-group">
            <label for="description"><h4>Description</h4></label>
            <input type="text" class="form-controll @error('description') is-invalid @enderror" id="description" name="description" rows="8" placeholder="Insert description" value="{{old('description')}}">

            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>

        {{-- submit --}}
        <button type="submit">Save comic</button>

    </form>

@endsection