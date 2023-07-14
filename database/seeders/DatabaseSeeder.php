<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::factory()->create([
            'name' => 'Aji Pradana',
            'email' => 'aji@gmail.com',
            'password' => bcrypt('123')
        ]);

        \App\Models\Kategory::factory()->create([
            'nama_kategori' => 'Pangan'
        ]);

        \App\Models\Kategory::factory()->create([
            'nama_kategori' => 'Detergent'
        ]);

        \App\Models\StockBarang::factory()->create([
            'user_id' => 1,
            'kode_barang' => "KD01",
            'nama_barang' => "Daia",
            'jumlah' => 200,
            'harga' => 1000,
            'kategory_id' => 1,
            'distributor' => 'PT. Setia Budi'
        ]);

    }
}
