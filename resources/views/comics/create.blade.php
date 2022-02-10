@extends('layouts.base')

@section('pageContent')
    
    <h1>Add new comic</h1>

    {{-- form --}}
    <form action="{{route('comics.store')}}" method="POST">

        {{-- token --}}
        @csrf

        <div class="form-group">
            <label for="title"><h4>Insert title</h4></label>
            <input type="text" class="form-controll" id="title" name="title" placeholder="Insert title">
        </div>

        <div class="form-group">
            <label for="type"><h4>Comic type</h4></label>
            <select class="form-controll form-controll-md" name="type" id="type">
                <option value="comic book">Comic book</option>
                <option value="graphic novel">Graphic novel</option>
            </select>
        </div>

        <div class="form-group">
            <label for="series"><h4>Series</h4></label>
            <input type="text" class="form-controll" id="series" name="series" placeholder="Insert series">
        </div>

        <div class="form-group">
            <label for="sale_date"><h4>Sale date</h4></label>
            <input type="date" class="form-controll" id="sale_date" name="sale_date" placeholder="Insert Sale date">
        </div>

        <div class="form-group">
            <label for="price"><h4>Price</h4></label>
            <input type="number" class="form-controll" id="price" name="price" placeholder="Insert price">
        </div>

        <div class="form-group">
            <label for="image"><h4>Image</h4></label>
            <input type="text" class="form-controll" id="image" name="image" placeholder="Add image">
        </div>

        <div class="form-group">
            <label for="description"><h4>Description</h4></label>
            <input type="text" class="form-controll" id="description" name="description" rows="8" placeholder="Insert description">
        </div>

        {{-- submit --}}
        <button type="submit">Save comic</button>

    </form>

@endsection