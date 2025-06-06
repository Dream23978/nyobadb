<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class logix extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tampilkan_halaman()
    {
        return view('masuk.index');
    }

    /**ini buat aturan validasi nya,
     * nangkep request xixixix */
    public function login(Request $request)
{
    // Validasi input
    $data = $request->validate([
        'username' => ['required', 'string', 'min:8'],
        'password' => ['required', 'min:6'],
    ], [
        'username.required' => 'Username gak boleh kosong',
        'password.required' => 'Password gak boleh kosong',
    ]);


    if (Auth::attempt($data)) {
        $request->session()->regenerate();


        return redirect()->intended('/Caridata');
    }

    return back()->withErrors([
        'username' => 'Username atau password salah.',
    ])->onlyInput('username');
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
