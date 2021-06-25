<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkUsulanKenaikanGaji extends Model
{
    use HasFactory;

    protected $table = 'sk_usulan_kenaikan_gaji';

    protected $fillable = [
        'file_sk_usulan_kenaikan_gaji',
        'usulan_kenaikan_gaji_id',
        'admin_id',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function usulanKenaikanGaji()
    {
        return $this->belongsTo(UsulanKenaikanGaji::class);
    }
}
