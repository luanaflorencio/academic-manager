<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        </div>

        @if(\Session::has('create'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('create') !!}</li>
            </ul>
        </div>
        @endif

        @if(\Session::has('update'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('update') !!}</li>
                    </ul>
                </div>
        @endif

        @if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif

        <div class="">
            @include('disciplina')
        </div>

        <div class="">
            @include('professor')
        </div>

        <div class="">
            @include('estudante')
        </div>

     

        </div>
    </div>
</x-app-layout>
