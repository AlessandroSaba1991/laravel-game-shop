<?php

namespace App\Http\Controllers;

use App\Game;
use App\Http\Requests\GameRequest;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //ordina dall'ultimo al primo
        //$games = Game::orderByDesc('id')->get();
        $games = Game::all()->sortDesc();

        return view('games.index',compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('games.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GameRequest $request)
    {
        //dd($request->all());//['title' => 'fifa 2022']
        /* ALTERNATIVA */
        /* aggiundere sul model game protected $fillable = [tutti i campi] */

        /* $data = $request->all();
        Game::create($data); */
       /*  $validate_data = $request->validate([
            'title' => 'required|max:120',
            'thumb' => 'nullable',
            'cover_image' => 'nullable',
            'description' => 'nullable',
        ]); */
        //dd($validate_data);
        $validate_data = $request->validated();
        //dd($validate_data);
        Game::create($validate_data);
        /* //creiamo instanza
        $game = new Game();
        //assegnamo valori
        $game->title = $request->title;
        $game->thumb = $request->thumb;
        $game->cover_image = $request->cover_image;
        $game->description = $request->description;
        //salva
        $game->save(); */
        //redirect
        return redirect()->route('games.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        return view('games.show',compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        return view('games.edit',compact('game'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(GameRequest $request, Game $game)
    {
        /* $validate_data = $request->validate([
            'title' => 'required|max:120',
            'thumb' => 'nullable',
            'cover_image' => 'nullable',
            'description' => 'nullable',
        ]); */
        $validate_data = $request->validated();
        //dd($validate_data);
        //$data = $request->all();
        $game->update($validate_data);
        return redirect()->route('games.show',$game);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('games.index');
    }

}
