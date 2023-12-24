<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('wisata')->insert([
            'id_wisata'=> '1',
            'judul' => 'Gunung Bromo',
            'lokasi' => 'Jawa Timur',
            'deskripsi' => 'Bromo terletak di Malang, Jawa Timur',
            'thumbnail' => 'bromo.jpg',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('wisata')->insert([
            'id_wisata'=> '2',
            'judul' => 'Pantai Losari',
            'lokasi' => 'Jawa Timur',
            'deskripsi' => 'Pantai Losari terletak di Malang, Jawa Timur',
            'thumbnail' => 'bromo.jpeg',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
