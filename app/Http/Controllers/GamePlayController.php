<?php

namespace App\Http\Controllers;

use App\Models\GamePlay;
use App\Http\Requests\StoreGamePlayRequest;
use App\Http\Requests\UpdateGamePlayRequest;

class GamePlayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGamePlayRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(GamePlay $gamePlay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGamePlayRequest $request, GamePlay $gamePlay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GamePlay $gamePlay)
    {
        //
    }
}
