<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BandaraController extends Controller
{
    public function index()
    {
        return view('pages.bandara',[
            'title' => 'Bandara'
        ]);
    }
}
