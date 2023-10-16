<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function register(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->validate([
                'name' => 'required|string',
                'email' => 'required|string|email|unique:users',
                'password' => 'required|string|confirmed',
            ]);

            // Create new user
            $user = new User([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $user->save();

            return redirect()->with('message', 'User registered successfully');
        } else {
            return view('templates/header')
                . view('pages/register')
                . view('templates/footer');
        }

    }

    public function login(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string',
            ]);

            // Attempt to log the user in
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                //Authentication passed...
                return redirect('/gratitude');
            } else {
                return redirect()->with('message', 'Unauthorized');
            }
        } else {
            return view('templates/header')
                . view('pages/login')
                . view('templates/footer');
        }

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}