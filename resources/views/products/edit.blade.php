<!-- resources/views/products/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>{{ __('products.edit') }}</h1>

    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')
        @include('products._form')
        <button type="submit">{{ __('products.submit') }}</button>
    </form>
@endsection
