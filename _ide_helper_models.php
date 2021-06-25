<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Admin
 *
 * @property int $id
 * @property string $nama
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\SkUsulanKenaikanGaji|null $sk_usulan_kenaikan_gaji
 * @property-read \App\Models\SkUsulanKenaikanPangkat|null $sk_usulan_kenaikan_pangkat
 * @property-read \App\Models\SkUsulanPensiun|null $sk_usulan_pensiun
 * @method static \Database\Factories\AdminFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin query()
 */
	class Admin extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SkUsulanKenaikanGaji
 *
 * @property int $id
 * @property string $file_sk_usulan_kenaikan_gaji
 * @property int $usulan_kenaikan_gaji_id
 * @property int $admin_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\SkUsulanKenaikanGajiFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|SkUsulanKenaikanGaji newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SkUsulanKenaikanGaji newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SkUsulanKenaikanGaji query()
 */
	class SkUsulanKenaikanGaji extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SkUsulanKenaikanPangkat
 *
 * @property int $id
 * @property string $file_sk_usulan_kenaikan_pangkat
 * @property int $usulan_kenaikan_pangkat_id
 * @property int $admin_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\SkUsulanKenaikanPangkatFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|SkUsulanKenaikanPangkat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SkUsulanKenaikanPangkat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SkUsulanKenaikanPangkat query()
 */
	class SkUsulanKenaikanPangkat extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SkUsulanPensiun
 *
 * @property int $id
 * @property string $file_sk_usulan_pensiun
 * @property int $usulan_pensiun_id
 * @property int $admin_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\SkUsulanPensiunFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|SkUsulanPensiun newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SkUsulanPensiun newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SkUsulanPensiun query()
 */
	class SkUsulanPensiun extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $nama
 * @property string $jabatan
 * @property string $pangkat
 * @property string $golongan
 * @property string $status_tunjangan
 * @property string $status_kepegawaian
 * @property string $nip
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\UsulanKenaikanGaji[] $usulanKenaikanGaji
 * @property-read int|null $usulan_kenaikan_gaji_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UsulanKenaikanGaji
 *
 * @property int $id
 * @property string $file_pangkat_terakhir
 * @property string $file_gaji_berkala
 * @property string $file_dokumen_simpedu
 * @property int $status_verifikasi
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $pegawai
 * @method static \Database\Factories\UsulanKenaikanGajiFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|UsulanKenaikanGaji newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UsulanKenaikanGaji newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UsulanKenaikanGaji query()
 */
	class UsulanKenaikanGaji extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UsulanKenaikanPangkat
 *
 * @property int $id
 * @property string $file_pengantar
 * @property string $file_pns
 * @property string $file_pangkat_terakhir
 * @property string $file_jabatan_fungsional
 * @property string $file_sertifikat_pendidikan
 * @property string $file_kartu_pegawai
 * @property int $status_verifikasi
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\UsulanKenaikanPangkatFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|UsulanKenaikanPangkat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UsulanKenaikanPangkat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UsulanKenaikanPangkat query()
 */
	class UsulanKenaikanPangkat extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UsulanPensiun
 *
 * @property int $id
 * @property string $file_sk_pns
 * @property string $file_karis_karsu
 * @property string $file_kartu_pegawai
 * @property string $file_fotocopy_ktp
 * @property string $file_fotocopy_kk
 * @property string $file_akta_nikah
 * @property string $file_dokumen_taspen
 * @property int $status_verifikasi
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\UsulanPensiunFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|UsulanPensiun newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UsulanPensiun newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UsulanPensiun query()
 */
	class UsulanPensiun extends \Eloquent {}
}

