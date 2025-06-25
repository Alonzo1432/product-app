<div>
    <label>{{ __('categories.name') }}</label>
    <input type="text" name="name" value="{{ old('name', $category->name ?? '') }}" required>
</div>

<div>
    <label>{{ __('categories.description') }}</label>
    <textarea name="description">{{ old('description', $category->description ?? '') }}</textarea>
</div>
