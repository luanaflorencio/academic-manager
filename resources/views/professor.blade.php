<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<div class="p-4">
    <div class="p-6 bg-white border-b border-gray-200">
        <h5>Professores:</h5>

        <div class="mb-4 mt-3">
            <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Adicionar
        </button>
    
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Novo Professor</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form action="{{ action([\App\Http\Controllers\ProfessorController::class, 'store'])}}" method="POST">
                    @csrf
                        <div>
                            <x-label for="codigo" :value="__('Código')" />
    
                            <x-input id="codigo" class="block mt-1 w-full" type="text" name="codigo" :value="old('codigo')" required autofocus />
                            </div>
                            <div>
                            <x-label for="nome" :value="__('Nome')" />
    
                            <x-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('identificationnumber')" required autofocus />
                            </div>
    
                            <div>
                            <x-label for="cpf" :value="__('CPF')" />
    
                            <x-input id="cpf" class="block mt-1 w-full" type="text" name="cpf" :value="old('cpf')" required autofocus />
                            </div>
    
                            <div>
                            <x-label for="nascimento" :value="__('Data de Nascimento')" />
    
                            <x-input id="nascimento" class="block mt-1 w-full" type="text" name="nascimento" :value="old('nascimento')" required autofocus />
                        </div>
                    </form>
    
                    </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Salvar</button>
                </div>
                </div>
            </div>
        </div>
    
    </div>

        @foreach($professor as $p)
        <p> <strong>Código:</strong> {{ $p->codigo }}  <strong>Nome:</strong> {{ $p->nome }} <strong>CPF:</strong> {{ $p->cpf }} <strong>Data de Nasimento:</strong> {{ $p->nascimento }}</p>
        @endforeach    
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>