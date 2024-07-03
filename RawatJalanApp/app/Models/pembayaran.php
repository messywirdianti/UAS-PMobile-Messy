<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayarans';

    protected $primaryKey = 'idPembayaran'; 

    protected $fillable = [
        'idPembayaran',
        'tanggal',
        'total',
        'keterangan',
    ];

    public function pasien(): BelongsTo
    {
        return $this->belongsTo(Pasien::class, 'noRekapMedis');
    }
}
