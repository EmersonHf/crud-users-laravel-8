@extends('users.layout')

@section('content')
    <div>
        <div>
            <div>
                <h2>Adicionar novo usuario</h2>
            </div>
            <div>
                <a href="{{ route('users.index') }}"> Back</a>
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
        <br><br>
        <div class="form-group">
            <label for="email">email</label>
            <input type="email" value="{{ old('email') }}" placeholder="Digite seu email" name="email">

            <br><br>
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" value="{{ old('cpf') }}" placeholder="Digite seu CPF" name="cpf">

            </div>
            <br><br>
            <div class="form-group">
                <label for="cep">CEP</label>
                <input type="text" value="{{ old('cep') }}" placeholder="Digite seu CEP" name="cep">

            </div>

            <br><br>

            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input type="text" value="{{ old('cidade') }}" placeholder="Digite sua Cidade" name="cidade">

            </div>
            <br><br>
            <div class="form-group">
                <label for="estado">Estado</label>
                <input type="text" value="{{ old('estado') }}" placeholder="Digite seu Estado" name="estado">

            </div>
            <br><br>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" placeholder="Digite sua senha" name="password">

            </div>
            <input type="submit" value="Criar Usuario">
            <br>

    </form>
@endsection
