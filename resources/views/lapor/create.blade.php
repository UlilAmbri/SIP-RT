@extends('dashboard.layouts.main')

@section('container')
<form action="/lapor" method="POST" enctype="multi-part">
    @csrf
    <div class="col-md-15 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" style="display: block; width: 160px; height: 50px !important; margin-right: auto; margin-left: auto;"><b>Wajib Lapor</b></h4>
                <p><b>Warga Wajib Lapor 2x24 Jam ke RT</b></p>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-vertical">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="first-name-icon">Nama</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                placeholder="Masukkan nama" id="name" name="name" autofocus required value="{{ old('name') }}" />
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                            @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
    
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-icon">Alamat</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan alamat"
                                            id="alamat" name="alamat" autofocus required value="{{ old('alamat') }}" />
                                            <div class="form-control-icon">
                                                <i class="fas fa-road"></i>
                                            </div>
                                            @error('alamat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-icon">No. Hp</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="+6812345678"
                                            id="no_hp" name="no_hp" autofocus required value="{{ old('no_hp') }}" />
                                            <div class="form-control-icon">
                                                <i class="bi bi-phone"></i>
                                            </div>
                                            @error('no_hp')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col-12">
                                </div>
                                    {{-- <div class="input-group mb-3">
                                        <label for="inputGroupFile01">File KTP</label>
                                        <div class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupFile01"><i
                                                                    class="bi bi-upload"></i></label>
                                        <input type="file" class="form-control @error('name') is-invalid @enderror" id="ktp" name="ktp">
                                            </div>
                                            @error('ktp')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
    
                            <div class="col-12">
                            </div>
                                    <div class="input-group mb-3">
                                        <label for="inputGroupFile02">File KK</label>
                                        <div class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupFile02"><i
                                                                    class="bi bi-upload"></i></label>
                                        <input type="file" class="form-control @error('name') is-invalid @enderror" id="kk" name="kk">
                                            </div>
                                            @error('kk')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
    
                            <div class="col-12">
                                    <div class="input-group mb-3">
                                        <label for="inputGroupFile03">File Buku Nikah </label>
                                        <div class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupFile03"><i
                                                                    class="bi bi-upload"></i></label>
                                        <input type="file" class="form-control @error('name') is-invalid @enderror" id="ktp" name="buku_nikah">
                                            </div>
                                            @error('buku_nikah')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div> --}}
                        
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <button type="reset"
                                        class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection