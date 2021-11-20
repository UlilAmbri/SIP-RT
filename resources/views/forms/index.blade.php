@extends('dashboard.layouts.main')

@section('container')
<section class="section">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Buat Layanan</h4>
                </div>

                <div class="card-body">
                    <p>Silahkan Pilih Layanan yang anda ingin buat :</p>
                    <h6 class="title-layanan">Surat Keterangan</h6>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Surat Keterangan</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Surat Keterangan Tidak Mampu</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Surat Keterangan Pindah</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Surat Keterangan Mati</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Surat Keterangan Belum Menikah</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Surat Keterangan Tidak Memiliki Rumah</label>
                    </div>
                    <h6 class="title-layanan">Surat Domisili</h6>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Surat Domisili</label>
                    </div>
                    <h6 class="title-layanan">Surat Kuasa Waris</h6>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Surat Kuasa Waris</label>
                    </div>
                    <h6 class="title-layanan">Surat Pernyataan Usaha</h6>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Surat Pernyataan Usaha</label>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <a href="#" class='create-layanan'>
                        <button type="submit" class="btn btn-primary me-1 mb-1">Next</button>
                        <a href="/layanan" class='create-layanan'>
                        <button type="submit"
                            class="btn btn-light-secondary me-1 mb-1">Back</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection