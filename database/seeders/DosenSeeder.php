<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*Dosen::create([
            'id_dosen' => '', 
            'nama_dosen' => 'Ara Syah S.Sos',
            'jekel' => 'Perempuan',
            'prodi' => 'Kesejahteraan Sosial',
            'jabatan' => 'Asisten Dosen'
        ]);*/

        Staff::factory(1)->create();
    }
}