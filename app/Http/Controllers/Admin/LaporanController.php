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

        $laporan = UsulanKenaikanGaji::where('usulan_kenaikan_gaji.created_at', 'like', '%'.$tahun.'%')
                                    ->where('usulan_kenaikan_gaji.status_proses', 'belum diproses')
                                    ->leftJoin('users', 'users.id', '=', 'usulan_kenaikan_gaji.user_id')
                                    ->select(
                                        'users.nama',
                                        'users.nip',
                                        'usulan_kenaikan_gaji.status_verifikasi',
                                        'usulan_kenaikan_gaji.created_at',
                                    )
                                    ->get();

        $data = [
            'judul' => 'DATA USULAN KENAIKAN GAJI PEGAWAI SMA NEGERI 1 SEPUTIH BANYAK TAHUN '.$tahun,
            'laporan' => $laporan,
            'tahun' => $tahun
        ];

        $pdf = PDF::loadView('admin.laporan-pdf', $data);

        return $pdf->download('laporan_usulan_kenaikan_gaji_pegawai_tahun_'.$tahun.'_.pdf');
    }

    public function downloadLaporanUsulanKenaikanPangkat($tahun)
    {
        $tahun = empty(trim($tahun))? date('Y'):$tahun;
        $laporan = UsulanKenaikanPangkat::where('usulan_kenaikan_pangkat.created_at', 'like', '%'.$tahun.'%')
                                        ->where('usulan_kenaikan_pangkat.status_proses', 'belum diproses')
                                        ->leftJoin('users', 'users.id', '=', 'usulan_kenaikan_pangkat.user_id')
                                        ->select(
                                            'users.nama',
                                            'users.nip',
                                            'usulan_kenaikan_pangkat.status_verifikasi',
                                            'usulan_kenaikan_pangkat.created_at',
                                        )
                                        ->get();

        $data = [
            'judul' => 'DATA USULAN KENAIKAN PANGKAT PEGAWAI SMA NEGERI 1 SEPUTIH BANYAK TAHUN '.$tahun,
            'laporan' => $laporan,
            'tahun' => $tahun
        ];

        $pdf = PDF::loadView('admin.laporan-pdf', $data);

        return $pdf->download('laporan_usulan_kenaikan_pangkat_pegawai_tahun_'.$tahun.'_.pdf');
    }

    public function downloadLaporanUsulanPensiun($tahun)
    {
        $tahun = empty(trim($tahun))? date('Y'):$tahun;
        $laporan = UsulanPensiun::where('usulan_pensiun.created_at', 'like', '%'.$tahun.'%')
                                ->where('usulan_pensiun.status_proses', 'belum diproses')
                                ->leftJoin('users', 'users.id', '=', 'usulan_pensiun.user_id')
                                ->select(
                                    'users.nama',
                                    'users.nip',
                                    'usulan_pensiun.status_verifikasi',
                                    'usulan_pensiun.created_at',
                                )
                                ->get();

        $data = [
            'judul' => 'DATA USULAN PENSIUN PEGAWAI SMA NEGERI 1 SEPUTIH BANYAK TAHUN '.$tahun,
            'laporan' => $laporan,
            'tahun' => $tahun
        ];

        $pdf = PDF::loadView('admin.laporan-pdf', $data);

        return $pdf->download('laporan_usulan_pensiun_pegawai_tahun_'.$tahun.'_.pdf');
    }
}
