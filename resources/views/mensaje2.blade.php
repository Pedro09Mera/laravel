<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Mensaje</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <h1>El mensaje enviado es:</h1>
    @if(session ('mensaje'))
        <p>{{ (session ('mensaje'))}}</p>
    @else
        <p class="text-danger">No hay mensaje para mostrar.</p>
    @endif
</body>
</html>




