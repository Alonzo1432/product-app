<!-- resources/views/products/_form.blade.php -->

<div>
    <label>{{ __('products.name') }}</label>
    <input type="text" name="name" value="{{ old('name', $product->name ?? '') }}" required>
</div>

<div>
    <label>{{ __('products.price') }}</label>
    <input type="number" name="price" step="0.01" value="{{ old('price', $product->price ?? '') }}" required>
</div>

<div>
    <label>{{ __('products.category') }}</label>
    <select name="category_id" required>
        <option value="">{{ __('products.select_category') }}</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ (old('category_id', $product->category_id ?? '') == $category->id) ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
</div>
