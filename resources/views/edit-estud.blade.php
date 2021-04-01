<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
 
 <!-- Modal -->
 <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Editar dados de Estudante</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="{{ url('estudante/update/' .$estudante->id) }}" method="POST">
            @csrf
                <div>
                    <x-label for="codigo" :value="__('Código')" />

                    <x-input id="codigo" class="block mt-1 w-full" type="text" data-mask="CDG-0000" name="codigo" :value="old('codigo')" value="{{ $estudante->codigo }}" required autofocus />
                    </div>
                    <div>
                    <x-label for="nome" :value="__('Nome')" />

                    <x-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('identificationnumber')" value="{{ $estudante->nome }}" required autofocus />
                    </div>

                    <div>
                    <x-label for="cof" :value="__('CPF')" />

                    <x-input id="cpf" class="block mt-1 w-full" type="text" data-mask="000.000.000-00" name="cpf" :value="old('cpf')" value="{{ $estudante->cpf }}" required autofocus />
                    </div>

                    <div>
                    <x-label for="nascimento" :value="__('Data de Nascimento')" />

                    <x-input id="nascimento" class="block mt-1 w-full" type="date" name="nascimento" :value="old('estudantes')" value="{{ $estudante->nascimento }}" required autofocus />
                </div>
           

            </div>
        <div class="modal-footer">
        <a class="btn btn-secondary" data-bs-dismiss="modal" href="{{ route('dashboard')}}">Cancelar</a>
        <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </form>
        </div>
    </div>
</div>
</div>
</div>
</x-app-layout>