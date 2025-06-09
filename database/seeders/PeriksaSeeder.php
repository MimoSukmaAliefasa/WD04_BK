<?php

namespace Database\Seeders;

use App\Models\JanjiPeriksa;
use App\Models\Periksa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;


class PeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $janji = \App\Models\JanjiPeriksa::first();

        $data = [
            [
                'id_janji_periksa' => $janji->id,
                'tgl_periksa' => now(),
                'catatan' => 'Pasien dalam kondisi stabil, perlu kontrol 1 minggu lagi.',
                'biaya_periksa' => 100000,
            ],
        ];

        foreach ($data as $item) {
            \App\Models\Periksa::create($item);
        }
    }
}
