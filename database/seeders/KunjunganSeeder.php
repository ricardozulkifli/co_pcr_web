<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kunjungan;

class KunjunganSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 15; $i++) {
            Kunjungan::create([
                'nama' => 'Pengunjung ' . $i,
                'email' => 'user' . $i . '@mail.com',
                'institusi' => 'Sekolah ' . $i,
            ]);
        }
    }
}
