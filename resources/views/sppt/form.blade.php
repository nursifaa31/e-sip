@extends('layouts.app')

@section('title','Form Data SPPT')

@section('contents')
<form action="{{ isset($sppt) ? route('datasppt.tambah.update',$sppt->id) : route('datasppt.tambah.simpan') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ isset($sppt)?'Edit Data SPPT':'Tambah Data SPPT' }}</h6>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="kode_kecamatan">Kode Kecamatan</label>
                    <select class="form-control" id="kode_kecamatan" name="kode_kecamatan" value="{{ isset($sppt) ? $sppt->kode_kecamatan : '' }}">
                    <option value="">- Pilih -</option>
                    <option value="010 SAGALAHERANG">010 SAGALAHERANG</option>
                    <option value="011 SERANG PANJANG">011 SERANG PANJANG</option>
                    <option value="020 JALANCAGAK">020 JALANCAGAK</option>
                    <option value="021 CIATER">021 CIATER</option>
                    <option value="030 CISALAK">030 CISALAK</option>
                    <option value="031 KASOMALANG">031 KASOMALANG</option>
                    <option value="040 TANJUNGSIANG">040 TANJUNGSIANG</option>
                    <option value="050 SUBANG">050 SUBANG</option>
                    <option value="051 CIJAMBE">051 CIJAMBE</option>
                    <option value="060 CIBOGO">060 CIBOGO</option>
                    <option value="070 CIPUNAGARA">070 CIPUNAGARA</option>
                    <option value="080 PAGADEN">080 PAGADEN</option>
                    <option value="081 PAGADEN BARAT">081 PAGADEN BARAT</option>
                    <option value="090 KALIJATI">090 KALIJATI</option>
                    <option value="091 DAWUAN">091 DAWUAN</option>
                    <option value="100 PURWADADI">100 PURWADADI</option>
                    <option value="101 CIKAUM">101 CIKAUM</option>
                    <option value=">110 PABUARAN">110 PABUARAN</option>
                    <option value="120 PATOKBEUSI">120 PATOKBEUSI</option>
                    <option value="130 CIASEM">130 CIASEM</option>
                    <option value="140 BINONG">140 BINONG</option>
                    <option value="141 TAMBAKDAHAN">141 TAMBAKDAHAN</option>
                    <option value="150 COMPRENG">150 COMPRENG</option>
                    <option value="160 PUSAKANEGARA">160 PUSAKANEGARA</option>
                    <option value="161 PUSAKAJAYA">161 PUSAKAJAYA </option>
                    <option value="170 PAMANUKAN">170 PAMANUKAN</option>
                    <option value="171 LEGON KULON">171 LEGON KULON</option>
                    <option value="172 SUKASARI">172 SUKASARI</option>
                    <option value="180 BLANAKAN">180 BLANAKAN</option>
                    <option value="190 CIPEUNDEUY">190 CIPEUNDEUY</option>
                    </select>
                  </div>
                    <div class="form-group">
                    <label for="tanggal_cetak">Tanggal Cetak</label>
                    <input type="date" class="form-control" id="tanggal_cetak" name="tanggal_cetak" value="{{ isset($sppt) ? $sppt->tanggal_cetak : '' }}">
                    </div>
                  <div class="form-group">
                    <label for="nop">NOP</label>
                    <input type="integer" class="form-control" id="nop" name="nop" value="{{ isset($sppt) ? $sppt->nop : '' }}">
                  </div>
                  <div class="form-group">
                    <label for="nama_wp">Nama WP</label>
                    <input type="string" class="form-control" id="nama_wp" name="nama_wp" value="{{ isset($sppt) ? $sppt->nama_wp : '' }}">
                  </div>
                  <div class="form-group">
                    <label for="pengambil">Pengambil</label>
                    <input type="string" class="form-control" id="pengambil" name="pengambil"value="{{ isset($sppt) ? $sppt->pengambil : '' }}">
                  </div>
                  <div class="form-group">
                    <label for="tanggal_ambil">Tanggal Ambil</label>
                    <input type="date" class="form-control" id="tanggal_ambil" name="tanggal_ambil" value="{{ isset($sppt) ? $sppt->tanggal_ambil : '' }}">
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
