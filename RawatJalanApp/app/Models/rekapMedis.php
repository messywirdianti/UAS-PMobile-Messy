<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class rekapMedis extends Model
{
    use HasFactory;

    protected $table = 'rekap_medis';

    protected $primaryKey = 'idRekapMedis'; 

    protected $fillable = [
        'idRekapMedis',
        'noRekapMedis',
        'idDokter',
        'tanggalKunjungan',
        'keluhan',
        'diagnosa',
        'tekananDarah',
        'suhuTubuh',
        'beratBadan',
        'tinggiBadan',
    ];

    public function pasien(): BelongsTo
    {
        return $this->belongsTo(Pasien::class, 'noRekapMedis');
    }

    public function dokter(): BelongsTo
    {
        return $this->belongsTo(Dokter::class, 'idDokter');
    }

}
