@extends('user.layouts.app')
@section('dashboard', 'active')
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card o-hidden border-0 shadow-none">
                <div class="card-header">
                    <h5 class="font-weight-normal">DASHBOARD</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card o-hidden border-0 shadow-none">
                                <div class="card-header d-flex justify-content-center">
                                    <img src="{{ asset(profile_picture()) }}" width="79%">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card o-hidden border-0 shadow-none">
                                <div class="card-header">
                                    <h6 class="card-title font-weight-normal">{{ ('PROFIL PEGAWAI') }}</h6>
                                </div>
                                <div class="card-body">
                                    <dl class="row">
                                        <dd class="col-sm-5 font-weight-normal">Nama</dd>
                                        <dd class="col-sm-7 font-weight-light">{{ pegawai()->nama }}</dd>

                                        <dd class="col-sm-5 font-weight-normal">Jabatan</dd>
                                        <dd class="col-sm-7 font-weight-light">{{ pegawai()->jabatan }}</dd>

                                        <dd class="col-sm-5 font-weight-normal">Pangkat</dd>
                                        <dd class="col-sm-7 font-weight-light">{{ pegawai()->pangkat }}</dd>

                                        <dd class="col-sm-5 font-weight-normal">Golongan</dd>
                                        <dd class="col-sm-7 font-weight-light">{{ pegawai()->golongan }}</dd>

                                        <dd class="col-sm-5 font-weight-normal">Status Kepegawaian</dd>
                                        <dd class="col-sm-7 font-weight-light">{{ pegawai()->status_kepegawaian }}</dd>

                                        <dd class="col-sm-5 font-weight-normal">Status Tunjangan</dd>
                                        <dd class="col-sm-7 font-weight-light">{{ pegawai()->status_tunjangan }}</dd>

                                        <dd class="col-sm-5 font-weight-normal">NIP</dd>
                                        <dd class="col-sm-7 font-weight-light">{{ pegawai()->nip }}</dd>
                                    </dl>
                                    <a href="#"
                                       class="btn btn-secondary btn-icon-split btn-sm"
                                       data-toggle="modal" data-target="#changeProfilePicture">
                                        <span class="icon text-black-90">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                        <span class="text-black-90">Edit Foto Profil</span>
                                    </a>
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
