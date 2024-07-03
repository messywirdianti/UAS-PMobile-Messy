<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class obat extends Model
{
    use HasFactory;

    protected $table = 'obats';

    protected $primaryKey = 'idObat'; 

    protected $fillable = [
        'idObat',
        'namaObat',
        'harga',
        'keterangan',
    ];

    public function idObat(): BelongsTo
    {
        return $this->belongsTo(oabat::class, 'idObat');
    }
}
