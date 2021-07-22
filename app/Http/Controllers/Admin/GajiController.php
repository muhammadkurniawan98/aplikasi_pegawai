<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SKUsulanKenaikanGajiRequest;
use App\Models\SkUsulanKenaikanGaji;
use App\Models\User;
use App\Models\UsulanKenaikanGaji;
use Illuminate\Support\Facades\File;


class GajiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $usulanKenaikanGaji = UsulanKenaikanGaji::where('status_verifikasi', 0)
            ->where('status_proses', 'belum diproses')
            ->leftJoin('users', 'users.id', '=', 'usulan_kenaikan_gaji.user_id')
            ->select(
                'usulan_kenaikan_gaji.id',
                'file_pangkat_terakhir',
                'file_gaji_berkala',
                'file_dokumen_simpedu',
                'users.nama',
                'users.nip',
                'users.jabatan',
                'users.pangkat',
                'users.golongan',
                'users.status_kepegawaian',
                'users.status_tunjangan',
                'status_verifikasi'
            )
            ->paginate(15);

        return view('admin.verifikasi-usulan.index.kenaikan-gaji', ['usulanKenaikanGaji' => $usulanKenaikanGaji]);
    }

    public function sendSkUsulanKenaikanGaji(SKUsulanKenaikanGajiRequest $request, $id)
    {
        $usulanKenaikanGaji = UsulanKenaikanGaji::find($id);
        $user = User::find($usulanKenaikanGaji->user_id);

        $usulanKenaikanGaji->update([
            'status_verifikasi' => true,
            'status_proses' => 'proses diterima'
        ]);

        $fileDir = $this->makeDir('sk_usulan_kenaikan_gaji', $user->nip);
        $file_sk_usulan_kenaikan_gaji = $this->makeFileNameExt('file_sk_usulan_kenaikan_gaji', $user->nip);

        $request->file('file_sk_usulan_kenaikan_gaji')->move($fileDir, $file_sk_usulan_kenaikan_gaji);

        $skUsulanKenaikanGaji = new SkUsulanKenaikanGaji();
        $skUsulanKenaikanGaji->file_sk_usulan_kenaikan_gaji = $file_sk_usulan_kenaikan_gaji;
        $skUsulanKenaikanGaji->admin_id = admin()->id;

        $usulanKenaikanGaji->skUsulanPegawai()->save($skUsulanKenaikanGaji);

        return redirect()->route('admin.gaji.index');
    }

    public function tolakUsulanKenaikanGaji($id){
        $usulanKenaikanGaji = UsulanKenaikanGaji::find($id);
        $user = User::find($usulanKenaikanGaji->user_id);
        $fileDir = $this->makeDir('usulan_kenaikan_gaji', $user->nip);
        unlink($fileDir.$usulanKenaikanGaji->file_pangkat_terakhir);
        unlink($fileDir.$usulanKenaikanGaji->file_gaji_berkala);
        unlink($fileDir.$usulanKenaikanGaji->file_dokumen_simpedu);
        $usulanKenaikanGaji->update([
            'status_proses' => 'proses ditolak'
        ]);
        return redirect(route('admin.gaji.index'))->with('success', 'Usulan kenaikan gaji sudah ditolak');
    }

    public function showDetailUsulanPegawai($id)
    {
        $usulanKenaikanGaji = UsulanKenaikanGaji::where('usulan_kenaikan_gaji.id', $id)
            ->leftJoin('users', 'users.id', '=', 'usulan_kenaikan_gaji.user_id')
            ->select(
                'usulan_kenaikan_gaji.id',
                'file_pangkat_terakhir',
                'file_gaji_berkala',
                'file_dokumen_simpedu',
                'user_id',
                'users.nama',
                'users.nip',
                'users.jabatan',
                'users.pangkat',
                'users.golongan',
                'users.status_kepegawaian',
                'users.status_tunjangan',
                'status_verifikasi'
            )
            ->first();

        return view('admin.verifikasi-usulan.show.kenaikan-gaji', ['usulanKenaikanGaji' => $usulanKenaikanGaji]);
    }

    public function download($nip)
    {
        $zip = new \ZipArchive();
        $filename = $this->makeDownloadDir('usulan_kenaikan_gaji', $nip);;

        if($zip->open($filename, \ZipArchive::CREATE|\ZipArchive::OVERWRITE)){
            $files = File::files(public_path('uploads\\pdf\\usulan_kenaikan_gaji\\'.$nip));
            foreach ($files as $file){
                $zip->addFile($file, basename($file));
            }
            $zip->close();
        }
        return response()->download($filename);
    }
}
