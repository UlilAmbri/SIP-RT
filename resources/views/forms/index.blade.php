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
                    <input type="radio" id="html" name="fav_language" value="HTML">
                    <label for="html">HTML</label><br>
                    <input type="radio" id="css" name="fav_language" value="CSS">
                    <label for="css">CSS</label><br>
                    <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                    <label for="css">CSS</label><br>
                    <h6 class="title-layanan">Surat Keterangan</h6>
                    <div class="form-check form-switch">
                        <input wire:model.defer="state.flexSwitchCheckDefault" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Surat Keterangan</label>
                    </div>
                    <div class="form-check form-switch">
                        <input wire:model.defer="state.flexSwitchCheckDefault" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Surat Keterangan Tidak Mampu</label>
                    </div>
                    <div class="form-check form-switch">
                        <input wire:model.defer="state.flexSwitchCheckDefault" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Surat Keterangan Pindah</label>
                    </div>
                    <div class="form-check form-switch">
                        <input wire:model.defer="state.flexSwitchCheckDefault" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Surat Keterangan Mati</label>
                    </div>
                    <div class="form-check form-switch">
                        <input wire:model.defer="state.flexSwitchCheckDefault" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Surat Keterangan Belum Menikah</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Surat Keterangan Tidak Memiliki Rumah</label>
                    </div>
                    <h6 class="title-layanan">Surat Domisili</h6>
                    <div class="form-check form-switch">
                        <input wire:model.defer="state.flexSwitchCheckDefault" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Surat Domisili</label>
                    </div>
                    <h6 class="title-layanan">Surat Kuasa Waris</h6>
                    <div class="form-check form-switch">
                        <input wire:model.defer="state.flexSwitchCheckDefault" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Surat Kuasa Waris</label>
                    </div>
                    <h6 class="title-layanan">Surat Pernyataan Usaha</h6>
                    <div class="form-check form-switch">
                        <input wire:model.defer="state.flexSwitchCheckDefault" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Surat Pernyataan Usaha</label>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <a href="/form" class='create-layanan'>
                        <button type="submit" class="btn btn-primary me-1 mb-1">Buat Layanan</button>
                        <a href="/layanan" class='create-layanan'>
                        <button type="submit"
                            class="btn btn-light-secondary me-1 mb-1">Back</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@push('js')
    <script>
        $('#flexSwitchCheckDefault').on('change', function(){
            $('$body').toggleClass('flexSwitchCheckDefault')
        })

        // the selector will match all input controls of type :checkbox
        // and attach a click event handler 
        $("input:checkbox").on('click', function() {
        // in the handler, 'this' refers to the box clicked on
        var $box = $(this);
        if ($box.is(":checked")) {
            // the name of the box is retrieved using the .attr() method
            // as it is assumed and expected to be immutable
            var group = "input:checkbox[name='" + $box.attr("name") + "']";
            // the checked state of the group/box on the other hand will change
            // and the current value is retrieved using .prop() method
            $(group).prop("checked", false);
            $box.prop("checked", true);
        } else {
            $box.prop("checked", false);
        }
        });
    </script>
@endpush
@endsection