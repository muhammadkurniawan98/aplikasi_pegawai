@extends('admin.layouts.app')
@section('admin-pangkat', 'active')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card o-hidden border-0 shadow-none">
                    <div class="card-header">
                        <h5 class="font-weight-normal">DETAIL USULAN KENAIKAN PANGKAT</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card o-hidden border-0 shadow-none">
                                    <div class="card-header d-flex justify-content-center">
                                        <img src="{{ asset(profile_picture($usulanKenaikanPangkat->nip)) }}" width="79%">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card o-hidden border-0 shadow-none">
                                    <div class="card-header">
                                        <h6 class="card-title font-weight-normal">{{ ('Detail Informasi Pegawai') }}</h6>
                                    </div>
                                    <div class="card-body">
                                        <dl class="row">
                                            <dd class="col-sm-5 font-weight-normal">Nama</dd>
                                            <dd class="col-sm-7 font-weight-light">{{ $usulanKenaikanPangkat->nama }}</dd>

                                            <dd class="col-sm-5 font-weight-normal">Jabatan</dd>
                                            <dd class="col-sm-7 font-weight-light">{{ $usulanKenaikanPangkat->jabatan }}</dd>

                                            <dd class="col-sm-5 font-weight-normal">Pangkat</dd>
                                            <dd class="col-sm-7 font-weight-light">{{ $usulanKenaikanPangkat->pangkat }}</dd>

                                            <dd class="col-sm-5 font-weight-normal">Golongan</dd>
                                            <dd class="col-sm-7 font-weight-light">{{ $usulanKenaikanPangkat->golongan }}</dd>

                                            <dd class="col-sm-5 font-weight-normal">Status Kepegawaian</dd>
                                            <dd class="col-sm-7 font-weight-light">{{ $usulanKenaikanPangkat->status_kepegawaian }}</dd>

                                            <dd class="col-sm-5 font-weight-normal">Status Tunjangan</dd>
                                            <dd class="col-sm-7 font-weight-light">{{ $usulanKenaikanPangkat->status_tunjangan }}</dd>

                                            <dd class="col-sm-5 font-weight-normal">NIP</dd>
                                            <dd class="col-sm-7 font-weight-light">{{ $usulanKenaikanPangkat->nip }}</dd>
                                        </dl>
                                        <a href="{{ route('admin.pangkat.download', $usulanKenaikanPangkat->nip) }}"
                                           class="btn btn-primary btn-icon-split btn-sm">
                                            <span class="icon text-black-90">
                                                <i class="fas fa-file-download"></i>
                                            </span>
                                            <span class="text-black-90">Download File Persyaratan</span>
                                        </a>
                                        <a href="#"
                                           class="btn btn-success btn-icon-split btn-sm"
                                           data-toggle="modal" data-target="#usulanKenaikanPangkat">
                                            <span class="icon text-black-90">
                                                <i class="fas fa-check"></i>
                                            </span>
                                            <span class="text-black-90">Verifikasi</span>
                                        </a>
                                        @include('admin.layouts.includes.verifikasi-usulan_kenaikan_pangkat')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
