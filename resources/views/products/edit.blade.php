<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Producto</h1>
        
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $product->name }}" required>
            </div>
            
            <div class="form-group">
                <label for="description">Descripción:</label>
                <textarea id="description" name="description" class="form-control" required>{{ $product->description }}</textarea>
            </div>
            
            <div class="form-group">
                <label for="price">Precio:</label>
                <input type="number" id="price" name="price" class="form-control" value="{{ $product->price }}" step="0.01" required>
            </div>
            
            <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
        </form>
    </div>
</body>
</html>
