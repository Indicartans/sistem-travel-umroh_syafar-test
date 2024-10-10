<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        User::create($validated);

        return redirect('/login')->with('success', 'Registrasi Berhasil Silahkan Login!');
    }
}
