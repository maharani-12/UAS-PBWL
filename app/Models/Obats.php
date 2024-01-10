<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Obats extends Model
{
    use HasFactory;

    protected $fillable = ['uuid', 'namaobat', 'deskripsi', 'jumlah', 'harga'];

    protected static function booted()
    {
        static::creating(function ($obats) {
            $obats->uuid = Str::uuid();
        });
    }
}
