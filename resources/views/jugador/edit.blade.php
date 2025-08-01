<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Editar Jugadores</title>
</head>

<body>
    <div class="container">
        <h1>Editar Jugadores</h1>
        <form method="POST" action="{{ route('jugadores.update', ['jugador' => $jugador->id]) }}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" required class="form-control" id="nombre" name="nombre" placeholder="Nombre del Jugador" value="{{ $jugador->nombre }}">
            </div>

            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" required class="form-control" id="apellido" name="apellido" placeholder="Apellido del Jugador" value="{{ $jugador->apellido }}">
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="text" required class="form-control" id="telefono" name="telefono" placeholder="Telefono del Jugador" value="{{ $jugador->telefono }}">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" required class="form-control" id="email" name="email" placeholder="Email del Jugador" value="{{ $jugador->email }}">
            </div>

            <div class="mb-3">
                <label for="direccion" class="form-label">Direccion</label>
                <input type="text" required class="form-control" id="direccion" name="direccion" placeholder="Direccion del Jugador" value="{{ $jugador->direccion }}">
            </div>

            <div class="mb-3">
                <label for="handicap" class="form-label">Handicap</label>
                <input type="text" required class="form-control" id="handicap" name="handicap" placeholder="Handicap del Jugador" value="{{ $jugador->handicap }}">
            </div>

            <div class="mb-3">
                <label for="created_at" class="form-label">Creada el</label>
                <input type="text" class="form-control" id="created_at" name="created_at" value="{{ $jugador->created_at }}" disabled="disabled">
            </div>

            <div class="mb-3">
                <label for="updated_at" class="form-label">Actualizada el</label>
                <input type="text" required class="form-control" id="updated_at" name="updated_at" value="{{ $jugador->updated_at }} " disabled="disabled">
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Editar</button>
                <a href="{{ route('jugadores.index') }}" class="btn btn-warning">Cancelar</a>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>