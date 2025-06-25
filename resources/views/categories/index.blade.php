@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ __('categories.title') }}</h1>

    <a href="{{ route('categories.create') }}" class="btn btn-success mb-3">
        {{ __('categories.create') }}
    </a>

    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>{{ __('categories.name') }}</th>
                <th>{{ __('categories.description') }}</th>
                <th>{{ __('categories.actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @forelse($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>
                        <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-warning">
                            {{ __('categories.edit') }}
                        </a>
                        <form action="{{ route('categories.destroy', $category) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('¿Seguro que deseas eliminar esta categoría?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                {{ __('categories.delete') }}
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No hay categorías registradas.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
