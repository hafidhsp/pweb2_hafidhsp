<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_daerah;

class DataController extends Controller
{

    public function index()
    {
        $data_daerah = data_daerah::all();
        return view('tabel',compact(['data_daerah']));
    }

    public function tambahdata()
    {
        return view('form');
    }

    public function insertdata(Request $request)
    {
        $data = $request->all();
        $data_daerah = new data_daerah();
        $data_daerah->nama_daerah = $data['nama_daerah'];
        $data_daerah->banjir = $data['banjir'];
        $data_daerah->save();
        return redirect()->route('form');
    }

    public function destroy($id_daerah)
    {
        $data_daerah = data_daerah::find($id_daerah);
        $data_daerah->delete();
        return redirect('/data_daerah');
    }

}