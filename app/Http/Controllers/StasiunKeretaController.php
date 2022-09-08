<?php

namespace App\Http\Controllers;

use App\Models\StasiunKereta;
use App\Http\Requests\StoreStasiunKeretaRequest;
use App\Http\Requests\UpdateStasiunKeretaRequest;

class StasiunKeretaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStasiunKeretaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStasiunKeretaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StasiunKereta  $stasiunKereta
     * @return \Illuminate\Http\Response
     */
    public function show(StasiunKereta $stasiunKereta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StasiunKereta  $stasiunKereta
     * @return \Illuminate\Http\Response
     */
    public function edit(StasiunKereta $stasiunKereta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStasiunKeretaRequest  $request
     * @param  \App\Models\StasiunKereta  $stasiunKereta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStasiunKeretaRequest $request, StasiunKereta $stasiunKereta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StasiunKereta  $stasiunKereta
     * @return \Illuminate\Http\Response
     */
    public function destroy(StasiunKereta $stasiunKereta)
    {
        //
    }
}
