<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Datos Personales</title>
</head>
<body>
    <h1>Sus Datos personales son:</h1>
    @if(session ())
        <p>su nombre es: {{ (session ('nombre'))}}</p>
        <p>Su apellido es: {{ (session ('apellido'))}}</p>
        <p>Su edad es: {{ (session ('edad'))}}</p>
        <p>Su email es: {{ (session ('email'))}}</p>
        <p>Su direccion es: {{ (session ('direccion'))}}</p>
        <p>su fecha de nacimiento es: {{ (session ('fechaNacimiento'))}}</p>
    @else
        <p>No hay datos que mostrar</p>
    @endif
</body>
</html>