@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">Detalles del Producto</h2>
    <div class="card">
        <div class="card-header">
            <h4>{{ $product->name }}</h4>
        </div>
        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item"><strong>ID:</strong> {{ $product->id }}</li>
                <li class="list-group-item"><strong>Nombre:</strong> {{ $product->name }}</li>
                <li class="list-group-item"><strong>Descripción:</strong> {{ $product->description }}</li>
                <li class="list-group-item"><strong>Precio:</strong> ${{ number_format($product->price, 2) }}</li>
                <li class="list-group-item"><strong>Cantidad:</strong> {{ $product->quantity }}</li>
                <li class="list-group-item"><strong>Creado el:</strong> {{ $product->created_at->format('d/m/Y') }}</li>
                <li class="list-group-item"><strong>Actualizado el:</strong> {{ $product->updated_at->format('d/m/Y') }}</li>
            </ul>
        </div>
        <div class="card-footer text-right">
            <a href="{{ route('products.index') }}" class="btn btn-primary">Regresar</a>
        </div>
    </div>
</div>
@endsection