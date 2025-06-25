@csrf

<div class="mb-3">
    <label class="form-label">{{ __('categories.name') }}</label>
    <input type="text" name="name" class="form-control"
        value="{{ old('name', $category->name ?? '') }}" required>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('categories.description') }}</label>
    <textarea name="description" class="form-control">{{ old('description', $category->description ?? '') }}</textarea>
</div>
