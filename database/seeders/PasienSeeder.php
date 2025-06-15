<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pasiens = [
            [
                'nama' => 'Mansur Bin Furqon',
                'email' => 'Mansur@gmail.com',
                'password' => Hash::make('mansur123'),
                'role' => 'pasien',
                'alamat' => 'Jl. Sehat No. 2',
                'no_ktp' => '6543210987654321',
                'no_hp' => '082345678901',
                'poli' => 'Umum',
            ],
            [
                'nama' => 'Siti Aminah',
                'email' => 'Siti@gmail.com',
                'password' => Hash::make('siti123'),
                'role' => 'pasien',
                'alamat' => 'Jl. Bahagia No. 3',
                'no_ktp' => '9876543210123456',
                'no_hp' => '083456789012',
                'poli' => 'Anak',
            ],
            [
                'nama' => 'Budi Santoso',
                'email' => 'Budi@gmail.com',
                'password' => Hash::make('budi123'),
                'role' => 'pasien',
                'alamat' => 'Jl. Damai No. 4',
                'no_ktp' => '1234567890987654',
                'no_hp' => '084567890123',
                'poli' => 'Mata',
            ],
            [
                'nama' => 'Ani Wulandari',
                'email' => 'Ani@gmail.com',
                'password' => Hash::make('ani123'),
                'role' => 'pasien',
                'alamat' => 'Jl. Cinta No. 5',
                'no_ktp' => '4567890123456789',
                'no_hp' => '085678901234',
                'poli' => 'Kebidanan dan Kandungan',
            ],
        ];

        foreach ($pasiens as $pasien) {
            \App\Models\User::create($pasien);
        }
    }
}
