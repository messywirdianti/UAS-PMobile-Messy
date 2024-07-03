<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    use HasFactory;

    protected $table = 'dokters';

    protected $primaryKey = 'idDokter'; 

    protected $fillable = [
        'idDokter',
        'namaDokter',
        'email',
        'noHp',
        'spesialis',
    ];

    public function idDokter(): BelongsTo
    {
        return $this->belongsTo(dokter::class, 'idDokter');
    }
}
