<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Personales </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div> 
     <form action="{{ route('enviarFormulario') }}" method="POST">
     @csrf
        <h3 class="white--text">Ingresa datos Personales</h3>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $nombre ?? '') }}"><br><br>
        @if ($errors->has('nombre'))
            <span class="text-danger">{{ $errors->first('nombre') }}</span><br><br>
        @endif

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" value="{{ old('apellido', $apellido ?? '') }}"><br><br>
        @if ($errors->has('apellido'))
            <span class="text-danger">{{ $errors->first('apellido') }}</span><br><br>
        @endif
    
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" value="{{ old('edad', $edad ?? '') }}"><br><br>
        @if ($errors->has('edad'))
            <span class="text-danger">{{ $errors->first('edad') }}</span><br><br>
        @endif
    
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="{{ old('email', $email ?? '') }}"><br><br>
        @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span><br><br>
        @endif
    
        <label for="direccion">Direccion:</label>
        <input type="text" id="direccion" name="direccion" value="{{ old('direccion', $direccion ?? '') }}"><br><br>
        @if ($errors->has('direccion'))
            <span class="text-danger">{{ $errors->first('direccion') }}</span><br><br>
        @endif
    
        <label for="fechaNacimiento">Fecha de nacimineto:</label>
        <input type="date" id="fechaNacimiento" name="fechaNacimiento" value="{{ old('fechaNacimiento', $fechaNacimiento ?? '') }}"><br><br>
        @if ($errors->has('fechaNacimiento'))
            <span class="text-danger">{{ $errors->first('fechaNacimiento') }}</span><br><br>
        @endif
    
        <button class="btn btn-info" type="submit">Enviar Datos</button><br><br>
     </form>
    </div>   
</body>
</html>



