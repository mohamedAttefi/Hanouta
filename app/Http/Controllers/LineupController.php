<?php

namespace App\Http\Controllers;

use App\Models\Lineup;
use App\Http\Requests\StoreLineupRequest;
use App\Http\Requests\UpdateLineupRequest;

class LineupController extends Controller
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
    public function store(StoreLineupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Lineup $lineup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLineupRequest $request, Lineup $lineup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lineup $lineup)
    {
        //
    }
}
