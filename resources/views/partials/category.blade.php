<!-- resources/views/partials/category.blade.php -->

<li class="cat-item cat-item-{{ $category->id }}" style="margin-left: {{ $depth * 20 }}px;">
    <a href="#" wire:click.prevent="setCategory({{ $category->id }})">
        {{ $category->name }}
    </a>
    @if (isset($category->children) && count($category->children) > 0)
        <ul class="sub-categories">
            @foreach ($category->children as $childCategory)
                @include('partials.category', ['category' => $childCategory, 'depth' => $depth + 1])
            @endforeach
        </ul>
    @endif
</li>
