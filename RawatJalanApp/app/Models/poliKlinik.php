<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class poliKlinik extends Model
{
    use HasFactory;

    protected $table = 'poli_kliniks';

    protected $primaryKey = 'idPoliKlinik'; 

    protected $fillable = [
        'idPoliKlinik',
        'namaPoliKlinik',
    ];

    public function idPoliKlinik(): BelongsTo
    {
        return $this->belongsTo(poliKlinik::class, 'idPoliKlinik');
    }
}
