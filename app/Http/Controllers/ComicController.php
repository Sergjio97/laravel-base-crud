<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'title' => 'required|string|min:1|max:70|unique:comics',
            'description' => 'required|string',
            'image' => 'required|url',
            'price' => 'required|integer|min:1',
            'series' => 'required|string|max:50',
            'sale_date' => 'required|date',
            'type' => [
               'required',
               Rule::in('comic book', 'graphic novel')
            ]
        ]);

        $newComic = new Comic();
        //
        $newComic->title = $data['title'];
        $newComic->description = $data['description'];
        $newComic->image = $data['image'];
        $newComic->price = $data['price'];
        $newComic->series = $data['series'];
        $newComic->sale_date = $data['sale_date'];
        $newComic->type = $data['type'];
        //
        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //$comic = Comic::find($id);

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();

        $request->validate([
            'title' => 'required|string|min:1|max:70|unique:comics,title,{$comic->id}',
            'description' => 'required|string',
            'image' => 'required|url',
            'price' => 'required|integer|min:1',
            'series' => 'required|string|max:50',
            'sale_date' => 'required|date',
            'type' => [
               'required',
               Rule::in('comic book', 'graphic novel')
            ]
        ]);

        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->image = $data['image'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
        //
        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
