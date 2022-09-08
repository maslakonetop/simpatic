<?php

namespace App\Http\Controllers;

use App\Models\Pelabuhan;
use App\Http\Requests\StorePelabuhanRequest;
use App\Http\Requests\UpdatePelabuhanRequest;

class PelabuhanController extends Controller
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
     * @param  \App\Http\Requests\StorePelabuhanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePelabuhanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelabuhan  $pelabuhan
     * @return \Illuminate\Http\Response
     */
    public function show(Pelabuhan $pelabuhan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelabuhan  $pelabuhan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelabuhan $pelabuhan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePelabuhanRequest  $request
     * @param  \App\Models\Pelabuhan  $pelabuhan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePelabuhanRequest $request, Pelabuhan $pelabuhan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelabuhan  $pelabuhan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelabuhan $pelabuhan)
    {
        //
    }
}
