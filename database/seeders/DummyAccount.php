<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DummyAccount extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Untuk bisa mengakses dashboard, set jenisAkun ke 'admin'
        DB::table('users')->insert([
            'role' => 'admin',
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('admin123')
        ]);

        // Untuk sebagai user biasa, set jenisAkun ke 'guest'
        DB::table('users')->insert([
            'role' => 'guest',
            'name' => 'guest',
            'password' => Hash::make('guest123'),
            'email' => 'guest@mail.com',
            'phone_number' => '1234567890'
        ]);
    }
}
