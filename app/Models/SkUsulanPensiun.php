<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkUsulanPensiun extends Model
{
    use HasFactory;

    protected $table = 'sk_usulan_pensiun';

    protected $fillable = [
        'file_sk_usulan_pensiun',
        'usulan_pensiun_id',
        'admin_id',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function usulanPensiun()
    {
        return $this->belongsTo(UsulanPensiun::class);
    }
}
