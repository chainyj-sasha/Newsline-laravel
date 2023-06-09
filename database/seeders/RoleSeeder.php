<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'role' => 'Administrator',
            'code' => 'admin',
        ]);

        Role::create([
            'role' => 'User',
            'code' => 'user',
        ]);
    }
}
