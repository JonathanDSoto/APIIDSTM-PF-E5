<div class="container">
    <div class="row row-cols-3 gap-3">
        @foreach ($categories as $category)
        <x-generic-card
            title="{{ $category->name }}"
            description=""
            price=""
            imagePath="{{ $category->image_url }}"
            route="{{ route('category.show', $category->id) }}"
        />
        @endforeach
    </div>
</div>
