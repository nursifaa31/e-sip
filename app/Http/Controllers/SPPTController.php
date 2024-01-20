<?php

namespace App\Http\Controllers;

use App\Models\SPPTM;
use Illuminate\Http\Request;

class SPPTController extends Controller
{
    public function index(Request $request)
    {
        if($request ) {
            $sppt = SPPTM::search($request)->get();
        }
        else {
                $sppt = SPPTM::all();
             }
        $sppt = SPPTM::paginate(10);

        return view('sppt.index', ['data' => $sppt]);
    }

    public function tambah()
    {
        return view('sppt.form');
    }

    public function simpan(Request $request)
    {
        $data = [
            'kode_kecamatan' =>$request->kode_kecamatan,
            'tanggal_cetak' =>$request->tanggal_cetak,
            'nop' =>$request->nop,
            'nama_wp' => $request->nama_wp,
            'pengambil' =>$request->pengambil,
            'tanggal_ambil' =>$request->tanggal_ambil,
        ];

        SPPTM::create($data);

        return redirect()->route('datasppt');
    }

    public function edit($id)
    {
        $sppt = SPPTM::find($id)->first();

        return view('sppt.form',['sppt'=>$sppt]);
    }

    public function update($id, Request $request)
    {
        $data = [
            'kode_kecamatan' =>$request->kode_kecamatan,
            'tanggal_cetak' =>$request->tanggal_cetak,
            'nop' =>$request->nop,
            'nama_wp' => $request->nama_wp,
            'pengambil' =>$request->pengambil,
            'tanggal_ambil' =>$request->tanggal_ambil,
        ];

        SPPTM::find($id)->update($data);

        return redirect()->route('datasppt');

    }

    public function hapus($id)
    {
        SPPTM::find($id)->delete();

        return redirect()->route('datasppt');
    }
}
