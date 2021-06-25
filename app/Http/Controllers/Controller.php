<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $golongan = [
        'I/a', 'I/b', 'I/c', 'I/d',
        'II/a', 'II/b', 'II/c', 'II/d',
        'III/a', 'III/b', 'III/c', 'III/d',
        'IIII/a', 'IIII/b', 'IIII/c', 'IIII/d',
    ];

    protected $jabatan = [
        'Kepala Tata Usaha',
        'Bendahara Gaji',
        'Bendahara Rutin',
        'Staf Tata Usaha',
        'Staf Administrasi',
        'Kebersihan',
        'Pustakawan',
        'Keamanan',
        'Petugas UKS',
        'Guru',
    ];

    protected $pangkat = [
        'Juru Muda', 'Juru Muda Tingkat I', 'Juru', 'Juru Tingkat I',
        'Pengatur Muda', 'Pengatur Muda Tingkat I', 'Pengatur', 'Pengatur Tingkat I',
        'Penata Muda', 'Penata Muda Tingkat I', 'Penata', 'Penata Tingkat I',
        'Pembina Muda', 'Pembina Muda Tingkat I', 'Pembina', 'Pembina Tingkat I'
    ];

    protected $status_kepegawaian = [
        'PNS',
        'Pensiun'
    ];

    protected $status_tunjangan = [
        'Menerima Tunjangan',
        'Tidak Menerima Tunjangan',
    ];

    protected function makeFileNameExt($filename, $nip = null)
    {
        date_default_timezone_set('Asia/Jakarta');

        if($nip != null){
            return $filename.'_'.$nip.'_'.date('Y_m_d_h_i_s').'.pdf';
        }

        return $filename.'_'.pegawai()->nip.'_'.date('Y_m_d_h_i_s').'.pdf';
    }

    protected function makeDir($dir, $nip = null)
    {
        date_default_timezone_set('Asia/Jakarta');

        if($nip != null){
            return public_path('uploads\\pdf\\'.$dir.'\\'.$nip.'\\');
        }

        return public_path('uploads\\pdf\\'.$dir.'\\'.pegawai()->nip.'\\');
    }

    protected function makeDownloadDir($dir, $nip)
    {
        date_default_timezone_set('Asia/Jakarta');

        return public_path('downloads\\pdf\\'.$dir.'\\'.$dir.'_'.$nip.'.zip');
    }


}
