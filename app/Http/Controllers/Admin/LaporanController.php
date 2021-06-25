<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\PDF;

class LaporanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function downloadLaporanUsulanKenaikanGaji($tahun)
    {

    }

    public function downloadLaporanUsulanKenaikanPangkat($tahun)
    {

    }

    public function downloadLaporanUsulanPensiun($tahun)
    {

    }
}
