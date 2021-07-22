<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SKUsulanKenaikanPangkatRequest;
use App\Models\SkUsulanKenaikanPangkat;
use App\Models\User;
use App\Models\UsulanKenaikanPangkat;
use Illuminate\Support\Facades\File;

class PangkatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $usulanKenaikanPangkat = UsulanKenaikanPangkat::where('status_verifikasi', 0)
            ->where('status_proses', 'belum diproses')
            ->leftJoin('users', 'users.id', '=', 'usulan_kenaikan_pangkat.user_id')
            ->select(
                'usulan_kenaikan_pangkat.id',
                'file_pengantar',
                'file_pns',
                'file_pangkat_terakhir',
                'file_jabatan_fungsional',
                'file_sertifikat_pendidikan',
                'file_kartu_pegawai',
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

        return view('admin.verifikasi-usulan.index.kenaikan-pangkat', ['usulanKenaikanPangkat' => $usulanKenaikanPangkat]);
    }

    public function sendSkUsulanKenaikanPangkat(SKUsulanKenaikanPangkatRequest $request, $id)
    {
        $usulanKenaikanPangkat = UsulanKenaikanPangkat::find($id);
        $user = User::find($usulanKenaikanPangkat->user_id);

        $usulanKenaikanPangkat->update([
            'status_verifikasi' => true,
            'status_proses' => 'proses diterima'
        ]);

        $pangkat = array_search($user->pangkat, $this->pangkat);

        if ($pangkat < 15){
            $user->update([
                'pangkat' => $this->pangkat[$pangkat + 1],
                'golongan' => $this->golongan[$pangkat + 1]
            ]);
        }

        $fileDir = $this->makeDir('sk_usulan_kenaikan_pangkat', $user->nip);
        $file_sk_usulan_kenaikan_pangkat = $this->makeFileNameExt('file_sk_usulan_kenaikan_pangkat', $user->nip);

        $request->file('file_sk_usulan_kenaikan_pangkat')->move($fileDir, $file_sk_usulan_kenaikan_pangkat);

        $skUsulanKenaikanPangkat = new SkUsulanKenaikanPangkat();
        $skUsulanKenaikanPangkat->file_sk_usulan_kenaikan_pangkat = $file_sk_usulan_kenaikan_pangkat;
        $skUsulanKenaikanPangkat->admin_id = admin()->id;

        $usulanKenaikanPangkat->skUsulanPegawai()->save($skUsulanKenaikanPangkat);

        return redirect()->route('admin.pangkat.index');
    }

    public function tolakUsulanKenaikanPangkat($id){
        $usulanKenaikanPangkat = UsulanKenaikanPangkat::find($id);
        $user = User::find($usulanKenaikanPangkat->user_id);
        $fileDir = $this->makeDir('usulan_kenaikan_pangkat', $user->nip);
        unlink($fileDir.$usulanKenaikanPangkat->file_pengantar);
        unlink($fileDir.$usulanKenaikanPangkat->file_pns);
        unlink($fileDir.$usulanKenaikanPangkat->file_pangkat_terakhir);
        unlink($fileDir.$usulanKenaikanPangkat->file_jabatan_fungsional);
        unlink($fileDir.$usulanKenaikanPangkat->file_sertifikat_pendidikan);
        unlink($fileDir.$usulanKenaikanPangkat->file_kartu_pegawai);
        $usulanKenaikanPangkat->update([
            'status_proses' => 'proses ditolak'
        ]);
        return redirect(route('admin.pensiun.index'))->with('success', 'Usulan kenaikan pangkat sudah ditolak');
    }

    public function showDetailUsulanPegawai($id){
        $usulanKenaikanPangkat = UsulanKenaikanPangkat::where('usulan_kenaikan_pangkat.id', $id)
            ->leftJoin('users', 'users.id', '=', 'usulan_kenaikan_pangkat.user_id')
            ->select(
                'usulan_kenaikan_pangkat.id',
                'file_pengantar',
                'file_pns',
                'file_pangkat_terakhir',
                'file_jabatan_fungsional',
                'file_sertifikat_pendidikan',
                'file_kartu_pegawai',
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

        return view('admin.verifikasi-usulan.show.kenaikan-pangkat', ['usulanKenaikanPangkat' => $usulanKenaikanPangkat]);
    }

    public function download($nip)
    {
        $zip = new \ZipArchive();
        $filename = $this->makeDownloadDir('usulan_kenaikan_pangkat', $nip);;

        if($zip->open($filename, \ZipArchive::CREATE|\ZipArchive::OVERWRITE)){
            $files = File::files(public_path('uploads\\pdf\\usulan_kenaikan_pangkat\\'.$nip));
            foreach ($files as $file){
                $zip->addFile($file, basename($file));
            }
            $zip->close();
        }
        return response()->download($filename);
    }
}
