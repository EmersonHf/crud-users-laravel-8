<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login page</title>
</head>

<body>

    <h1>Login User</h1>
    <br>
    <form action="" method="POST">
        @csrf

        <br><br>
        <div class="form-group">
            <label for="email">email</label>
            <input type="email" placeholder="Digite seu email" name="email">
        </div>
        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" placeholder="Digite sua senha" name="password">
        </div>
        <input type="submit" value="Login">
        <br>
        <a href="register">Novo usuario? Registre-se aqui!</a>
    </form>

</body>

</html>
