<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'kode', 'sks',];

    public function perkuliahans(): HasMany
    {
        return $this->hasMany(Perkuliahan::class);
    }
}

