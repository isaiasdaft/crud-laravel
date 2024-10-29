<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container mt-5">
        <h1>Crear Producto</h1>
        
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="description">Descripción:</label>
                <textarea id="description" name="description" class="form-control" required></textarea>
            </div>
            
            <div class="form-group">
                <label for="price">Precio:</label>
                <input type="number" id="price" name="price" class="form-control" step="0.01" required>
            </div>
            
            <button type="submit" class="btn btn-primary mt-3">Crear</button>
        </form>
    </div>
</body>
</html>
