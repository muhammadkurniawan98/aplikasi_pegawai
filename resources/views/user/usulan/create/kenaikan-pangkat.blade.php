@extends('user.layouts.app')
@section('pangkat', 'active')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-normal">PERSYARATAN PENGAJUAN KENAIKAN PANGKAT</h6>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item align-items-center font-weight-light">
                            Surat Pengantar Usul Kenaikan Pangkat dalam format file pdf.
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center font-weight-light">
                            SK PNS dalam format file pdf.
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center font-weight-light">
                            SK Pangkat Terakhir dalam format file pdf.
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center font-weight-light">
                            SK Jabatan Fungsional dalam format file pdf.
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center font-weight-light">
                            Sertifikat Pendidik (Bagi Guru yang sudah bersertifikasi) dalam format file pdf.
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center font-weight-light">
                            Kartu Pegawai dalam format file pdf.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-normal">FORM PEGAJUAN KENAIKAN PANGKAT</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('pangkat.store') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text font-weight-light" for="file_pengantar">SURAT PENGANTAR</label>
                            </div>
                            <input id="file_pengantar" name="file_pengantar" type="file" class="file">
                            @error('file_pengantar')
                                <span class="alert-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text font-weight-light" for="file_pns">SK PNS</label>
                            </div>
                            <input id="file_pns" name="file_pns" type="file" class="file">
                            @error('file_pns')
                                <span class="alert-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text font-weight-light" for="file_pangkat_terakhir">SK PANGKAT TERAKHIR</label>
                            </div>
                            <input id="file_pangkat_terakhir" name="file_pangkat_terakhir" type="file" class="file">
                            @error('file_pangkat_terakhir')
                                <span class="alert-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text font-weight-light" for="file_jabatan_fungsional">SK JABATAN FUNGSIONAL</label>
                            </div>
                            <input id="file_jabatan_fungsional" name="file_jabatan_fungsional" type="file" class="file">
                            @error('file_jabatan_fungsional')
                                <span class="alert-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text font-weight-light" for="file_sertifikat_pendidikan">SERTIFIKAT PENDIDIKAN</label>
                            </div>
                            <input id="file_sertifikat_pendidikan" name="file_sertifikat_pendidikan" type="file" class="file">
                            @error('file_sertifikat_pendidikan')
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
                            <button type="submit" id="send_form" class="btn btn-success">Kirim</button>
                        </div>

                        <script>
                            $("#file_pengantar").fileinput({
                                'language': 'id',
                                allowedFileExtensions: ["pdf"],
                                showPreview: false,
                            });
                            $("#file_pns").fileinput({
                                'language': 'id',
                                allowedFileExtensions: ["pdf"],
                                showPreview: false,
                            });
                            $("#file_pangkat_terakhir").fileinput({
                                'language': 'id',
                                allowedFileExtensions: ["pdf"],
                                showPreview: false,
                            });
                            $("#file_jabatan_fungsional").fileinput({
                                'language': 'id',
                                allowedFileExtensions: ["pdf"],
                                showPreview: false,
                            });
                            $("#file_sertifikat_pendidikan").fileinput({
                                'language': 'id',
                                allowedFileExtensions: ["pdf"],
                                showPreview: false,
                            });
                            $("#file_kartu_pegawai").fileinput({
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
