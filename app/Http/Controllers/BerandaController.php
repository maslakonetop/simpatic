<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        return view('pages.index',[
            'title' => 'Beranda'
        ]);
    }

    public function getsubsektor($id)
    {
        $subsektor = DB::table('subsektors')->where('id_sektor', $id)->pluck("sub_sektor", "id");
        return json_encode($subsektor);
    }
}
