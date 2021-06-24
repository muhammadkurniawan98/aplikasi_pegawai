<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkUsulanKenaikanPangkat extends Model
{
    use HasFactory;

    protected $table = 'sk_usulan_kenaikan_pangkat';

    protected $fillable = [
        'file_sk_usulan_kenaikan_pangkat',
        'usulan_kenaikan_pangkat_id',
        'admin_id',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function usulanKenaikanPangkat()
    {
        return $this->belongsTo(UsulanKenaikanPangkat::class);
    }
}
