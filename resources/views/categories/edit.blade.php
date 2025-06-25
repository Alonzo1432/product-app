@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ __('categories.edit') }}</h1>

    <form action="{{ route('categories.update', $category) }}" method="POST">
        @method('PUT')
        @include('categories.partials.form')

        <button type="submit" class="btn btn-primary">{{ __('categories.save') }}</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">{{ __('categories.back') }}</a>
    </form>
</div>
@endsection
