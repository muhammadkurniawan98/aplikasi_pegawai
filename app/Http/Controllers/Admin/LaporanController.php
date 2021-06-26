<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UsulanKenaikanGaji;
use App\Models\UsulanKenaikanPangkat;
use App\Models\UsulanPensiun;
use PDF;


class LaporanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function downloadLaporanUsulanKenaikanGaji($tahun)
    {
        $tahun = empty(trim($tahun))? date('Y'):$tahun;

        $laporanUsulanKenaikanGaji = UsulanKenaikanGaji::where('usulan_kenaikan_gaji.created_at', 'like', '%'.$tahun.'%')
                                    ->leftJoin('users', 'users.id', '=', 'usulan_kenaikan_gaji.user_id')
                                    ->select(
                                        'users.nama',
                                        'users.nip',
                                        'usulan_kenaikan_gaji.status_verifikasi',
                                        'usulan_kenaikan_gaji.created_at',
                                    )
                                    ->get();

        $data = [
            'laporanUsulanKenaikanGaji' => $laporanUsulanKenaikanGaji,
            'tahun' => $tahun
        ];

        $pdf = PDF::loadView('admin.laporan-pdf', $data);

        set_time_limit(300);

        return $pdf->download('document.pdf');
    }

    public function downloadLaporanUsulanKenaikanPangkat($tahun)
    {
        $tahun = empty(trim($tahun))? date('Y'):$tahun;
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

    public function downloadLaporanUsulanPensiun($tahun)
    {
        $tahun = empty(trim($tahun))? date('Y'):$tahun;
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
