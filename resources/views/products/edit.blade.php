@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ __('products.edit') }}</h1>

    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')

        {{-- Incluimos el mismo partial, enviando también el producto --}}
        @include('products.partials.form', [
            'product'    => $product,
            'categories' => $categories,
        ])

        <div class="mt-4">
            <button type="submit" class="btn btn-primary">
                {{ __('products.save') }}
            </button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">
                {{ __('products.back') }}
            </a>
        </div>
    </form>
</div>
@endsection
