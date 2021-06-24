<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;

function pegawai()
{
    return Auth::user();
}

function admin()
{
    return Auth::guard('admin')->user();
}

function pegawaiTotal()
{
    return count(\App\Models\User::all());
}

function pegawaiPNS()
{
    return count(\App\Models\User::where('status_kepegawaian', 'PNS')->get());
}

function pegawaiPensiun()
{
    return count(\App\Models\User::where('status_kepegawaian', 'Pensiun')->get());
}


function profile_picture($filename = '')
{
    if($filename !== ''){
        return file_exists(public_path('uploads\\img\\accounts\\'.$filename.'.png'))?
            'uploads\\img\\accounts\\'.$filename.'.png'
            :'uploads\\img\\accounts\\user-default.png';
    }
    return file_exists(public_path('uploads\\img\\accounts\\'.pegawai()->nip.'.png'))?
        'uploads\\img\\accounts\\'.pegawai()->nip.'.png'
        :'uploads\\img\\accounts\\user-default.png';
}

function rasioStatusKepegawaian()
{
    $pegawai = User::all();

    $countPNS = 0;
    $countPensiun = 0;
    $countTotal = count($pegawai);

    if($countTotal == 0){
        return [0, 0];
    }

    foreach ($pegawai as $p){
        switch ($p->status_kepegawaian){

            case 'PNS':
                $countPNS++;
                break;
            case 'Pensiun':
                $countPensiun ++;
                break;
        }
    }

    return [(100*$countPNS)/$countTotal, (100*$countPensiun)/$countTotal];
}

function rasioStatusTunjangan()
{
    $pegawai = User::all();

    $countMenerima = 0;
    $countTidak = 0;
    $countTotal = count($pegawai);

    if($countTotal == 0){
        return [0, 0];
    }

    foreach ($pegawai as $p){
        switch ($p->status_tunjangan){
            case 'Menerima Tunjangan':
                $countMenerima ++;
                break;
            case 'Tidak Menerima Tunjangan':
                $countTidak++;
                break;
        }
    }
    return [(100*$countMenerima)/$countTotal, (100*$countTidak)/$countTotal];
}

function rekapitulasiKenaikanGaji()
{
    $tahun = date('Y');
    $dataJumlahUsulan = [];
    for($i = 0; $i < 6; $i++)
    {
        $usulan = \App\Models\UsulanKenaikanGaji::where('created_at', 'like', '%'.$tahun.'%')->get();
        array_push($dataJumlahUsulan, count($usulan));
        $tahun--;
    }
    return $dataJumlahUsulan;
}

function rekapitulasiKenaikanPangkat()
{
    $tahun = date('Y');
    $dataJumlahUsulan = [];
    for($i = 0; $i < 6; $i++)
    {
        $usulan = \App\Models\UsulanKenaikanPangkat::where('created_at', 'like', '%'.$tahun.'%')->get();
        array_push($dataJumlahUsulan, count($usulan));
        $tahun--;
    }
    return $dataJumlahUsulan;
}

function rekapitulasiPensiun()
{
    $tahun = date('Y');
    $dataJumlahUsulan = [];
    for($i = 0; $i < 6; $i++)
    {
        $usulan = \App\Models\UsulanPensiun::where('created_at', 'like', '%'.$tahun.'%')->get();
        array_push($dataJumlahUsulan, count($usulan));
        $tahun--;
    }
    return $dataJumlahUsulan;
}
