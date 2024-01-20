<?php

namespace App\Http\Controllers;

use App\Models\BerkasM;
use Illuminate\Http\Request;

class BerkasController extends Controller
{
    public function index()
    {
        $berkas = BerkasM::get();

        return view('berkas.index', ['data' => $berkas]);
    }

    public function tambah()
    {
        return view('berkas.form');
    }

    public function simpan(Request $request)
    {
        $data = [
            'no_box' =>$request->no_box,
            'kode_kecamatan' =>$request->kode_kecamatan,
            'tanggal_pelayanan' =>$request->tanggal_pelayanan,
            'tanggal_cetak' =>$request->tanggal_cetak,
            'nop' =>$request->nop,
            'catatan' =>$request->catatan,
        ];

        BerkasM::create($data);

        return redirect()->route('berkas');
    }

    public function edit($id)
    {
        $berkas = BerkasM::find($id)->first();

        return view('berkas.form',['berkas'=>$berkas]);
    }

    public function update($id, Request $request)
    {
        $data = [
            'no_box' =>$request->no_box,
            'kode_kecamatan' =>$request->kode_kecamatan,
            'tanggal_pelayanan' =>$request->tanggal_pelayanan,
            'tanggal_cetak' =>$request->tanggal_cetak,
            'nop' =>$request->nop,
            'catatan' =>$request->catatan,
        ];

        BerkasM::find($id)->update($data);

        return redirect()->route('berkas');

    }

    public function hapus($id)
    {
        BerkasM::find($id)->delete();

        return redirect()->route('berkas');
    }
}
