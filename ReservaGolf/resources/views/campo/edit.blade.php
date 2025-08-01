<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Editar Campos de Golf</title>
</head>

<body>
    <div class="container">
        <h1>Editar Campos de Golf</h1>
        <form method="POST" action="{{ route('campos.update', ['campo' => $campo->id]) }}">
            @method('put')
            @csrf
            <!-- <div class="mb-3">
                <label for="codigo" class="form-label">Id</label>
                <input type="text" class="form-control" id="id" aria-describedby="codigoHelp" name="id" disabled="disabled" value="{{ $campo->id }}">
                <div id="codigoHelp" class="form-text">Id del Campo</div>
            </div> -->

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" required class="form-control" id="nombre" name="nombre" placeholder="Nombre del Campo" value="{{ $campo->nombre }}">
            </div>

            <div class="mb-3">
                <label for="ubicacion" class="form-label">Ubicacion</label>
                <input type="text" required class="form-control" id="ubicacion" name="ubicacion" placeholder="Ubicacion del Campo" value="{{ $campo->ubicacion }}">
            </div>

            <div class="mb-3">
                <label for="numero_hoyos" class="form-label">Numero de Hoyos</label>
                <input type="text" required class="form-control" id="numero_hoyos" name="numero_hoyos" placeholder="numero_hoyos del Campo" value="{{ $campo->numero_hoyos }}">
            </div>

            <label for="tipo">Tipo de Campo</label>
            <select class="form-select" id="tipo" name="tipo" required>
                <option selected disabled value="">Elige uno...</option>
                <option value="publico"> Publico </option>
                <option value="privado"> Privado </option>
            </select>

            <div class="mb-3">
                <label for="tarifa" class="form-label">Tarifa</label>
                <input type="text" required class="form-control" id="tarifa" name="tarifa" placeholder="Tarifa del Campo" value="{{ $campo->tarifa }}">
            </div>

            <div class="mb-3">
                <label for="created_at" class="form-label">Creada el</label>
                <input type="text" class="form-control" id="created_at" name="created_at" value="{{ $campo->created_at }}" disabled="disabled">
            </div>

            <div class="mb-3">
                <label for="updated_at" class="form-label">Actualizada el</label>
                <input type="text" required class="form-control" id="updated_at" name="updated_at" value="{{ $campo->updated_at }} " disabled="disabled">
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Editar</button>
                <a href="{{ route('campos.index') }}" class="btn btn-warning">Cancelar</a>
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