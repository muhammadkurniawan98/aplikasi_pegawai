@extends('user.layouts.app')
@section('pangkat', 'active')
@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">

                @if($usulanKenaikanPangkat != null)
                    <a href="{{ route('pangkat.create') }}"
                       class="btn btn-primary btn-icon-split btn-sm @if($usulanKenaikanPangkat->status_verifikasi == 0) {{ 'disabled' }} @endif">
                    <span class="icon text-white">
                        <i class="far fa-plus-square"></i>
                    </span>
                        <span class="text-black-90">Buat Pengajuan</span>
                    </a>
                @else
                    <a href="{{ route('pangkat.create') }}"
                       class="btn btn-primary btn-icon-split btn-sm">
                    <span class="icon text-white">
                        <i class="far fa-plus-square"></i>
                    </span>
                        <span class="text-black-90">Buat Pengajuan</span>
                    </a>
                @endif

                @if(Session::has('success'))
                    <div class="alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <br><br><br>

                <div class="card o-hidden border-0 shadow-none">
                    <div class="card-header">
                        <h5 class="font-weight-normal">USULAN KENAIKAN PANGKAT</h5>
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
                                        @if($usulanKenaikanPangkat != null)
                                            @if($usulanKenaikanPangkat->status_verifikasi == 0)
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
                                                    <a href="{{ route('download.pangkat.sk', $usulanKenaikanPangkat->skUsulanPegawai->file_sk_usulan_kenaikan_pangkat) }}" class="btn btn-success btn-icon-split btn-sm">
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
