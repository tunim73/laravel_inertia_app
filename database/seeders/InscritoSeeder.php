<?php

namespace Database\Seeders;

use App\Models\Endereco;
use App\Models\Inscrito;
use Database\Factories\EnderecoFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InscritoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Inscrito::factory(10)->has(Endereco::factory(1))->create();
    }
}
