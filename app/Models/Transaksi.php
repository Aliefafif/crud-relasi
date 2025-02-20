<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
     use HasFactory;
     protected $fillable = ['id','tanggal_transaksi','jumlah','id_pembeli','id_obat'];
    public $timestamp = true;

    public function pembeli()
    {
        return $this->belongsTo(pembeli::class,'id_pembeli');
    }
     public function obat()
    {
        return $this->belongsTo(obat::class,'id_obat');
    }
}