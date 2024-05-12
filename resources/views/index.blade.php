<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuario</title>
</head>
<body>
    <h1>Lista de Usuario</h1>
    @foreach ($users as $user)
    <p>
        <ul>
            <li>nombre: {{$user->name}}</li>
            <li>username: {{$user->username}}</li>
            
                <br><br>
                <a href="{{route('user.edit', ['id'=>$user->id])}}"> Editar información</a> |
                <a href="{{route('user.destroy', ['id'=>$user->id])}}"> Eliminar usuario</a>|
                <br><br>
            
        </ul>
        <hr>
    </p>
        
    @endforeach

    <a href="{{route('user.create')}}"> Agregar nuevo usuario</a>
    
</body>
</html>
