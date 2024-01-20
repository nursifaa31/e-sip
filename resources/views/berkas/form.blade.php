@extends('layouts.app')

@section('title','Form Data Berkas Sudah Cetak')

@section('contents')
<form action="{{ isset($berkas) ? route('berkas.tambah.update',$berkas->id) : route('berkas.tambah.simpan') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ isset($berkas)?'Edit Data Arsip':'Tambah Data Arsip' }}</h6>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="kode_kecamatan">No Box</label>
                    <input type="text" class="form-control" id="no_box" name="no_box" value="{{ isset($berkas) ? $berkas->no_box : '' }}">
                  </div>
                  <div class="form-group">
                    <label for="kode_kecamatan">Kode Kecamatan</label>
                    <input type="text" class="form-control" id="kode_kecamatan" name="kode_kecamatan" value="{{ isset($berkas) ? $berkas->kode_kecamatan : '' }}">
                  </div>
                  <div class="form-group">
                    <label for="tanggal_pelayanan">Tanggal Pelayanan</label>
                    <input type="date" class="form-control" id="tanggal_pelayanan" name="tanggal_pelayanan" value="{{ isset($berkas) ? $berkas->tanggal_pelayanan : '' }}">
                  </div>
                  <div class="form-group">
                    <label for="tanggal_cetak">Tanggal Cetak</label>
                    <input type="date" class="form-control" id="tanggal_cetak" name="tanggal_cetak" value="{{ isset($berkas) ? $berkas->tanggal_cetak : '' }}">
                  </div>
                  <div class="form-group">
                    <label for="nop">NOP</label>
                    <input type="integer" class="form-control" id="nop" name="nop" value="{{ isset($berkas) ? $berkas->nop : '' }}">
                  </div>
                  <div class="form-group">
                    <label for="catatan">Catatan</label>
                    <input type="string" class="form-control" id="catatan" name="catatan" value="{{ isset($berkas) ? $berkas->catatan : '' }}">
                  </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
