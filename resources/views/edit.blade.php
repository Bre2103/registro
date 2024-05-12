<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    <form method="POST" action="{{ route('user.update', ['id'=>$user->id]) }}">
        @csrf
        
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="name" value="{{ $user->name }}" required>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="{{ $user->username }}" required>


        <button type="submit">Guardar cambios</button>
    </form>
    <br>
    <a href="{{route('user.index')}}"> Regresar a la lista de usuarios</a>

</body>
</html>
