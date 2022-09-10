<?php

namespace App\Http\Controllers;

use App\Models\Sektor;
use App\Http\Requests\StoreSektorRequest;
use App\Http\Requests\UpdateSektorRequest;

class SektorController extends Controller
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
     * @param  \App\Http\Requests\StoreSektorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSektorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sektor  $sektor
     * @return \Illuminate\Http\Response
     */
    public function show(Sektor $sektor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sektor  $sektor
     * @return \Illuminate\Http\Response
     */
    public function edit(Sektor $sektor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSektorRequest  $request
     * @param  \App\Models\Sektor  $sektor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSektorRequest $request, Sektor $sektor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sektor  $sektor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sektor $sektor)
    {
        //
    }
}
