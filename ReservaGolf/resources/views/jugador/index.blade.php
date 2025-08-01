<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Lista de Jugadores</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('dashboard') }}">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('campos.index') }}">Campos</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('jugadores.index') }}">Jugadores</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('reservas.index') }}">Reservas</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class='container'>
        <h1>Lista de Jugadores</h1>
        <a href="{{ route('jugadores.create') }}" class="btn btn-success">Agregar</a>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>Id</th>
                    <th scope='col'>Nombre</th>
                    <th scope='col'>Apellido</th>
                    <th scope='col'>Telefono</th>
                    <th scope='col'>Email</th>
                    <th scope='col'>Direccion</th>
                    <th scope='col'>Handicap</th>
                    <th scope='col'>Creada el</th>
                    <th scope='col'>Actualizada el</th>
                    <th scope='col'>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jugadores as $jugador)
                <tr>
                    <th scope='row'>{{ $jugador->id }}</th>
                    <td>{{ $jugador->nombre }}</td>
                    <td>{{ $jugador->apellido }}</td>
                    <td>{{ $jugador->telefono }}</td>
                    <td>{{ $jugador->email }}</td>
                    <td>{{ $jugador->direccion }}</td>
                    <td>{{ $jugador->handicap }}</td>
                    <td>{{ $jugador->created_at }}</td>
                    <td>{{ $jugador->updated_at }}</td>
                    <td>
                        <a href="{{ route('jugadores.edit', ['jugador'=>$jugador->id]) }}" class="btn btn-info">Editar</a>
                        <form action="{{ route('jugadores.destroy', ['jugador' => $jugador-> id]) }}" method="POST" style="display: inline-block">
                            @method('delete')
                            @csrf
                            <input class="btn btn-danger" type="submit" value="Eliminar">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>