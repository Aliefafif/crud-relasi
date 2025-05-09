<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;
     protected $fillable = ['id','nama'];
    public $timestamp = true;

    //relasi ke tabel produk
    public function produk ()
    {
        return $this->hasMany(produk::class);
    }
}
