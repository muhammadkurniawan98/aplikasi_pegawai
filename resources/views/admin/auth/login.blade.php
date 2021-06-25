@extends('admin.auth.layouts.app')

@section('content')

<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card o-hidden border-0 shadow-none my-5">
                <div class="card-body border-0 p-0">
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
                                    <h1 class="h4 text-gray-900 mb-4">{{('Login Administrator')}}</h1>
                                </div>

                                <form class="user" action="{{ route('admin.login') }}" method="post">
                                    @csrf

                                    <div class="form-group">
                                        <input type="text"
                                               class="form-control form-control-user @error('email') is-invalid @enderror"
                                               name="email" placeholder="{{('E-mail')}}" value="{{ old('email') }}">
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
                                        <div class="custom-control custom-checkbox small">
                                            <input name="remember" type="checkbox" id="customCheck"
                                                   class="custom-control-input">

                                            <label class="custom-control-label" for="customCheck">
                                                {{('Ingat saya')}}
                                            </label>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        {{('Login')}}
                                    </button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



