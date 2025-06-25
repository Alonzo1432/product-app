<!-- resources/views/products/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>{{ __('products.create') }}</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        @include('products._form')
        <button type="submit">{{ __('products.submit') }}</button>
    </form>
@endsection
