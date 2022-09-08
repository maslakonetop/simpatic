<?php

namespace App\Http\Controllers;

use App\Models\Bandara;
use App\Http\Requests\StoreBandaraRequest;
use App\Http\Requests\UpdateBandaraRequest;

class BandaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Bandara::all();
        return view('dashboard.bandara.index',[
            'data' => $data,
            'title' => 'Bandara'            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.bandara.create', [
            'title' => 'Entry Bandara Baru'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBandaraRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBandaraRequest $request)
    {
        // return $request;
        $validatedData = $request->validate([
            'nama' => 'required|min:5|max:255',
            'latitude' => 'required|min:3|max:10',
            'longitude' => 'required|min:3|max:10',
            'detail' => 'required|min:3|max:255',
            'filekml' => 'min:3|max:255'
        ]);

        // dd('Berhasil!!!');
        Bandara::create($validatedData);

        return redirect('/dashboard/bandara')->with('Berhasil', 'Bandara Baru berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bandara  $bandara
     * @return \Illuminate\Http\Response
     */
    public function show(Bandara $bandara)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bandara  $bandara
     * @return \Illuminate\Http\Response
     */
    public function edit(Bandara $bandara)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBandaraRequest  $request
     * @param  \App\Models\Bandara  $bandara
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBandaraRequest $request, Bandara $bandara)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bandara  $bandara
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bandara $bandara)
    {
        //
    }
}
