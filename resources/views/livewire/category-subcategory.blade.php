<div>
    <label for="category_id" class="fw-bold mb-2">Select A Category for Your Product</label>
    <select class="form-control mb-2" wire:model.live="selectedCategory">
        <option value="">Select A Category</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
        @endforeach
    </select>

    {{-- {{ $selectedCategory}} --}}
    <label for="subcategory_id" class="fw-bold mb-2">Select Sub Category for Your Product</label>

    <select class="form-control mb-2">
        <option value="">Select A Sub Category</option>
        @foreach ($subcategories as $subcategory)
            <option value="{{ $subcategory->id }}">{{ $subcategory->subcategory_name }}</option>
        @endforeach
    </select>
</div>
