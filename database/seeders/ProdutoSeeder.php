<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
        ]);
    }
}
