<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tarefa;

class tarefas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tarefas = [
            ['tarefa' => 'Estudar API', 'status' => 0],
            ['tarefa' => 'Aula Web', 'status' => 1],
            ['tarefa' => 'Fazer Compras', 'status' => 0],
            ['tarefa' => 'Comprar um carro', 'status' => 0],
            ['tarefa' => 'Comprar um chocolate', 'status' => 0],
            ['tarefa' => 'Recarregar o celular', 'status' => 1],
        ];

        foreach ($tarefas as $tarefa) {
            Tarefa::create($tarefa);
        }
    }
}
