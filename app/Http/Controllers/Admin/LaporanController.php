<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function downloadLaporanUsulanKenaikanGaji(Request $request)
    {

    }

    public function downloadLaporanUsulanKenaikanPangkat(Request $request)
    {

    }

    public function downloadLaporanUsulanPensiun(Request $request)
    {

    }
}
