<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Person;
use App\Genre;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $movies = Movie::get();
        return view ('Movie/index', ['movies' => $movies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $people = Person::get();
        $genres = Genre::get();
        return view ('Movie/create', ['people' => $people, 'genres' => $genres]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $movie = new Movie;
            $movie->title = $request->input('title');
            $movie->description = $request->input('description');
            $movie->runtime = $request->input('runtime');
            $movie->poster_url = $request->input('poster_url');
            $movie->releaseyear = $request->input('releaseyear');
            $movie->save();
            $movie->genres()->attach($request->input('genres'));
            $movie->directors()->attach($request->input('directors'), ['role' => 1]);
            $movie->actors()->attach($request->input('actors'), ['role' => 2]);
            return redirect()->route('movie.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('movie/show', ['movie'=> $movie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
