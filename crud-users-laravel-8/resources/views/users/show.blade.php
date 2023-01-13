@extends('users.layout')

@section('content')
    <div>
        <div>
            <div>
                <h2> Mostra Usuario</h2>
            </div>
            <div>
                <a href="{{ route('users.index') }}"> Voltar</a>
            </div>
        </div>
    </div>

    <div>
        <div>
            <div class="form-group">
                <strong>Name:</strong>
                {{ $user->name }}
            </div>
        </div>
        <div>
            <div class="form-group">
                <strong>Email:</strong>
                {{ $user->email }}
            </div>
        </div>
        <div>
            <div class="form-group">
                <strong>CPF:</strong>
                {{ $user->cpf }}
            </div>
        </div>
        <div>
            <div class="form-group">
                <strong>CEP:</strong>
                {{ $user->cep }}
            </div>
        </div>
        <div>
            <div class="form-group">
                <strong>Estado:</strong>
                {{ $user->estado }}
            </div>
        </div>
        <div>
            <div class="form-group">
                <strong>cidade:</strong>
                {{ $user->cidade }}
            </div>
        </div>

    </div>
@endsection
