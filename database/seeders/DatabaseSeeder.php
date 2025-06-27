<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
// use Database\Seeders\UsuarioSeeder; // Ensure this seeder exists or comment/remove this line if not needed

// Ensure the User model exists and is imported correctly
// Ensure the User model exists at app/Models/User.php
use App\Models\User;

class DatabaseSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        User::create([
            'nome' => 'Clínica Exemplo',
            'email' => 'clinica@exemplo.com',
            'password' => Hash::make('senha123'),
            'tipo' => 'clinica',
        ]);

        User::create([
            'nome' => 'Dra. Juliana',
            'email' => 'medico@exemplo.com',
            'password' => Hash::make('senha123'),
            'tipo' => 'medico',
        ]);

            //        $this->call(UsuarioSeeder::class); // Uncomment this line only if UsuarioSeeder exists
    }
}
