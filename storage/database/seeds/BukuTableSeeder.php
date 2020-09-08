<?php

use Illuminate\Database\Seeder;

class BukuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buku')->insert([
            'kode_buku'=>'B001',
            'judul_buku'=>'Arah Langkah',
            'pengarang_buku'=>'Fiersa Besari',
            'penerbit_buku'=>'Gramedia',
            'jumlah_buku'=>'15'
        ]);
    }
}
