<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postLogin(Request $request)
    {
        // dd($request->all());
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('home');
        }
        // return redirect('/');
        // return redirect()->back()->with('alert', 'Username / Password Salah!');
        echo "<script>";
        echo "alert('Username / Password Salah!');";
        echo "</script>";
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
