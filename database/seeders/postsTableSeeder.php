<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class postsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['title' => 'Tips Cepat Pintar','conten'=>'lorem ipsum'],
            ['title' => 'Haruskah Anda Belajar?','conten'=>'lorem ipsum'],
            ['title' => 'Membangun Visi Misi Kesuksesan','conten'=>'lorem ipsum']
          ];
          //masukan data ke database
          DB::table('posts')->insert($posts);
            }
}
