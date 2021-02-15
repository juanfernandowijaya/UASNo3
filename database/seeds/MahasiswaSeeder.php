<?php

use App\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mahasiswa = Mahasiswa::create([
            'nim' => '2201813213',
            'email' => 'juan.wijaya@binus.ac.id',
            'name' => 'Juan Fernando Wijaya'
        ]);
        $mahasiswa = Mahasiswa::create([
            'nim' => '2201813214',
            'email' => 'jsven@binus.ac.id',
            'name' => 'Jsven Septian K'
        ]);
        $mahasiswa = Mahasiswa::create([
            'nim' => '2201813215',
            'email' => 'billie@binus.ac.id',
            'name' => 'Billie Halim'
        ]);
    }
}
