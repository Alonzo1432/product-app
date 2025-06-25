@extends('layouts.app')

@section('content')
    <h1>{{ __('categories.edit') }}</h1>

    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')
        @include('categories._form')
        <button type="submit">{{ __('categories.submit') }}</button>
    </form>
@endsection
