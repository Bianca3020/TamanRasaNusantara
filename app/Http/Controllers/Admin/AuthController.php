<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
        public function login()
    {
        if (session('admin')) {

            return redirect('/admin/dashboard');
        }

        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        if ($username == 'admin' && $password == 'admin123') {

            session([
                'admin' => true
            ]);

            return redirect('/admin/dashboard');
        }

        return back()->with('error', 'Username atau password salah');
    }

    public function logout()
    {
        session()->forget('admin');

        return redirect('/admin/login');
    }

        public function dashboard()
    {
        if (!session('admin')) {

            return redirect('/admin/login');
        }

        $totalRecipes = \App\Models\Recipe::count();

        return view('admin.dashboard', compact('totalRecipes'));
    }
}