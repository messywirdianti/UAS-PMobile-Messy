<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class resep extends Model
{
    use HasFactory;

    protected $table = 'reseps';

    protected $primaryKey = 'idResep'; 

    protected $fillable = [
        'idResep',
        'noRekapMedis',
        'idDokter',
        'idObat',
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

    public function obat(): BelongsTo
    {
        return $this->belongsTo(Obat::class, 'idObat');
    }

}
