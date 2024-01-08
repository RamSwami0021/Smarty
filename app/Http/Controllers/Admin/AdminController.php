<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.welcome');
    }
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials) && Auth::user()->role == 'admin') {
            return redirect()->route('admin.welcome');
        }

        return redirect()->route('admin.login')->with('error', 'Invalid login credentials.');
    }

    public function logout()
{
    Auth::logout();

    return redirect('/');
}

}
