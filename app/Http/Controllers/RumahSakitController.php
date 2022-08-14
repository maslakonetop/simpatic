<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RumahSakitController extends Controller
{
    public function index()
    {
        return view('pages.rumahsakit', [
            'title' => 'Rumah Sakit'
        ]);
    }
}
