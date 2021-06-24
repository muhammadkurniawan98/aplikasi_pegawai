<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::DASHBOARD;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('user.auth.register', [
            'jabatan' => $this->jabatan,
            'golongan' => $this->golongan,
            'pangkat' => $this->pangkat,
            'status_tunjangan' => $this->status_tunjangan,
            'status_kepegawaian' => $this->status_kepegawaian,
        ]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama' => ['required', 'string', 'max:255'],
            'jabatan' => ['required', 'string', 'max:255'],
            'golongan' => ['required', 'string', 'max:255'],
            'pangkat' => ['required', 'string', 'max:255'],
            'status_tunjangan' => ['required', 'string', 'max:255'],
            'status_kepegawaian' => ['required', 'string', 'max:255'],
            'nip' => ['required', 'numeric:1,50', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'nama' => $data['nama'],
            'jabatan' => $data['jabatan'],
            'golongan' => $data['golongan'],
            'pangkat' => $data['pangkat'],
            'status_tunjangan' => $data['status_tunjangan'],
            'status_kepegawaian' => $data['status_kepegawaian'],
            'nip' => $data['nip'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
