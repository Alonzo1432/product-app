@php
    // Valores por defecto o vacíos:
    $name        = data_get($product, 'name', '');
    $price       = data_get($product, 'price', '');
    $description = data_get($product, 'description', '');
    $cat_selected= data_get($product, 'category_id', '');
@endphp

<div class="row">
    {{-- Nombre --}}
    <div class="col-md-6 mb-3">
        <label for="name" class="form-label">{{ __('products.name') }}</label>
        <input
            type="text"
            id="name"
            name="name"
            class="form-control @error('name') is-invalid @enderror"
            value="{{ old('name', $name) }}"
            required
        >
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Precio --}}
    <div class="col-md-6 mb-3">
        <label for="price" class="form-label">{{ __('products.price') }}</label>
        <input
            type="number"
            step="0.01"
            id="price"
            name="price"
            class="form-control @error('price') is-invalid @enderror"
            value="{{ old('price', $price) }}"
            required
        >
        @error('price')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Descripción --}}
    <div class="col-12 mb-3">
        <label for="description" class="form-label">{{ __('products.description') }}</label>
        <textarea
            id="description"
            name="description"
            rows="4"
            class="form-control @error('description') is-invalid @enderror"
        >{{ old('description', $description) }}</textarea>
        @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Categoría --}}
    <div class="col-md-6 mb-3">
        <label for="category_id" class="form-label">{{ __('products.category') }}</label>
        <select
            id="category_id"
            name="category_id"
            class="form-select @error('category_id') is-invalid @enderror"
            required
        >
            <option value="">{{ __('products.select_category') }}</option>
            @foreach($categories as $id => $label)
                <option
                    value="{{ $id }}"
                    {{ (string) old('category_id', $cat_selected) === (string) $id ? 'selected' : '' }}
                >
                    {{ $label }}
                </option>
            @endforeach
        </select>
        @error('category_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>
