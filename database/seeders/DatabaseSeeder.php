<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            MarcaSeeder::class,
            EmpresaSeeder::class,
            ProdutoSeeder::class,
            ClienteSeeder::class,
            FuncionarioSeeder::class,
            UserSeeder::class
        ]);
    }
}
