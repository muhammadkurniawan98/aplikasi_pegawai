@extends('user.layouts.app')
@section('gaji', 'active')
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">

            @if(auth()->user()->status_kepegawaian == 'Pensiun')
                <a href="{{ route('gaji.create') }}"
                   class="btn btn-primary btn-icon-split btn-sm disabled">
                    <span class="icon text-white">
                        <i class="far fa-plus-square"></i>
                    </span>
                    <span class="text-black-90">Buat Pengajuan</span>
                </a>
                <div class="alert-danger">
                    Anda sudah berstatus pensiun.
                </div>
            @else
                @if($usulanKenaikanGaji != null)
                    <a href="{{ route('gaji.create') }}"
                    class="btn btn-primary btn-icon-split btn-sm @if($usulanKenaikanGaji->status_proses == 'belum diproses') {{ 'disabled' }} @endif">
                        <span class="icon text-white">
                            <i class="far fa-plus-square"></i>
                        </span>
                        <span class="text-black-90">Buat Pengajuan</span>
                    </a>
                    @if($usulanKenaikanGaji->status_proses == 'proses ditolak')
                        <div class="alert-danger">
                            Usulan kenaikan gaji anda ditolak. Silahkan buat pengajuan lagi!
                        </div>
                    @endif
                @else
                    <a href="{{ route('gaji.create') }}"
                    class="btn btn-primary btn-icon-split btn-sm">
                        <span class="icon text-white">
                            <i class="far fa-plus-square"></i>
                        </span>
                        <span class="text-black-90">Buat Pengajuan</span>
                    </a>
                @endif
            @endif
            @if(Session::has('success'))
                <div class="alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif

            <br><br><br>

            <div class="card o-hidden border-0 shadow-none">
                <div class="card-header">
                    <h5 class="font-weight-normal">USULAN KENAIKAN GAJI</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th class="text-center font-weight-normal">NAMA</th>
                                    <th class="text-center font-weight-normal">NIP</th>
                                    <th class="text-center font-weight-normal">VERIFIKASI</th>
                                    <th class="text-center font-weight-normal">SK USULAN PEGAWAI</th>
                                    <th>&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @if($usulanKenaikanGaji != null)
                                        @if($usulanKenaikanGaji->status_verifikasi == 0)
                                            <td class="text-center font-weight-light">{{ pegawai()->nama }}</td>
                                            <td class="text-center font-weight-light">{{ pegawai()->nip }}</td>
                                            <td class="text-center font-weight-light alert-danger">{{ 'BELUM DIVERIFIKASI' }}</td>
                                            <td class="text-center font-weight-light">
                                                <a href="#" class="btn btn-success btn-icon-split btn-sm disabled">
                                                    <span class="icon text-white-12">
                                                        <i class="fas fa-file-download"></i>
                                                    </span>
                                                    <span class="text">Unduh File</span>
                                                </a>
                                            </td>
                                        @else
                                            <td class="text-center font-weight-light">{{ pegawai()->nama }}</td>
                                            <td class="text-center font-weight-light">{{ pegawai()->nip }}</td>
                                            <td class="text-center font-weight-light alert-success">{{ 'SUDAH DIVERIFIKASI' }}</td>
                                            <td class="text-center font-weight-light">
                                                <a href="{{ route('download.gaji.sk', $usulanKenaikanGaji->skUsulanPegawai->file_sk_usulan_kenaikan_gaji) }}" class="btn btn-success btn-icon-split btn-sm">
                                                    <span class="icon text-white-12">
                                                        <i class="fas fa-file-download"></i>
                                                    </span>
                                                    <span class="text">Unduh File</span>
                                                </a>
                                            </td>
                                        @endif
                                    @else
                                        <td class="text-center font-weight-light">{{ pegawai()->nama }}</td>
                                        <td class="text-center font-weight-light">{{ pegawai()->nip }}</td>
                                        <td class="text-center font-weight-light">{{ 'BELUM ADA PENGAJUAN' }}</td>
                                        <td class="text-center font-weight-light">
                                            <a href="#" class="btn btn-success btn-icon-split btn-sm disabled">
                                                    <span class="icon text-white-12">
                                                        <i class="fas fa-file-download"></i>
                                                    </span>
                                                <span class="text">Unduh File</span>
                                            </a>
                                        </td>
                                    @endif
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
