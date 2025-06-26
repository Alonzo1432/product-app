@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">{{ __('products.create') }}</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        {{-- Incluimos el partial y le pasamos $categories --}}
        @include('products.partials.form', [
            'product'    => old(),        // para reutilizar el partial tanto en create como en edit
            'categories' => $categories
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
