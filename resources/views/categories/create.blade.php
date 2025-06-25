@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ __('categories.create') }}</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @include('categories.partials.form')

        <button type="submit" class="btn btn-primary">{{ __('categories.save') }}</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">{{ __('categories.back') }}</a>
    </form>
</div>
@endsection
