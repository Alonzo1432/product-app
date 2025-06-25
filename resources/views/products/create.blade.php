@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ __('products.create') }}</h1>

    <form action="{{ route('products.store') }}" method="POST">
        {{-- Incluimos el partial y pasamos $categories --}}
        @include('products.partials.form', ['categories' => $categories])

        <button type="submit" class="btn btn-primary">{{ __('products.save') }}</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">{{ __('products.back') }}</a>
    </form>
</div>
@endsection
