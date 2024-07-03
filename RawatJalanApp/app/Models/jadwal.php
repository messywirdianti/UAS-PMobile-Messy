<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwals';

    protected $primaryKey = 'idJadwal'; 

    protected $fillable = [
        'idJadwal',
        'idDokter',
        'idPoliKlinik',
        'jekel',
        'jamMulai',
        'jamSelesai',
    ];

    public function dokter(): BelongsTo
    {
        return $this->belongsTo(Dokter::class, 'idDokter');
    }

    public function poliKlinik(): BelongsTo
    {
        return $this->belongsTo(PoliKlinik::class, 'idPoliKlinik');
    }
}
