<?php

namespace App\Http\Controllers;

use App\Models\Perbankan;
use App\Http\Requests\StorePerbankanRequest;
use App\Http\Requests\UpdatePerbankanRequest;

class PerbankanController extends Controller
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
     * @param  \App\Http\Requests\StorePerbankanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePerbankanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perbankan  $perbankan
     * @return \Illuminate\Http\Response
     */
    public function show(Perbankan $perbankan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perbankan  $perbankan
     * @return \Illuminate\Http\Response
     */
    public function edit(Perbankan $perbankan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePerbankanRequest  $request
     * @param  \App\Models\Perbankan  $perbankan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePerbankanRequest $request, Perbankan $perbankan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perbankan  $perbankan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perbankan $perbankan)
    {
        //
    }
}
