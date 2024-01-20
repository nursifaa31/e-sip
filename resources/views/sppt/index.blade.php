@extends('layouts.app')

@section('contents')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data SPPT</h6>
    </div>
    <div class="card-body">
        <div class="d-flex justify-content-center">
            <a href="{{ route('datasppt.tambah') }}" class="btn btn-primary mb-3">
                <i class="fa fa-plus"></i> Tambah Data
            </a>
        </div>
                <div class="table-responsive">
                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">

                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="myTable" class="table table-bordered dataTable table-bordered" >
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Kode Kecamatan</th>
                                            <th class="text-center">Tanggal Cetak</th>
                                            <th class="text-center">NOP</th>
                                            <th class="text-center">Nama WP</th>
                                            <th class="text-center">Pengambil</th>
                                            <th class="text-center">Tanggal Ambil</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php($no = 1)
                                        @foreach ($data as $row)
                                            <tr>
                                                <td class="text-center">{{ $no++ }}</td>
                                                <td class="text-center">{{ $row->kode_kecamatan }}</td>
                                                <td class="text-center">{{ $row->tanggal_cetak }}</td>
                                                <td class="text-center">{{ $row->nop }}</td>
                                                <td class="text-center">{{ $row->nama_wp }}</td>
                                                <td class="text-center">{{ $row->pengambil }}</td>
                                                <td class="text-center">{{ $row->tanggal_ambil }}</td>
                                                <td class="text-center">
                                                    <div class="d-flex justify-content-center">
                                                        <a href="{{ route('datasppt.edit', $row->id) }}" class="btn btn-warning mr-2">
                                                            <i class="fas fa-edit fa-sm"></i>
                                                        </a>
                                                        <a href="{{ route('datasppt.hapus', $row->id) }}" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">
                                                            <i class="fas fa-trash-alt fa-sm"></i>
                                                        </a>
                                                    </div>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                    </div></div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>


    <script type="text/javascript">
       $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</div>
@endsection
