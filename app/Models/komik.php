<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class komik extends Model
{
    use HasFactory;
     protected $fillable = ['id','nama_komik','genre_komik','harga','stok','penerbit','tanggal_terbit','foto'];
    public $timestamp = true;

    public function deleteimage(){
        if ($this->foto && file_exists(public_path('storage/foto',$this->foto))) {
            return unlink(public_path('storage/foto',$this->foto));
        }
        
    }
}
