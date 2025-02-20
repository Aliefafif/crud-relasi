<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class barangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama_barang' => 'Sepatu','merek'=>'Adidas Samba','jumlah' =>'4','stok' =>'223'],
            ['nama_barang' => 'Tas','merek'=>'Louis Vuitton Clapton','jumlah' =>'3','stok' =>'1340'],
            ['nama_barang' => 'Jaket','merek'=>'Stone Island','jumlah' =>'13','stok' =>'3214'],
            ['nama_barang' => 'Baju','merek'=>'Epidemic','jumlah' =>'5','stok' =>'1112'],
            ['nama_barang' => 'Celana','merek'=>'Uniqlo','jumlah' =>'8','stok' =>'234']    
          ];
          //masukan data ke database
          DB::table('barangs')->insert($barangs); 
    }
}
