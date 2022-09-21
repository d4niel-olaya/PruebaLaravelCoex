<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- JavaScript Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script> -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Inicio</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- <table>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
        </tr>

        <!-- @foreach ($usuarios as $usuario)
        <tr>
            <td>{{$usuario['id']}}</td>
            <td>{{$usuario['nombre']}}</td> 
        </tr>   
        @endforeach -->


    <!-- </table> -->
    

    <h1>Usuarios</h1>
    <ul>
        @foreach ($usuarios as $usuario)
            <li>{{$usuario['nombre']}}</li>
        @endforeach
    </ul>
    <h1>Crear Usuario</h1>
    <form action="{{route('crearUsuario')}}" method="POST">
        @csrf
        <label for="">Nombre</label>
        <input type="text" name="nombre">
        <button class="btn btn-primary">Crear</button>
    </form>

    <h2>Editar nombre de Usuario</h2>
    <form action="{{route('editUser')}}" method="POST">
        @csrf
        @method('put')
        <label for="">Nombre Antiguo</label>
        <input type="text" name="OldName">
        <br>
        <label for="">Nombre nuevo</label>
        <input type="text" name ="NewName">
        <br>
        <button class="btn btn-primary">Editar</button>
    </form>
    <h2>Borrar usuario</h2>
    <form action="{{route('delUser')}}" method="POST">
        @csrf
        @method('delete')
        <label for="">Nombre</label>
        <input type="text" name="name">
        <br>
        <button class="btn btn-primary">Borrar</button>
    </form>
</body>
</html>