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
    <form action="" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Digite seu Nome Completo</label>
            <input type="text" class="form-control" placeholder="Digite seu Nome Completo" name="name">
        </div>
        <br><br>
        <div class="form-group">
            <label for="email">email</label>
            <input type="email" placeholder="Digite seu email" name="email">

            <br><br>
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" placeholder="Digite seu CPF" name="cpf">
            </div>
            <br><br>
            <div class="form-group">
                <label for="cep">CEP</label>
                <input type="text" placeholder="Digite seu CEP" name="cep">
            </div>

            <br><br>

            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input type="text" placeholder="Digite sua Cidade" name="cidade">
            </div>
            <br><br>
            <div class="form-group">
                <label for="estado">Estado</label>
                <input type="text" placeholder="Digite seu Estado" name="estado">
            </div>
            <br><br>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" placeholder="Digite sua senha" name="password">
            </div>
            <input type="submit" value="Salvar">
            <br>
            <a href="login">Ja está registrado? Clique para Logar </a>
    </form>
</body>

</html>
