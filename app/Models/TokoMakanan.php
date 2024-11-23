<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TokoMakanan extends Model
{
    use HasFactory;

    protected $fillable = ['nama_makanan', 'harga', 'stok', 'gambar'];
}
