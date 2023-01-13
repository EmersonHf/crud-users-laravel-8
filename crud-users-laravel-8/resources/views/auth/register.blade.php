<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register page</title>
</head>

<body>

    <h1>Register User</h1>
    <br>
    <form action="{{ route('register-user') }}" method="post">
        @if (Session::has('sucesso'))
            <div>{{ Session::get('sucesso') }}</div>
        @endif
        @if (Session::has('falha'))
            <div>{{ Session::get('falha') }}</div>
        @endif
        @csrf
        <div class="form-group">
            <label for="name">Nome Completo</label>
            <input type="text" class="form-control" value="{{ old('name') }}"
                placeholder="Digite seu Nome Completo" name="name">
            <span>
                @error('name')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <br><br>
        <div class="form-group">
            <label for="email">email</label>
            <input type="email" value="{{ old('email') }}" placeholder="Digite seu email" name="email">
            <span>
                @error('email')
                    {{ $message }}
                @enderror
            </span>
            <br><br>
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" value="{{ old('cpf') }}" placeholder="Digite seu CPF" name="cpf">
                <span>
                    @error('cpf')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <br><br>
            <div class="form-group">
                <label for="cep">CEP</label>
                <input type="text" value="{{ old('cep') }}" placeholder="Digite seu CEP" name="cep">
                <span>
                    @error('cep')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <br><br>

            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input type="text" value="{{ old('cidade') }}" placeholder="Digite sua Cidade" name="cidade">
                <span>
                    @error('cidade')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <br><br>
            <div class="form-group">
                <label for="estado">Estado</label>
                <input type="text" value="{{ old('estado') }}" placeholder="Digite seu Estado" name="estado">
                <span>
                    @error('estado')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <br><br>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" placeholder="Digite sua senha" name="password">
                <span>
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <input type="submit" value="Salvar">
            <br>
            <a href="login">Ja está registrado? Clique para Logar </a>
    </form>
</body>

</html>
