<?php

use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $jabatan = [
        ['nama_jabatan'=>'ob', 'besar_uang'=>'35.000'],
        ['nama_jabatan'=>'direktur', 'besar_uang'=>'100.000'],
        ['nama_jabatan'=>'karyawan', 'besar_uang'=>'75.000']
        ];

    }
}
