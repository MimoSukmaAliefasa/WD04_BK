<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailPeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $periksa = \App\Models\Periksa::first();
        $obat = \App\Models\Obat::first();

        $detail = [
                'id_periksa' => $periksa->id,
                'id_obat' => $obat->id,
        ];

        \App\Models\DetailPeriksa::create($detail);
    }
}
