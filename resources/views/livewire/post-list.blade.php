<div class=" px-3 lg:px-7 py-6">
    <div class="flex justify-between items-center border-b border-gray-100">
        <div>
            @if ($this->activeCategory || $search)
                <button wire:click="clearFilters()" class="text-gray-800 text-xs mr-3 bg-gray-300 py-1 px-3 rounded">X</button>
            @endif
            @if ($this->activeCategory)
                <x-badge textColor="{{ $this->activeCategory->text_color }}" bgColor="{{ $this->activeCategory->bg_color }}">
                {{ $this->activeCategory->title }}</x-badge>
            @endif
            @if ($search)
                <h1 class="text-gray-600 font-bold">Searching {{ $search }}</h1>
            @endif
        </div>
        <div id="filter-selector" class="flex items-center space-x-4 font-light ">
            <x-checkbox wire:model.live="popular"/>
            <x-label>Popular</x-label>
            <button class="{{ $this->sort === 'desc' ? 'text-gray-900 border-b border-gray-700' : 'text-gray-500'}} py-4" wire:click="setSort('desc')">Latest</button>
            <button class="{{ $this->sort === 'asc' ? 'text-gray-900 border-b border-gray-700' : 'text-gray-500'}} py-4" wire:click="setSort('asc')">Oldest</button>
        </div>
    </div>
    <div class="py-4">
        @foreach ($this->posts as $post)
        <x-posts.post-item :post="$post" />
        @endforeach
    </div>

    <div class="my-3">
        {{ $this->posts->onEachSide(1)->links() }}
    </div>
</div>