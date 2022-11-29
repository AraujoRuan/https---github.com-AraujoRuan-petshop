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
            
            UserSeeder::class,            
            EmpresaSeeder::class,
            ClienteSeeder::class,
            LojaSeeder::class,
            MarcaSeeder::class,
            ProdutoSeeder::class,
            FuncionarioSeeder::class,

        ]);
    }
}
