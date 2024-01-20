@extends('layouts.app')

@section('title','Data Berkas SPPT ')
@section('contents')
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Berkas Sudah Cetak</h6>
    </div>
    <div class="card-body">
        <div class="d-flex justify-content-center">
            <a href="{{ route('berkas.tambah') }}" class="btn btn-primary mb-3">Tambah Data</a>
        </div>        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Box</th>
                        <th>Kode Kecamatan</th>
                        <th>Tanggal Pelayanan</th>
                        <th>Tanggal Cetak</th>
                        <th>NOP</th>
                        <th>Catanan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php($no = 1)
                    @foreach ($data as $row)
                        <tr>
                            <th>{{ $no++ }}</th>
                            <td>{{ $row->no_box }}</td>
                            <td>{{ $row->kode_kecamatan }}</td>
                            <td>{{ $row->tanggal_pelayanan }}</td>
                            <td>{{ $row->tanggal_cetak }}</td>
                            <td>{{ $row->nop }}</td>
                            <td>{{ $row->catatan }}</td>
                            <td>
                                <a href="{{ route('berkas.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('berkas.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
