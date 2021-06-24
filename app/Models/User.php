<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'jabatan',
        'pangkat',
        'golongan',
        'status_tunjangan',
        'status_kepegawaian',
        'nip',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
//    protected $casts = [
//        'email_verified_at' => 'datetime',
//    ];
    public function usulanKenaikanGaji()
    {
        return $this->hasMany(UsulanKenaikanGaji::class);
    }

    public function usulanKenaikanPangkat()
    {
        return $this->hasMany(UsulanKenaikanPangkat::class);
    }

    public function usulanPensiun()
    {
        return $this->hasMany(UsulanPensiun::class);
    }

}
