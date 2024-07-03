<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class diagnosa extends Model
{
    use HasFactory;

    protected $table = 'diagnosas';

    protected $primaryKey = 'idDiagnosa'; 

    protected $fillable = [
        'idDiognosa',
        'noRekapMedis',
        'idDokter',
        'idPoliKlinik',
        'tanggalKunjungan',
        'keterangan',
    ];

    public function pasien(): BelongsTo
    {
        return $this->belongsTo(Pasien::class, 'noRekapMedis');
    }

    public function dokter(): BelongsTo
    {
        return $this->belongsTo(Dokter::class, 'idDokter');
    }

    public function poliKlinik(): BelongsTo
    {
        return $this->belongsTo(PoliKlinik::class, 'idPoliKlinik');
    }

}
