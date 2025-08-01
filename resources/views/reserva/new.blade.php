<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Agregar Reserva</title>
</head>

<body>
  <div class="container">
    <h1>Agregar Reserva</h1>
    <form method="POST" action="{{ route('reservas.store') }}">
      @csrf
      <br>
      <select class="form-select" id="campo_id" name="campo_id" required>
        <option selected disabled value="">Elije Uno...</option>
        @foreach ($campos as $campo)
        <option value="{{ $campo->id }}"> {{ $campo->nombre }} </option>
        @endforeach
      </select>
      <br>
      <select class="form-select" id="jugador_id" name="jugador_id" required>
        <option selected disabled value="">Elije Uno...</option>
        @foreach ($jugadores as $jugador)
        <option value="{{ $jugador->id }}"> {{ $jugador->nombre }} </option>
        @endforeach
      </select>

      <div class="mb-3">
        <label for="fecha_reserva" class="form-label">Fecha de Reserva</label>
        <input type="date" class="form-control" id="fecha_reserva" name="fecha_reserva" placeholder="Fecha de Reserva">
      </div>

      <div class="mb-3">
        <label for="hora_inicio" class="form-label">Hora de Inicio</label>
        <input type="time" class="form-control" id="hora_inicio" name="hora_inicio" placeholder="Hora de Inicio">
      </div>


      <div class="mb-3">
        <label for="duracion" class="form-label">Duracion</label>
        <input type="text" class="form-control" id="duracion" aria-describedby="duracionHelp" name="duracion" placeholder="Duracion">
      </div>

      <div class="mb-3">
        <label for="numero_jugadores" class="form-label">Numero de Jugadores</label>
        <input type="text" class="form-control" id="numero_jugadores" aria-describedby="numero_jugadoresoHelp" name="numero_jugadores" placeholder="Numero de Jugadores">
      </div>

      <div class="mt-3">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('reservas.index') }}" class="btn btn-warning">Cancelar</a>
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