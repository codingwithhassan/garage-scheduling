<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::where('email', 'admin@example.com')->delete();
        $admin = User::forceCreate([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'phone' => '00000000000',
            'password' => bcrypt('root'),
            'is_admin' => true,
        ]);
    }
}
