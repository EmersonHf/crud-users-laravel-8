@extends('users.layout')

@section('content')
    <div>
        <div>
            <div>
                <h2>Adicionar novo usuario</h2>
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

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        @if (Session::has('sucesso'))
            <div>{{ Session::get('sucesso') }}</div>
        @endif
        @if (Session::has('falha'))
            <div>{{ Session::get('falha') }}</div>
        @endif

        <div class="form-group">
            <label for="name">Nome Completo</label>
            <input type="text" class="form-control" value="{{ old('name') }}" placeholder="Digite seu Nome Completo"
                name="name">

        </div>
        <br>
        <div class="form-group">
            <label for="email">email</label>
            <input type="email" value="{{ old('email') }}" class="form-control" placeholder="Digite seu email"
                name="email">

            <br>
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" value="{{ old('cpf') }}" class="form-control" placeholder="Digite seu CPF"
                    name="cpf">

            </div>
            <br>
            <div class="form-group">
                <label for="cep">CEP</label>
                <input type="text" value="{{ old('cep') }}" class="form-control" placeholder="Digite seu CEP"
                    name="cep">

            </div>

            <br>

            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input type="text" value="{{ old('cidade') }}" class="form-control" placeholder="Digite sua Cidade"
                    name="cidade">

            </div>
            <br>
            <div class="form-group">
                <label for="estado">Estado</label>
                <input type="text" value="{{ old('estado') }}" class="form-control" placeholder="Digite seu Estado"
                    name="estado">

            </div>
            <br>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" class="form-control" placeholder="Digite sua senha" name="password">

            </div>
            <input type="submit" value="Criar Usuario">
            <br>

    </form>
@endsection
