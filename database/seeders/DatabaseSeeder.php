<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'status' => 'admin',
            'email' => 'admin@gmail.com',
            'nohp' => '62846759232',
            'atas_nama' => 'admin admin',
            'jenis_rek' => 'bri',
            'norek' => '0112371122',
            'alamat' => 'cibogo',
            'password' => bcrypt('admin'),
        ]);

        User::create([
            'name' => 'tedi',
            'username' => 'tedi',
            'status' => 'penyewa',
            'email' => 'tedi@gmail.com',
            'nohp' => '6282244556635',
            'atas_nama' => 'tedi ridwansyah',
            'jenis_rek' => 'bca',
            'norek' => '6782348732',
            'alamat' => 'manyingsal',
            'password' => bcrypt('tedi'),
        ]);

        User::create([
            'name' => 'yeti',
            'username' => 'yeti',
            'status' => 'pemilik',
            'email' => 'yeti@gmail.com',
            'nohp' => '628666777423',
            'atas_nama' => 'yeti yeti',
            'jenis_rek' => 'bjb',
            'norek' => '099988231',
            'alamat' => 'cibogo',
            'password' => bcrypt('yeti'),
        ]);

        Kategori::create([
            'nama' => 'Politeknik Negeri Malang',
            'slug' => 'Politeknik Negeri Malang',
            'alamat' => 'Jl. Soekarno Hatta No.9, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141'
        ]);

        Kategori::create([
            'nama' => 'Universitas Brawijaya',
            'slug' => 'Universitas Brawijaya',
            'alamat' => 'Jl. Veteran, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145'
        ]);

        Kategori::create([
            'nama' => 'Universitas Malang',
            'slug' => 'Universitas Malang',
            'alamat' => 'Jl. Semarang No.5, Sumbersari, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145'
        ]);
    }
}
