<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Multitenancy\Models\Tenant;

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
        
       $user =  Tenant::create([
            'name' =>'test@mail.com',
            'domain' => 'nain.agency.test',
            'database' => 'nain'
        ]);

        $user->user()->create([
            'email' => 'test@mail.com',
            'password' => Hash::make(123456),
        ]);
    }
}
