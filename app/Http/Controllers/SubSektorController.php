<?php

namespace App\Http\Controllers;

use App\Models\SubSektor;
use App\Http\Requests\StoreSubSektorRequest;
use App\Http\Requests\UpdateSubSektorRequest;

class SubSektorController extends Controller
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
     * @param  \App\Http\Requests\StoreSubSektorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubSektorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubSektor  $subSektor
     * @return \Illuminate\Http\Response
     */
    public function show(SubSektor $subSektor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubSektor  $subSektor
     * @return \Illuminate\Http\Response
     */
    public function edit(SubSektor $subSektor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubSektorRequest  $request
     * @param  \App\Models\SubSektor  $subSektor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubSektorRequest $request, SubSektor $subSektor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubSektor  $subSektor
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubSektor $subSektor)
    {
        //
    }
}
