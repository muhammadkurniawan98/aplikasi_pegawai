@extends('user.auth.layouts.app')

@section('content')

    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card o-hidden border-0 shadow-none my-5">
                    <div class="card-body border-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-md-6 d-flex align-items-center">
                                <div class="card border-0">
                                    <div class="card-header border-0 d-flex justify-content-center">
                                        <img src="{{ asset('img/logo.png') }}" width="45%">
                                    </div>
                                    <div class="card-body border-0 text-center">
                                        <h5 class="card-title" style="color: black">SMA NEGERI 1 SEPUTIH BANYAK</h5>
                                        <p class="card-text" style="color: black">Jl. Raya Sri Basuki No. 01 Seputih Banyak 34156 <br> Telp. (0725) 7623325</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">{{('Register Pegawai')}}</h1>
                                    </div>

                                    <form class="user" action="{{ route('register') }}" method="post">
                                        @csrf

                                        <div class="form-group">
                                            <input type="text"
                                                   class="form-control form-control-user @error('nama') is-invalid @enderror"
                                                   name="nama" placeholder="{{('Nama')}}" value="{{ old('nama') }}">
                                            @error('nama')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input type="text"
                                                   class="form-control form-control-user @error('nip') is-invalid @enderror"
                                                   name="nip" placeholder="{{('NIP')}}" value="{{ old('nip') }}">
                                            @error('nip')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="row justify-content-md-between">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select name="jabatan" class="form-control @error('jabatan') is-invalid @enderror" required>
                                                                <option disabled selected hidden>Jabatan</option>

                                                                @foreach($jabatan as $j)
                                                                    <option>{{ $j }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('jabatan')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select name="pangkat" class="form-control @error('pangkat') is-invalid @enderror" required>
                                                                <option disabled selected hidden>Pangkat</option>

                                                                @foreach($pangkat as $p)
                                                                    <option>{{ $p }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('pangkat')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row justify-content-md-between">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select name="golongan" class="form-control @error('golongan') is-invalid @enderror" required>
                                                                <option disabled selected hidden>Golongan</option>

                                                                @foreach($golongan as $g)
                                                                    <option>{{ $g }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('golongan')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select name="status_kepegawaian" class="form-control @error('status_kepegawaian') is-invalid @enderror" required>
                                                                <option disabled selected hidden>Status Pegawai</option>

                                                                @foreach($status_kepegawaian as $sk)
                                                                    <option>{{ $sk }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('status_kepegawaian')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row justify-content-md-between">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select name="status_tunjangan" class="form-control @error('status_tunjangan') is-invalid @enderror" required>
                                                                <option disabled selected hidden>Status Tunjangan</option>

                                                                @foreach($status_tunjangan as $st)
                                                                    <option>{{ $st }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('status_tunjangan')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror"
                                                   name="email" value="{{ old('email') }}" placeholder="E-mail" required autocomplete="email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input name="password" type="password"
                                                   class="form-control form-control-user @error('password') is-invalid @enderror"
                                                   placeholder="{{('Password')}}" value="{{ old('password') }}">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            {{('Register')}}
                                        </button>

                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('login') }}">{{('Sudah punya akun?')}}</a>
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



