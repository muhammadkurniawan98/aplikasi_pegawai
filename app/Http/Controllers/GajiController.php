<?php

namespace App\Http\Controllers;

use App\Http\Requests\GajiRequest;;
use App\Models\UsulanKenaikanGaji;
use Illuminate\Support\Facades\File;

class GajiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $usulanKenaikanGaji = pegawai()->usulanKenaikanGaji->sortByDesc('created_at')->first();

        return view('user.usulan.index.kenaikan-gaji', ['usulanKenaikanGaji' => $usulanKenaikanGaji]);
    }

    public function showUsulanKenaikanGajiForm()
    {
        return view('user.usulan.create.kenaikan-gaji');
    }

    public function sendUsulanKenaikanGaji(GajiRequest $request)
    {
        $fileDir = $this->makeDir('usulan_kenaikan_gaji');

        if(is_dir($fileDir)){
            File::deleteDirectory($fileDir);
        }

        $file_pangkat_terakhir = $this->makeFileNameExt('file_pangkat_terakhir');
        $file_gaji_berkala = $this->makeFileNameExt('file_gaji_berkala');
        $file_dokumen_simpedu = $this->makeFileNameExt('file_dokumen_simpedu');

        $request->file('file_pangkat_terakhir')->move($fileDir, $file_pangkat_terakhir);
        $request->file('file_gaji_berkala')->move($fileDir, $file_gaji_berkala);
        $request->file('file_dokumen_simpedu')->move($fileDir, $file_dokumen_simpedu);

        $usulanKenaikanGaji = new UsulanKenaikanGaji();

        $usulanKenaikanGaji->file_pangkat_terakhir = $file_pangkat_terakhir;
        $usulanKenaikanGaji->file_gaji_berkala = $file_gaji_berkala;
        $usulanKenaikanGaji->file_dokumen_simpedu = $file_dokumen_simpedu;

        pegawai()->usulanKenaikanGaji()->save($usulanKenaikanGaji);

        return redirect(route('gaji.index'))
            ->with('success', 'File persyaratan pengajuan kenaikan gaji berhasil dikirim');
    }

    public function download($filename)
    {
        $fileDir = $this->makeDir('sk_usulan_kenaikan_gaji');

        return response()->download($fileDir.$filename);
    }
}
