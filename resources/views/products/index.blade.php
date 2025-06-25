<!-- resources/views/products/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>{{ __('products.title') }}</h1>

    <a href="{{ route('products.create') }}">{{ __('products.create') }}</a>

    <table>
        <thead>
            <tr>
                <th>{{ __('products.name') }}</th>
                <th>{{ __('products.price') }}</th>
                <th>{{ __('products.category') }}</th>
                <th>{{ __('products.actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>${{ number_format($product->price, 2) }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product) }}">{{ __('products.edit') }}</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">{{ __('products.delete') }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
