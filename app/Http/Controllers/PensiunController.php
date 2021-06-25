<?php

namespace App\Http\Controllers;

use App\Http\Requests\PensiunRequest;
use App\Models\UsulanPensiun;
use Illuminate\Support\Facades\File;

class PensiunController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $usulanPensiun = pegawai()->usulanPensiun->sortByDesc('created_at')->first();

        return view('user.usulan.index.pensiun', ['usulanPensiun' => $usulanPensiun]);
    }

    public function showUsulanPensiunForm()
    {
        return view('user.usulan.create.pensiun');
    }

    public function sendUsulanPensiun(PensiunRequest $request)
    {
        $fileDir = $this->makeDir('usulan_pensiun');

        if(is_dir($fileDir)){
            File::deleteDirectory($fileDir);
        }

        $file_sk_pns = $this->makeFileNameExt('file_sk_pns');
        $file_karis_karsu = $this->makeFileNameExt('file_karis_karsu');
        $file_kartu_pegawai = $this->makeFileNameExt('file_kartu_pegawai');
        $file_fotocopy_ktp = $this->makeFileNameExt('file_fotocopy_ktp');
        $file_fotocopy_kk = $this->makeFileNameExt('file_fotocopy_kk');
        $file_akta_nikah = $this->makeFileNameExt('file_akta_nikah');
        $file_dokumen_taspen = $this->makeFileNameExt('file_dokumen_taspen');

        $request->file('file_sk_pns')->move($fileDir, $file_sk_pns);
        $request->file('file_karis_karsu')->move($fileDir, $file_karis_karsu);
        $request->file('file_kartu_pegawai')->move($fileDir, $file_kartu_pegawai);
        $request->file('file_fotocopy_ktp')->move($fileDir, $file_fotocopy_ktp);
        $request->file('file_fotocopy_kk')->move($fileDir, $file_fotocopy_kk);
        $request->file('file_akta_nikah')->move($fileDir, $file_akta_nikah);
        $request->file('file_dokumen_taspen')->move($fileDir, $file_dokumen_taspen);

        $usulanPensiun = new UsulanPensiun();

        $usulanPensiun->file_sk_pns = $file_sk_pns;
        $usulanPensiun->file_karis_karsu = $file_karis_karsu;
        $usulanPensiun->file_kartu_pegawai = $file_kartu_pegawai;
        $usulanPensiun->file_fotocopy_ktp = $file_fotocopy_ktp;
        $usulanPensiun->file_fotocopy_kk = $file_fotocopy_kk;
        $usulanPensiun->file_akta_nikah = $file_akta_nikah;
        $usulanPensiun->file_dokumen_taspen = $file_dokumen_taspen;

        pegawai()->usulanPensiun()->save($usulanPensiun);

        return redirect(route('pensiun.index'))
            ->with('success', 'File persyaratan pengajuan pensiun berhasil dikirim');
    }

    public function download($filename)
    {
        $fileDir = $this->makeDir('sk_usulan_pensiun');

        return response()->download($fileDir.$filename);
    }
}
