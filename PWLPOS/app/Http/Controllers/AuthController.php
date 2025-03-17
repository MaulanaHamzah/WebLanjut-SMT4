<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserModel;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login'); // Menampilkan form login
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Cek apakah user ada di database
        $user = UserModel::where('username', $request->username)->first();

        if ($user && password_verify($request->password, $user->password)) {
            Auth::login($user); // Login user
            return redirect()->route('dashboard'); // Redirect ke dashboard setelah login
        }

        return back()->withErrors(['username' => 'Username atau password salah']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
