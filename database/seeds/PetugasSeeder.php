<?php

use Illuminate\Database\Seeder;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('petugas')->insert([
            'nip'=>'001',
            'nama_petugas'=>'Dyan',
            'alamat_petugas'=>'Bekasi'
        ]);
    }
}
