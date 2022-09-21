<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <h2>Productos</h2>  

    <ul>
        @foreach ($productos as $producto)
            <li>{{$producto['nombre']}}</li>
        @endforeach
    </ul>
    <div class="d-flex justify-content-end">
        {{$productos->links()}}
    </div>
    <h1>Crear Producto</h1>
    <form action="{{route('crearProduct')}}" method="POST">
        @csrf
        <label for="">Nombre del producto</label>
        <input type="text" name="nombre">
        <br>
        <label for="">Descripcion</label>
        <input type="text" name="descripcion">
        <button class="btn btn-primary">Crear Producto</button>
    </form>


    <h2>Actualizar producto</h2>
    <form action="{{route('editProduct')}}" method="POST">
        @csrf
        @method('put')
        <label for="">Nombre antiguo</label>
        <input type="text" name="old">
        <br>
        <label for="">Nombre nuevo</label>
        <input type="text" name="new">
        <button class="btn btn-primary">Crear Producto</button>
    </form>

    <h2>Borrar Producto</h2>
    <form action="{{route('delProduct')}}" method="POST">
        @csrf
        @method('delete')
        <label for="">Nombre</label>
        <input type="text" name="nombre">
        <br>
        <button class="btn btn-primary">Borrar</button>
    </form>
</body>
</html>