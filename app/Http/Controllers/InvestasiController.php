<?php

namespace App\Http\Controllers;

use App\Models\Investasi;
use App\Models\Sektor;
use App\Models\SubSektor;
use App\Http\Requests\StoreInvestasiRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UpdateInvestasiRequest;

class InvestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Investasi::all();
        return view('dashboard.investasi.index', [
            'title' => 'Investasi',
            'datas' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sektor = DB::table('sektors')->pluck("sektor", "id");
        $subsektor = SubSektor::all();
        $kecamatan = DB::table('kecamatans')->pluck("kecamatan", "id");
        return view('dashboard.investasi.create', [
            'title' => 'Investasi Baru',
            'sektors' => $sektor,
            'subsektors' => $subsektor,
            'kecamatans' => $kecamatan 
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInvestasiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvestasiRequest $request)
    {
        // return $request->file('layout')->store('gambar');
        $request->validate([
            'namaproyek' => 'required|min:5|max:255',
            'sektor' => 'required',
            'kategori_pasar' => 'required|min:3',
            'latarbelakang' => 'required|min:3',
            'existing' => 'required|min:3',
            'lokasi' => 'required|min:3',
            'kecamatan' => 'required|min:3',
            'latitude' => 'required|min:5',
            'longitude' => 'required|min:5',
            'luas' => 'required|min:5',
            'desk_luas' => 'required',
            'status' => 'required|min:5|max:100',
            'lingk_kerja' => 'required|min:5|max:255',
            'sedia_pasar' => 'required|min:5|max:255',
            'sedia_sumber' => 'required|min:5|max:255',
            'nilai' => 'required|min:7|max:255',
            'rincian_investasi' => 'required|min:5|max:255',
            'layout' => 'image|file|size:2024',
            'skema' => 'required|min:5|max:255',
            'npv' => 'required',
            'irr' => 'required',
            'bc_ratio' => 'required',
            'payback_period' => 'required',
            'pic' => 'required',
            'nomor_hp' => 'required|min:5|max:15',
            'email' => 'required|email:dns',
            'alamat' => 'required',
            'video' => 'mimetypes:video/avi,video/mpeg,video/quicktime',
            'photo' => 'image|file|size:2024',
            'photo1' => 'image|file|size:2024',
            'photo2' => 'image|file|size:2024',
        ]);
        dd('berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Investasi  $investasi
     * @return \Illuminate\Http\Response
     */
    public function show(Investasi $investasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Investasi  $investasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Investasi $investasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInvestasiRequest  $request
     * @param  \App\Models\Investasi  $investasi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInvestasiRequest $request, Investasi $investasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Investasi  $investasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Investasi $investasi)
    {
        //
    }

    // public function getsubsektor($id)
    // {
    //     $subsektor = DB::table('subsektors')->where('id_sektor', $id)->pluck("sub_sektor", "id");
    //     return json_encode($subsektor);
    // }
}
