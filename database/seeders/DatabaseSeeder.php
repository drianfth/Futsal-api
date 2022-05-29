<?php

namespace Database\Seeders;

use App\Models\Lapangan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Lapangan::create([
            'nama' => 'gelora bungkarno',
            'harga' => 'Rp 10.000',
        ]);
        Lapangan::create([
            'nama' => 'anfild',
            'harga' => 'Rp 20.000',
        ]);
        Lapangan::create([
            'nama' => 'santiago bernabeu',
            'harga' => 'Rp 30.000',
        ]);
        Lapangan::create([
            'nama' => 'stamford bridge',
            'harga' => 'Rp 40.000',
        ]);
    }
}
