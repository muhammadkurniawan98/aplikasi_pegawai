<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhotoRequest;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('user.dashboard');
    }

    public function savePhoto(PhotoRequest $request)
    {
        $fileDir = public_path('uploads\\img\\accounts');
        $fileName = pegawai()->nip.'.png';

        if (file_exists($fileDir.$fileName)){
            unlink($fileDir.$fileName);
        }

        $request->file('photo')->move($fileDir, $fileName);

        return redirect()->route('dashboard');
    }
}
