<?php

namespace App\Http\Controllers;

use App\Http\Requests\PangkatRequest;
use App\Models\UsulanKenaikanPangkat;
use Illuminate\Support\Facades\File;

class PangkatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $usulanKenaikanPangkat = pegawai()->usulanKenaikanPangkat->sortByDesc('created_at')->first();

        return view('user.usulan.index.kenaikan-pangkat', ['usulanKenaikanPangkat' => $usulanKenaikanPangkat]);
    }

    public function showUsulanKenaikanPangkatForm()
    {
        return view('user.usulan.create.kenaikan-pangkat');
    }

    public function sendUsulanKenaikanPangkat(PangkatRequest $request)
    {
        $fileDir = $this->makeDir('usulan_kenaikan_pangkat');

        if(is_dir($fileDir)){
            File::deleteDirectory($fileDir);
        }

        $file_pengantar = $this->makeFileNameExt('file_pengantar');
        $file_pns = $this->makeFileNameExt('file_pns');
        $file_pangkat_terakhir = $this->makeFileNameExt('file_pangkat_terakhir');
        $file_jabatan_fungsional = $this->makeFileNameExt('file_jabatan_fungsional');
        $file_sertifikat_pendidikan = $this->makeFileNameExt('file_sertifikat_pendidikan');
        $file_kartu_pegawai = $this->makeFileNameExt('file_kartu_pegawai');

        $request->file('file_pengantar')->move($fileDir, $file_pengantar);
        $request->file('file_pns')->move($fileDir, $file_pns);
        $request->file('file_pangkat_terakhir')->move($fileDir, $file_pangkat_terakhir);
        $request->file('file_jabatan_fungsional')->move($fileDir, $file_jabatan_fungsional);
        $request->file('file_sertifikat_pendidikan')->move($fileDir, $file_sertifikat_pendidikan);
        $request->file('file_kartu_pegawai')->move($fileDir, $file_kartu_pegawai);

        $usulanKenaikanPangkat = new UsulanKenaikanPangkat();

        $usulanKenaikanPangkat->file_pengantar = $file_pengantar;
        $usulanKenaikanPangkat->file_pns = $file_pns;
        $usulanKenaikanPangkat->file_pangkat_terakhir = $file_pangkat_terakhir;
        $usulanKenaikanPangkat->file_jabatan_fungsional = $file_jabatan_fungsional;
        $usulanKenaikanPangkat->file_sertifikat_pendidikan = $file_sertifikat_pendidikan;
        $usulanKenaikanPangkat->file_kartu_pegawai = $file_kartu_pegawai;

        pegawai()->usulanKenaikanGaji()->save($usulanKenaikanPangkat);

        return redirect(route('pangkat.index'))
            ->with('success', 'File persyaratan pengajuan kenaikan pangkat berhasil dikirim');
    }

    public function download($filename)
    {
        $fileDir = $this->makeDir('sk_usulan_kenaikan_pangkat');

        return response()->download($fileDir.$filename);
    }
}
