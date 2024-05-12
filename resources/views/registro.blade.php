


<form method="POST" action="{{ route('user.store') }}"> 
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="name" required>

    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <label for="contraseña">Contraseña:</label>
    <input type="password" id="contraseña" name="pass" required>

    <button type="submit">Registrar</button>
    <br><br>
    <a href="{{route('user.index')}}"> Regresar a la lista de usuarios</a>
</form>