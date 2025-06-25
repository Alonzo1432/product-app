@extends('layouts.app')

@section('content')
    <h1>{{ __('categories.create') }}</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        @include('categories._form')
        <button type="submit">{{ __('categories.submit') }}</button>
    </form>
@endsection
