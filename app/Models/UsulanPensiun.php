<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsulanPensiun extends Model
{
    use HasFactory;

    protected $table = 'usulan_pensiun';

    protected $fillable = [
        'file_sk_pns',
        'file_karis_karsu',
        'file_kartu_pegawai',
        'file_fotocopy_ktp',
        'file_fotocopy_kk',
        'file_akta_nikah',
        'file_dokumen_taspen',
        'status_verifikasi',
        'status_proses',
        'user_id',
    ];

    public function pegawai()
    {
        return $this->belongsTo(User::class);
    }

    public function skUsulanPegawai()
    {
        return $this->hasOne(SkUsulanPensiun::class);
    }
}
