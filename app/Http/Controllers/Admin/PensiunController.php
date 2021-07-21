<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SKUsulanPensiunRequest;
use App\Models\SkUsulanPensiun;
use App\Models\User;
use App\Models\UsulanPensiun;
use Illuminate\Support\Facades\File;

class PensiunController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $usulanPensiun = UsulanPensiun::where('status_verifikasi', 0)
            ->leftJoin('users', 'users.id', '=', 'usulan_pensiun.user_id')
            ->select(
                'usulan_pensiun.id',
                'file_sk_pns',
                'file_karis_karsu',
                'file_kartu_pegawai',
                'file_fotocopy_ktp',
                'file_fotocopy_kk',
                'file_akta_nikah',
                'file_dokumen_taspen',
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
            ->paginate(15);

        return view('admin.verifikasi-usulan.index.pensiun', ['usulanPensiun' => $usulanPensiun]);
    }

    public function sendSkUsulanPensiun(SKUsulanPensiunRequest $request, $id)
    {
        $usulanPensiun = UsulanPensiun::find($id);
        $user = User::find($usulanPensiun->user_id);

        $usulanPensiun->update([
            'status_verifikasi' => true,
        ]);

        $user->update([
            'status_kepegawaian' => $this->status_kepegawaian[1]
        ]);

        $fileDir = $this->makeDir('sk_usulan_pensiun', $user->nip);
        $file_sk_usulan_pensiun = $this->makeFileNameExt('file_sk_usulan_pensiun', $user->nip);

        $request->file('file_sk_usulan_pensiun')->move($fileDir, $file_sk_usulan_pensiun);

        $skUsulanPensiun = new SkUsulanPensiun();
        $skUsulanPensiun->file_sk_usulan_pensiun = $file_sk_usulan_pensiun;
        $skUsulanPensiun->admin_id = admin()->id;

        $usulanPensiun->skUsulanPegawai()->save($skUsulanPensiun);

        return redirect()->route('admin.pensiun.index');
    }

    public function tolakUsulanKenaikanGaji(PensiunRequest $request, $id){

    }

    public function showDetailUsulanPegawai($id){
        $usulanPensiun = UsulanPensiun::where('usulan_pensiun.id', $id)
            ->leftJoin('users', 'users.id', '=', 'usulan_pensiun.user_id')
            ->select(
                'usulan_pensiun.id',
                'file_sk_pns',
                'file_karis_karsu',
                'file_kartu_pegawai',
                'file_fotocopy_ktp',
                'file_fotocopy_kk',
                'file_akta_nikah',
                'file_dokumen_taspen',
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

        return view('admin.verifikasi-usulan.show.pensiun', ['usulanPensiun' => $usulanPensiun]);
    }

    public function download($nip)
    {
        $zip = new \ZipArchive();
        $filename = $this->makeDownloadDir('usulan_pensiun', $nip);

        if($zip->open($filename, \ZipArchive::CREATE|\ZipArchive::OVERWRITE)){
            $files = File::files(public_path('uploads\\pdf\\usulan_pensiun\\'.$nip));
            foreach ($files as $file){
                $zip->addFile($file, basename($file));
            }
            $zip->close();
        }
        return response()->download($filename);
    }
}
