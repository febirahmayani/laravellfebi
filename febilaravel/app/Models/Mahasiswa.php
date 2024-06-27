<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'nim', 'email', 'alamat',];

    public function perkuliahans(): HasMany
    {
        return $this->hasMany(Perkuliahan::class);
    }
}
