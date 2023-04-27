
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Mensaje</title>
</head>
<body>
<form action="{{ route('enviarMensaje') }}" method="POST">
    @csrf
    <h3>Ingrese el Mensaje</h3>
    <label for="mensaje">Mensaje:</label>
    <input type="text" name="mensaje" id="mensaje">
    <button  class="btn btn-info" type="submit">Enviar</button>
</form>

</body>
</html>






