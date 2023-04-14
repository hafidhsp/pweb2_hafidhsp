<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    function dashboard()
    {
        return dashboard("dashboard");
    }
    function Form()
    {
        return view('form');
    }
    function Tabel()
    {
        return view('tabel');
    }
}