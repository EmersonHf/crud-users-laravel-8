@extends('users.layout')

@section('content')
    <div>
        <div>
            <div>
                <h2>Editar Usuario</h2>
            </div>
            <div>
                <a href="{{ route('users.index') }}"> Voltar</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div>
            Há alguns erros com o input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <div>
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div>
                <div class="form-group">
                    <strong>Email:</strong>
                    <textarea class="form-control" style="height:50px" name="email" placeholder="Email">{{ $user->email }}</textarea>
                </div>
            </div>
            <div>
                <div class="form-group">
                    <strong>CPF:</strong>
                    <input type="text" id="cpf" name="cpf" value="{{ $user->cpf }}" class="form-control cpf"
                        placeholder="cpf">
                </div>

            </div>
            <div>
                <div class="form-group">
                    <strong>CEP:</strong>
                    <input type="text" name="cep" id="cep" value="{{ $user->cep }}" class="form-control cep"
                        placeholder="cep">
                </div>
            </div>
            <div>
                <div class="form-group">
                    <strong>Cidade:</strong>
                    <input type="text" name="cidade" id="cidade" value="{{ $user->cidade }}" class="form-control"
                        placeholder="cidade">
                </div>
            </div>
            <div>
                <div class="form-group">
                    <strong>Estado:</strong>
                    <input type="text" name="estado" id="uf" value="{{ $user->estado }}" class="form-control"
                        placeholder="estado">
                </div>
            </div>
            <div>
                <div class="form-group">
                    <strong>Senha:</strong>
                    <input type="password" name="password" value="{{ $user->password }}" class="form-control"
                        placeholder="password">
                </div>
            </div>
            <div>
                <button type="submit">Salvar</button>
            </div>
        </div>


    </form>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-mask/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('js/cep.js') }}"></script>
    <script src="{{ asset('js/cpf-formatting.js') }}"></script>
@endsection
