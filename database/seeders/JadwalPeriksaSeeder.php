<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JadwalPeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //lebih satu dokter pertama
        $dokter = \App\Models\User::where('role', 'dokter')->first();
        
        $jadwals = [
            [
                'id_dokter' => $dokter->id,
                'hari' => 'Senin',
                'jam_mulai' => '08:00:00',
                'jam_selesai' => '12:00:00',
                'status' => true,
            ],
            [
                'id_dokter' => $dokter->id,
                'hari' => 'Selasa',
                'jam_mulai' => '14:00:00',
                'jam_selesai' => '17:00:00',
                'status' => false,
            ],
            [
                'id_dokter' => $dokter->id,
                'hari' => 'Rabu',
                'jam_mulai' => '18:00:00',
                'jam_selesai' => '21:00:00',
                'status' => true,
            ],
        ];

        foreach ($jadwals as $jadwal) {
            \App\Models\JadwalPeriksa::create($jadwal);
        }
    }
}
