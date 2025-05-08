@extends('layout')
@section('conteudo')
    <h2 class="text-xl font-semibold">Lista de tarefas</h2>
    <form action="{{ route('adicionar') }}" method="post" class="py-2">
        @csrf
        <article class="flex items-center space-x-4 ">
            <div>
                <label for="tarefa">Tarefa:</label>
                <input type="text" name="tarefa" id="tarefa" class="border border-neutral-400 rounded w-[200px]">
            </div>
            <button class="bg-neutral-800 text-neutral-100 px-4 py-1 rounded-md cursor-pointer">Adicionar</button>
        </article>
    </form>

    <ul class="list">
    @foreach ($tarefas as $tr)
        <li class="flex space-x-20 items-center py-1 justify-between w-90">
                <article>
                    <input type="checkbox" name="status" {{$tr->status ? 'checked' : ''}}>
                    <span>{{$tr->tarefa}}</span>
                </article>
                <article class="flex items-center space-x-3">
                    <a href="{{route ('editar', $tr->id)}}" class="text-neutral-800 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                            <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                        </svg>
                    </a>
                    <form action="{{ route('deletar', $tr->id)}}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" id="deletar" class="text-red-600 flex items-center cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </form>
                </article>
            </li>
    @endforeach
    </ul>
@endsection