<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $this->call(RolSeeder::class);

        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
        ]);
        $user->assignRole([1]);

        $pra = User::factory()->create([
            'name' => 'Práticante',
            'email' => 'practicante@gmail.com',
            'password' => bcrypt('practicante'),
        ]);
        $pra->assignRole([2]);


    }
}
