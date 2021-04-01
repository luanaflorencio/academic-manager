@include('includes.link')
<div class="p-4">
    <div class="p-6 bg-white border-b border-gray-200">
        <h5>Professores:</h5>

        <div class="mb-4 mt-3">
            <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
        Adicionar
        </button>
    
        <!-- Modal -->
        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Novo Professor</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form action="{{ action([\App\Http\Controllers\ProfessorController::class, 'store'])}}" method="POST">
                    @csrf
                        <div>
                            <x-label for="codigo" :value="__('Código')" />
    
                            <x-input id="codigo" class="block mt-1 w-full" type="text" data-mask="CDG-0000" name="codigo" :value="old('codigo')" required autofocus />
                            </div>
                            <div>
                            <x-label for="nome" :value="__('Nome')" />
    
                            <x-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('identificationnumber')" required autofocus />
                            </div>
    
                            <div>
                            <x-label for="cpf" :value="__('CPF')" />
    
                            <x-input id="cpf" class="block mt-1 w-full" type="text" data-mask="000.000.000-00" name="cpf" :value="old('cpf')" required autofocus />
                            </div>
    
                            <div>
                            <x-label for="nascimento" :value="__('Data de Nascimento')" />
    
                            <x-input id="nascimento" class="block mt-1 w-full" type="date" name="nascimento" :value="old('nascimento')" required autofocus />
                        </div>
                    
    
                    </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
                </div>
            </div>
        </div>
    
    </div>

        @foreach($professor as $p)
        <div class="border mb-3">
            <p> <strong>Código:</strong> {{ $p->codigo }}  <strong>Nome:</strong> {{ $p->nome }} <strong>CPF:</strong> {{ $p->cpf }} <strong>Data de Nasimento:</strong> {{ $p->nascimento }}</p>
        <div class="cursor-pointer grid grid-cols-2 pb-2">
            <a class="position-absolute" href="{{ url('professor/edit/' .$p->id)}}"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"/></svg></a>
            <a class="pl-6" href="{{ route('del-prof', $p->id)}}" onclick="return confirm('Tem certeza que quer excluir este Professor?')"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"/></svg></a> 
        </div>

        </div>
        
        @endforeach    
    </div>
</div>
@include('includes.scripts')