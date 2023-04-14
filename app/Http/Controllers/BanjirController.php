<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_daerah;
class BanjirController extends Controller
{
    public function index()
    {
        $data_daerah = data_daerah::all();
        return view('tabel',compact(['data_daerah']));
    }

    public function store(Request $request)
    {
        data_daerah::create($request->except(['_token','submit']));
        return redirect('/banjir');
    }
}
