<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash; // <--- TAMBAHKAN BARIS INI
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'nama' => 'Dr. Yusuf',
                'email' => 'Yusuf@gmail.com',
                'password' => Hash::make('yusuf123'),
                'role' => 'dokter',
                'alamat' => 'Jl. Kesehatan No. 1',
                'no_ktp' => '1234567890123456',
                'no_hp' => '081234567890',
                'poli' => 'Umum',
            ],
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
        ];

        foreach ($users as $user) {
            \App\Models\User::create($user);
        }
    }
}
