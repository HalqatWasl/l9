<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
        //     'name' => 'admin',
        //     'email' => 'admin@halqatwasl.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('admin@halqatwasl'),
        //     'username' => Str::random(10) . '-' .uniqid(),
        //     'is_admin' => '1',
        // ]);

        \App\Models\Departement::factory()->create([
            'name' => 'نجار',
            'is_active' => 1,
        ]);

        \App\Models\Province::factory()->create([
            'name' => 'صنعاء',
            'is_active' => 1,
        ]);

        \App\Models\Departement::factory()->create([
            'name' => 'نجار',
            'is_active' => 1,
        ]);
    }
}
