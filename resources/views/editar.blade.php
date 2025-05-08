@extends('layout')
@section('conteudo')
    <h2 class="text-xl font-semibold">Editar Tarefa</h2>
    <form action="" method="post" class="space-y-4">
        <div>
            <input type="text" name="tarefa" class="border border-neutral-400 rounded w-[200px]">
        </div>
        <div>
            <label for=""><input type="radio" name="status" value="0"> Pendente</label>
            <label for=""><input type="radio" name="status" value="1"> Concluido</label>
        </div>
        <button type="submit" class="bg-neutral-800 text-neutral-100 px-4 py-1 rounded-md cursor-pointer">Salvar</button>
    </form>
@endsection