<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Create Super USer
        $administrator = User::where('email', 'admin@example.com')->first();
        if (! $administrator) {
            $administrator = User::factory(User::class)->create([
                'name' => 'Administrator',
                'email' => 'admin@example.com',
            ]);
        }

        $administrator->assignRole('Super Administrator');

        // Create 10 random users
        //\App\Models\User::factory(10)->create();
        \App\Models\Customer::factory(10)->create();
    }
}
