<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard page</title>
</head>

<body>
    @csrf
    <h1>Dashboard</h1>
    <br>
    <table>
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </thead>
        <tbody>
            <tr>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td><a href="logout">Logout</a></td>
            </tr>
        </tbody>
    </table>
    <br>
    <a href="users">Lista de Usuarios</a>

</body>

</html>
