<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class RekapitulasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin.rekapitulasi');
    }
}
