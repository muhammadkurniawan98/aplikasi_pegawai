@extends('admin.layouts.app')
@section('admin-pensiun', 'active')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card o-hidden border-0 shadow-none">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-5">
                                <h6 class="font-weight-normal">DAFTAR USULAN PENSIUN PEGAWAI</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th class="text-center font-weight-normal">NAMA</th>
                                <th class="text-center font-weight-normal">NIP</th>
                                <th class="text-center font-weight-normal">VERIFIKASI</th>
                                <th class="text-center font-weight-normal">SK USULAN PEGAWAI</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($usulanPensiun as $u)
                                <tr>
                                    <td class="text-center font-weight-light">{{ $u->nama }}</td>
                                    <td class="text-center font-weight-light">{{ $u->nip }}</td>
                                    <td class="text-center font-weight-light @if($u->status_verifikasi == 0) {{'alert-danger'}} @endif">{{ $u->status_verifikasi == 0? 'Belum diverifikasi':'' }}</td>
                                    <td class="text-center font-weight-light">
                                        <a class="btn btn-danger btn-icon-split btn-sm" href="{{ route('admin.pensiun.show', $u->id) }}">
                                            <span class="icon text-white-12">
                                                <i class="fas fa-info"></i>
                                            </span>
                                            <span class="text font-weight-light">Lihat Detail</span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
