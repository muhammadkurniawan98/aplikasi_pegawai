@extends('user.layouts.app')
@section('pensiun', 'active')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-normal">PERSYARATAN PENGAJUAN PENSIUN</h6>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center font-weight-light">
                                SK PNS dalam format file pdf.
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center font-weight-light">
                                KARIS (Kartu Istri) atau KARSU (Kartu Suami) dalam format file pdf.
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center font-weight-light">
                                Kartu Pegawai dalam format file pdf.
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center font-weight-light">
                                Fotocopy KTP (Kartu Tanda Penduduk) dalam format file pdf.
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center font-weight-light">
                                Fotocopy KK (Kartu Keluarga) dalam format file pdf.
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center font-weight-light">
                                AKTA Nikah dalam format file pdf.
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center font-weight-light">
                                Dokumen TASPEN dalam format file pdf.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-normal">FORM PENGAJUAN PENSIUN</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pensiun.store') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="input-group-prepend">
                                    <label class="input-group-text font-weight-light" for="file_sk_pns">SK PNS</label>
                                </div>
                                <input id="file_sk_pns" name="file_sk_pns" type="file" class="file">
                                @error('file_sk_pns')
                                    <span class="alert-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="input-group-prepend">
                                    <label class="input-group-text font-weight-light" for="file_karis_karsu">KARIS/KARSU</label>
                                </div>
                                <input id="file_karis_karsu" name="file_karis_karsu" type="file" class="file">
                                @error('file_karis_karsu')
                                    <span class="alert-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="input-group-prepend">
                                    <label class="input-group-text font-weight-light" for="file_kartu_pegawai">KARTU PEGAWAI</label>
                                </div>
                                <input id="file_kartu_pegawai" name="file_kartu_pegawai" type="file" class="file">
                                @error('file_kartu_pegawai')
                                    <span class="alert-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="input-group-prepend">
                                    <label class="input-group-text font-weight-light" for="file_fotocopy_ktp">FOTOCOPY KTP</label>
                                </div>
                                <input id="file_fotocopy_ktp" name="file_fotocopy_ktp" type="file" class="file">
                                @error('file_fotocopy_ktp')
                                    <span class="alert-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="input-group-prepend">
                                    <label class="input-group-text font-weight-light" for="file_fotocopy_kk">FOTOCOPY KK</label>
                                </div>
                                <input id="file_fotocopy_kk" name="file_fotocopy_kk" type="file" class="file">
                                @error('file_fotocopy_kk')
                                    <span class="alert-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="input-group-prepend">
                                    <label class="input-group-text font-weight-light" for="file_akta_nikah">AKTA NIKAH</label>
                                </div>
                                <input id="file_akta_nikah" name="file_akta_nikah" type="file" class="file">
                                @error('file_akta_nikah')
                                    <span class="alert-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="input-group-prepend">
                                    <label class="input-group-text font-weight-light" for="file_dokumen_taspen">DOKUMEN TASPEN</label>
                                </div>
                                <input id="file_dokumen_taspen" name="file_dokumen_taspen" type="file" class="file">
                                @error('file_dokumen_taspen')
                                    <span class="alert-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button type="submit" id="send_form" class="btn btn-success">Kirim</button>
                            </div>

                            <script>
                                $("#file_sk_pns").fileinput({
                                    'language': 'id',
                                    allowedFileExtensions: ["pdf"],
                                    showPreview: false,
                                });
                                $("#file_karis_karsu").fileinput({
                                    'language': 'id',
                                    allowedFileExtensions: ["pdf"],
                                    showPreview: false,
                                });
                                $("#file_kartu_pegawai").fileinput({
                                    'language': 'id',
                                    allowedFileExtensions: ["pdf"],
                                    showPreview: false,
                                });
                                $("#file_fotocopy_ktp").fileinput({
                                    'language': 'id',
                                    allowedFileExtensions: ["pdf"],
                                    showPreview: false,
                                });
                                $("#file_fotocopy_kk").fileinput({
                                    'language': 'id',
                                    allowedFileExtensions: ["pdf"],
                                    showPreview: false,
                                });
                                $("#file_akta_nikah").fileinput({
                                    'language': 'id',
                                    allowedFileExtensions: ["pdf"],
                                    showPreview: false,
                                });
                                $("#file_dokumen_taspen").fileinput({
                                    'language': 'id',
                                    allowedFileExtensions: ["pdf"],
                                    showPreview: false,
                                });
                            </script>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
