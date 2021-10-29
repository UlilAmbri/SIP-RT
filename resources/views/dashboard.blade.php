@extends('dashboard.layouts.main')

@section('container')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 style="display: block; width: 300px; height: 50px !important; margin-right: auto; margin-left: auto; ">Ketentuan Penggunaan Aplikasi</h4>
            </div>
            <div class="card-body">
                <p ><b>Permohonan Anda akan diproses pada hari dan jam Kerja</b></p>
                <b>Batas Untuk Pengajuan Perhari : Bebas</b>
                <div id="chart-profile-visit"></div>
            </div>
        </div>
    </div>
</div>

        <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 style="display: block; width: 330px; height: 50px !important; margin-right: auto; margin-left: auto; ">Kewenangan Pembatasan Layanan</h4>
            </div>
            <div class="card-body">
                <p ><b>Permohonan Anda akan diproses pada hari dan jam Kerja</b></p>
                <b>Batas Untuk Pengajuan Perhari : 1</b>
                <div id="chart-profile-visit"></div>
            </div>
        </div>
    </div>
</div>
@endsection