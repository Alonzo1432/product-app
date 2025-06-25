@csrf

<div class="mb-3">
    <label class="form-label">{{ __('products.name') }}</label>
    <input
        type="text"
        name="name"
        class="form-control"
        value="{{ old('name', $product->name ?? '') }}"
        required
    >
</div>

<div class="mb-3">
    <label class="form-label">{{ __('products.price') }}</label>
    <input
        type="number"
        name="price"
        step="0.01"
        class="form-control"
        value="{{ old('price', $product->price ?? '') }}"
        required
    >
</div>

<div class="mb-3">
    <label class="form-label">{{ __('products.description') }}</label>
    <textarea
        name="description"
        class="form-control"
    >{{ old('description', $product->description ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('products.category') }}</label>
    <select name="category_id" class="form-select" required>
        <option value="">{{ __('products.back') }}— Selecciona —</option>

        @foreach($categories as $cat)
            <option
                value="{{ $cat->id }}"
                {{ old('category_id', $product->category_id ?? '') == $cat->id ? 'selected' : '' }}
            >
                {{ $cat->name }}
            </option>
        @endforeach
    </select>
</div>
