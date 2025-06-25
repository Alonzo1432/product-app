@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ __('products.title') }}</h1>

    <a href="{{ route('products.create') }}" class="btn btn-success mb-3">
        {{ __('products.create') }}
    </a>

    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>{{ __('products.name') }}</th>
                <th>{{ __('products.price') }}</th>
                <th>{{ __('products.description') }}</th>
                <th>{{ __('products.category') }}</th>
                <th>{{ __('products.actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>${{ number_format($product->price, 2) }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->category->name ?? '—' }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-warning">
                            {{ __('products.edit') }}
                        </a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('¿Seguro que deseas eliminar este producto?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                {{ __('products.delete') }}
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">No hay productos registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
