<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('admin.register', [
            'title' => 'Register User'
        ]);
    }

    public function store(Request $request)
    {
        // return request()->all();
        $validatedData = $request->validate([
            'fullname' => 'required|min:5|max:255',
            'username' => 'required|min:5|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'jabatan' => 'required|min:5|max:255',
            'password' => 'required|min:7|max:255'

        ]);

        // dd('Berhasil!!!');
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);

        // $request->session()->flash('Berhasil', 'Petugas Baru berhasil diregistrasi');
        return redirect('/register')->with('Berhasil', 'Petugas Baru berhasil diregistrasi');
    }
}
