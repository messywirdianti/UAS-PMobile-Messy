<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;

    protected $table = 'pasiens';

    protected $primaryKey = 'noRekapMedis';

    protected $fillable = [
        'noRekapMedis',
        'namaPengguna',
        'noKTP',
        'jekel',
        'tempatLahir',
        'tanggalLahir',
        'noBPJS',
        'noHp',
        'email',
        'alamat',
    ];

    public function noRekapMedis(): BelongsTo
    {
        return $this->belongsTo(pasien::class, 'noRekapMedis');
    }
}
