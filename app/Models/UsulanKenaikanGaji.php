<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsulanKenaikanGaji extends Model
{
    use HasFactory;

    protected $table = 'usulan_kenaikan_gaji';

    protected $fillable = [
        'file_pangkat_terakhir',
        'file_gaji_berkala',
        'file_dokumen_simpedu',
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
        return $this->hasOne(SkUsulanKenaikanGaji::class);
    }
}
