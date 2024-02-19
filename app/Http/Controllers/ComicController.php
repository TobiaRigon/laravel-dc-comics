<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

use App\Http\Requests\ComicFormRequest;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $comics = Comic ::all();

        return view('pages.index' , compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComicFormRequest $request)
    {
        $data = $request -> all();

        $newComic = new Comic();

        $newComic -> title = $data['title'];
        $newComic -> author = $data['author'];
        $newComic -> description = $data['description'];
        $newComic -> price = $data['price'];

        $newComic -> save();

        return redirect() -> route('comics.show' , $newComic -> id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic :: find($id);

        return view('pages.show' , compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic :: find($id);

        return view ('pages.edit' , compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ComicFormRequest $request, $id)
    {
        $comic = Comic :: find($id);

        $data = $request -> all();
        $comic -> title = $data['title'];
        $comic -> author = $data['author'];
        $comic -> description = $data['description'];
        $comic -> price = $data['price'];

        $comic -> save();

        return redirect() -> route('comics.show' , $comic -> id);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic :: find($id);
        $comic -> delete();

        return redirect() -> route('comics.index');
    }
}
