@extends('dashboard.layouts.main')

@section('container')
<form action="/form" method="POST" enctype="multi-part">
    @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if (session()->has('insertError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('insertError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
    @csrf
    <div class="col-md-15 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" style="display: block; width: 160px; height: 50px !important; margin-right: auto; margin-left: auto;"><b>Buat Layanan</b></h4>
                <p><b>Surat Keterangan</b></p>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-vertical">
                        <div class="form-body">
                            {{-- <div class="col-12 col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">File KTP</h5>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p class="card-text">Silahkan masukkan file KTP anda di bawah ini.
                                            </p>
                                            <!-- imgBB file uploader -->
                                            <input type="file" name="image" class="imgbb-filepond">
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="input-group mb-3">
                                <label for="inputGroupFile01">File KTP</label>
                                <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupFile01"><i
                                                            class="bi bi-upload"></i></label>
                                <input type="file" class="form-control @error('name') is-invalid @enderror" id="file_ktp" name="name">
                                    </div>
                                    @error('ktp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                <button type="reset"
                                    class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>
                            
                                    {{-- <div class="input-group mb-3">
                                        <label for="inputGroupFile02">File KK</label>
                                        <div class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupFile02"><i
                                                                    class="bi bi-upload"></i></label>
                                        <input type="file" class="form-control @error('name') is-invalid @enderror" id="file_kk" name="file_kk">
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
                                        <input type="file" class="form-control @error('name') is-invalid @enderror" id="buku_nikah" name="buku_nikah">
                                            </div>
                                            @error('buku_nikah')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                        
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <button type="reset"
                                        class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>
                            </div> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection