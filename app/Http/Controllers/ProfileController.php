<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    // Method untuk menampilkan profil pengguna
    public function show()
    {
        $user = Auth::user();
        return view('profile.show', compact('user'));
    }

    // Method untuk menampilkan form edit profil pengguna
    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    // Method untuk memperbarui profil pengguna
    public function update(Request $request)
    {
        $user = Auth::user();
        
        // Validasi data yang diterima dari form
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        ]);

        // Update profil pengguna
        $user->update($request->only('name', 'email'));

        return redirect()->route('profile.show')->with('success', 'Profil berhasil diperbarui.');
    }
}
