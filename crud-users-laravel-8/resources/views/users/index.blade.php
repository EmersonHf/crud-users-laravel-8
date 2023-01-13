@extends('users.layout')

@section('content')
    <div>
        <div>
            <div>
                <h2>Exemplo de CRUD com LARAVEL 8</h2>
            </div>
            <div>
                <a href="{{ route('users.create') }}"> Crie um novo Usuario</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div>
            <p>{{ $message }}</p>
        </div>
    @endif

    <table>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">

                        <a href="{{ route('users.show', $user->id) }}">Show</a>

                        <a href="{{ route('users.edit', $user->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $users->links() !!}
@endsection
