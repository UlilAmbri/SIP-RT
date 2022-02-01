@extends('data.layouts.main')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="mb-2 text-gray-800 h3">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="mb-4 shadow card">
        <div class="py-3 card-header">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No. Hp</th>
                            <th>File KTP</th>
                            <th>File KK</th>
                            <th>Buku Nikah</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No. Hp</th>
                            <th>File KTP</th>
                            <th>File KK</th>
                            <th>Buku Nikah</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($lapors as $lapor)
                        <tr>
                            <td>{{$lapor['name']}}</td>
                            <td>{{$lapor['alamat']}}</td>
                            <td>{{$lapor['no_hp']}}</td>
                            <td>
                                <img src="{{$lapor['file_ktp']}}" alt="" width="80" height="80">
                            </td>
                            <td>
                                <img src="{{$lapor['file_kk']}}" alt="" width="80" height="80">
                            </td>
                            <td>
                                <img src="{{$lapor['buku_nikah']}}" alt="" width="80" height="80">
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
@endsection