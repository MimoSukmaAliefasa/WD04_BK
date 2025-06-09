<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $obats = [
            [
                'nama_obat' => 'Paracetamol',
                'kemasan' => 'Tablet',
                'harga' => 5000,
            ],
            [
                'nama_obat' => 'Amoxicillin',
                'kemasan' => 'Kapsul',
                'harga' => 15000,
            ],
            [
                'nama_obat' => 'Ibuprofen',
                'kemasan' => 'Sirup',
                'harga' => 10000,
            ],
        ];

        foreach ($obats as $obat) {
            \App\Models\Obat::create($obat);
        }
    }
}
