<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UsulanKenaikanGaji;
use App\Models\UsulanKenaikanPangkat;
use App\Models\UsulanPensiun;
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
        $tahun = empty(trim($request->tahun))? date('Y'):$request->tahun;
        $laporanUsulanKenaikanGaji = UsulanKenaikanGaji::where('usulan_kenaikan_gaji.created_at', 'like', '%'.$tahun.'%')
                                    ->leftJoin('users', 'users.id', '=', 'usulan_kenaikan_gaji.user_id')
                                    ->select(
                                        'users.nama',
                                        'users.nip',
                                        'usulan_kenaikan_gaji.status_verifikasi',
                                        'usulan_kenaikan_gaji.created_at',
                                    )
                                    ->get();
        dd($laporanUsulanKenaikanGaji);
    }

    public function downloadLaporanUsulanKenaikanPangkat(Request $request)
    {
        $tahun = empty(trim($request->tahun))? date('Y'):$request->tahun;
        $laporanUsulanKenaikanPangkat = UsulanKenaikanPangkat::where('usulan_kenaikan_pangkat.created_at', 'like', '%'.$tahun.'%')
                                        ->leftJoin('users', 'users.id', '=', 'usulan_kenaikan_pangkat.user_id')
                                        ->select(
                                            'users.nama',
                                            'users.nip',
                                            'usulan_kenaikan_pangkat.status_verifikasi',
                                            'usulan_kenaikan_pangkat.created_at',
                                        )
                                        ->get();
    }

    public function downloadLaporanUsulanPensiun(Request $request)
    {
        $tahun = empty(trim($request->tahun))? date('Y'):$request->tahun;
        $laporanUsulanPensiun = UsulanPensiun::where('usulan_pensiun.created_at', 'like', '%'.$tahun.'%')
            ->leftJoin('users', 'users.id', '=', 'usulan_pensiun.user_id')
            ->select(
                'users.nama',
                'users.nip',
                'usulan_pensiun.status_verifikasi',
                'usulan_pensiun.created_at',
            )
            ->get();
    }
}
