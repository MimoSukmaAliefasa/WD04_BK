<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ObatSeeder::class,
            DokterSeeder::class,
            PasienSeeder::class,    
            JadwalPeriksaSeeder::class,
            JanjiPeriksaSeeder::class,
            PeriksaSeeder::class,
            DetailPeriksaSeeder::class,
        ]);
    }
}
