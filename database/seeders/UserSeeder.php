<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Ahmad',
            'password' => Hash::make('stmikjabar'),
            'email' => 'ahmad@gmail.com',
            'email_verified_at' => now(),
            'role' => 'Dokter'
        ]);

        User::create([
            'name' => 'Fikri',
            'password' => Hash::make('stmikjabar'),
            'email' => 'fikri@gmail.com',
            'email_verified_at' => now(),
            'role' => 'Dokter'
        ]);

        User::create([
            'name' => 'Rika',
            'password' => Hash::make('stmikjabar'),
            'email' => 'rika@gmail.com',
            'email_verified_at' => now(),
            'role' => 'Dokter'
        ]);

        User::create([
            'name' => 'Syifa',
            'password' => Hash::make('stmikjabar'),
            'email' => 'syifa@gmail.com',
            'email_verified_at' => now(),
            'role' => 'Dokter'
        ]);

        User::create([
            'name' => 'Umi',
            'password' => Hash::make('stmikjabar'),
            'email' => 'umi@gmail.com',
            'email_verified_at' => now(),
            'role' => 'Pasien'
        ]);

        User::create([
            'name' => 'Rohmawati',
            'password' => Hash::make('stmikjabar'),
            'email' => 'rohmawati@gmail.com',
            'email_verified_at' => now(),
            'role' => 'Pasien'
        ]);

        User::create([
            'name' => 'Lutfiah',
            'password' => Hash::make('stmikjabar'),
            'email' => 'lutfiah@gmail.com',
            'email_verified_at' => now(),
            'role' => 'Pasien'
        ]);

        User::create([
            'name' => 'Syahda',
            'password' => Hash::make('stmikjabar'),
            'email' => 'syahda@gmail.com',
            'email_verified_at' => now(),
            'role' => 'Pasien'
        ]);

        User::create([
            'name' => 'Rendi',
            'password' => Hash::make('stmikjabar'),
            'email' => 'rendi@gmail.com',
            'email_verified_at' => now(),
            'role' => 'Pasien'
        ]);

        User::create([
            'name' => 'Rega',
            'password' => Hash::make('stmikjabar'),
            'email' => 'rega@gmail.com',
            'email_verified_at' => now(),
            'role' => 'Pasien'
        ]);
    }
}
