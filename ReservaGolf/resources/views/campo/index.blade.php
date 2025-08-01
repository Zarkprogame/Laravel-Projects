<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Lista de Campos de Golf</title>
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
        <h1>Lista de Campos de Golf</h1>
        <a href="{{ route('campos.create') }}" class="btn btn-success">Agregar</a>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>Id</th>
                    <th scope='col'>Nombre</th>
                    <th scope='col'>Ubicacion</th>
                    <th scope='col'>Numero de Hoyos</th>
                    <th scope='col'>Tipo</th>
                    <th scope='col'>Tarifa</th>
                    <th scope='col'>Creada el</th>
                    <th scope='col'>Actualizada el</th>
                    <th scope='col'>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($campos as $campo)
                <tr>
                    <th scope='row'>{{ $campo->id }}</th>
                    <td>{{ $campo->nombre }}</td>
                    <td>{{ $campo->ubicacion }}</td>
                    <td>{{ $campo->numero_hoyos }}</td>
                    <td>{{ $campo->tipo }}</td>
                    <td>{{ $campo->tarifa }}</td>
                    <td>{{ $campo->created_at }}</td>
                    <td>{{ $campo->updated_at }}</td>
                    <td>
                        <a href="{{ route('campos.edit', ['campo'=>$campo->id]) }}" class="btn btn-info">Editar</a>
                        <form action="{{ route('campos.destroy', ['campo' => $campo-> id]) }}" method="POST" style="display: inline-block">
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