<?php

namespace App\Http\Controllers;

use App\Models\MatchEvent;
use App\Http\Requests\StoreMatchEventRequest;
use App\Http\Requests\UpdateMatchEventRequest;

class MatchEventController extends Controller
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
    public function store(StoreMatchEventRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MatchEvent $matchEvent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMatchEventRequest $request, MatchEvent $matchEvent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MatchEvent $matchEvent)
    {
        //
    }
}
