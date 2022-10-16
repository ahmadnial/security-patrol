<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app.home');
    }

    public function rekapLaporan()
    {
        return view('app.rekap-laporan');
    }

    public function createUser()
    {
        return view('app.create-user');
    }

    public function scanqr()
    {
        return view('app.scanqr');
    }

    public function validasi()
    {
        return view('app.scanqr');
    }
}
