<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsulanKenaikanPangkat extends Model
{
    use HasFactory;

    protected $table = 'usulan_kenaikan_pangkat';

    protected $fillable = [
        'file_pengantar',
        'file_pns',
        'file_pangkat_terakhir',
        'file_jabatan_fungsional',
        'file_sertifikat_pendidikan',
        'file_kartu_pegawai',
        'status_verifikasi',
        'user_id',
    ];

    public function pegawai()
    {
        return $this->belongsTo(User::class);
    }

    public function skUsulanPegawai()
    {
        return $this->hasOne(SkUsulanKenaikanPangkat::class);
    }
}
