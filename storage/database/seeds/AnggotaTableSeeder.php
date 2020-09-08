<?php

use Illuminate\Database\Seeder;

class AnggotaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anggota')->insert([
            'kode_anggota'=>'A001',
            'nama_anggota'=>'Ryan',
            'alamat_anggota'=>'Bekasi'
        ]);
    }
}
