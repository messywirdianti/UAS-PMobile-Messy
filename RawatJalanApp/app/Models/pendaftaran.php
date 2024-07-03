<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class pendaftaran extends Model
{
    use HasFactory;

    protected $table = 'pendaftaran';

    protected $primaryKey = 'idDaftar'; 

    protected $fillable = [
        'idDaftar',
        'noRekapMedis',
        'namaLengkap',
        'tempatLahir',
        'tanggalLahir',
        'jekel',
        'tanggalKunjungan',
        'asalRujukan',
        'poliTujuan',
        'dokter',
        'pekerjaan',
        'noHp',
        'agama',
        'kewarganegaraan',
    ];

    public function pasien(): BelongsTo
    {
        return $this->belongsTo(pasien::class, 'noRekapMedis');
    }
}
