<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   DALE
            </div>
        </div>

        <div class="p-6 bg-white border-b border-gray-200">
            @foreach($disciplina as $d)
            <p>{{ $d->nome }} {{ $d->codigo }} {{ $d->professor }} {{ $d->estudantes}}</p>
            @endforeach


        </div>
        <div class="p-6 bg-white border-b border-gray-200">

            @foreach($professor as $p)
            <p>{{ $p->nome }} {{ $p->codigo }} {{ $p->cpf }} {{ $p->nascimento }}</p>
            @endforeach    
        </div>
        <div class="p-6 bg-white border-b border-gray-200">
            @foreach($estudante as $e)
            <p>{{ $e->nome }} {{ $e->codigo }} {{ $e->cpf }} {{ $e->nascimento }}</p>
            @endforeach   
        </div>
        
        </div>
    </div>
</x-app-layout>
