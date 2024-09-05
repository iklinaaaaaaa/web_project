<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\order;
use App\Models\product;
use Illuminate\Database\Seeder;
use App\Models\User;
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
        User::create([
            'name'=>'iklina',
            'email'=>'iklina@gmail.com',
            'password'=>bcrypt('12345')
        ]);
        product::create([
            'name'=>'Centella',
            'deskripsi'=>'Face Wash',
            'harga'=>'98.000',
            'foto'=>'face wash.jpg',
        ]);
        product::create([
            'name'=>'Centella',
            'deskripsi'=>'Toner',
            'harga'=>'93.000',
            'foto'=>'toner.jpg',
        ]);
        product::create([
            'name'=>'Centella',
            'deskripsi'=>'Serum HYLU CICA',
            'harga'=>'97.000',
            'foto'=>'serum.png',
        ]);
        product::create([
            'name'=>'Centella',
            'deskripsi'=>'Moisture cream',
            'harga'=>'70.000',
            'foto'=>'cream.jpg',
        ]);
        product::create([
            'name'=>'Centella',
            'deskripsi'=>'Paket Glowing',
            'harga'=>'450.000',
            'foto'=>'paket centella.png',
        ]);
        product::create([
            'name'=>'Centella',
            'deskripsi'=>'2PCS toner 200ml',
            'harga'=>'399.000',
            'foto'=>'serum1.jpg',
        ]);
        product::create([
            'name'=>'Centella',
            'deskripsi'=>'Body Lotion Rose 500ml',
            'harga'=>'85.000',
            'foto'=>'bodylotion.jpg',
        ]);
        product::create([
            'name'=>'Centella',
            'deskripsi'=>'serum 20ml',
            'harga'=>'65.000',
            'foto'=>'serum biru.jpg',
        ]);
        product::create([
            'name'=>'Centella',
            'deskripsi'=>'Face Wash',
            'harga'=>'98.000',
            'foto'=>'face wash.jpg',
        ]);
        order::create([
            'name' => 'iklina',
            'email' => 'lina@gmail.com',
            'alamat' => 'panganten',
            'kota' => 'tasikmalaya',
            'kota' => 'tasikmalaya',
            




        ]);
    }
}
