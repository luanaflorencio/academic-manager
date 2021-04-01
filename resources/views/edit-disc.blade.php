<x-app-layout>
    <x-slot name="header">
        
    </x-slot>
   

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Disciplina</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>

</div>

    <div class="modal-body">
        <form action="{{ url('disciplina/update/' .$disciplina->id)}}" method="POST">
        @csrf
        <div>
        <x-label for="codigo" :value="__('Código')" />

        <x-input id="codigo" class="block mt-1 w-full" type="text" data-mask="CDG-0000" name="codigo" :value="old('codigo')" value="{{ $disciplina->codigo }}" required autofocus />
        </div>
        <div>
        <x-label for="nome" :value="__('Nome')" />

        <x-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('nome')" value="{{ $disciplina->nome }}" required autofocus />
        </div>

        <div>
        <x-label for="professor" :value="__('Professor')" />

        <x-input id="professor" class="block mt-1 w-full" type="text" name="professor" :value="old('professor')" value="{{ $disciplina->professor }}" required autofocus />
        </div>

        <div>
        <x-label for="estudantes" :value="__('Estudantes')" />

        <x-input id="estudantes" class="block mt-1 w-full" type="number" name="estudantes" :value="old('estudantes')" value="{{ $disciplina->estudantes }}" required autofocus />
        </div>
        

    </div>
    <div class="modal-footer">
    <a type="button" class="btn btn-secondary" data-bs-dismiss="modal" href="{{ route('dashboard')}}">Cancelar</a>
    <button type="submit" class="btn btn-primary">Editar</button>
    </div>
</form>
</div>
</div>
</div>

</div>
</div>
</x-app-layout>