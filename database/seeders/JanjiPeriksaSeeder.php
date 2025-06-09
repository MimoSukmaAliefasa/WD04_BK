<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JanjiPeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pasien = \App\Models\User::where('role', 'pasien')->first();
        $jadwal = \App\Models\JadwalPeriksa::first();

        $janjis = [
            [
                'id_pasien' => $pasien->id,
                'id_jadwal_periksa' => $jadwal->id,
                'keluhan' => 'Sakit kepala dan demam',
                'no_antrian' => 1,
            ],
            [
                'id_pasien' => $pasien->id,
                'id_jadwal_periksa' => $jadwal->id,
                'keluhan' => 'Batuk dan pilek',
                'no_antrian' => 2,
            ],
            [
                'id_pasien' => $pasien->id,
                'id_jadwal_periksa' => $jadwal->id,
                'keluhan' => 'Nyeri sendi',
                'no_antrian' => 3,
            ],               
        ];

        foreach ($janjis as $janji) {
            \App\Models\JanjiPeriksa::create($janji);
        }
    }
}
