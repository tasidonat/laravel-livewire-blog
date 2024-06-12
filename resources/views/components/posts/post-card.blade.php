@props(['post'])
<div>
    <a href="#">
        <div>
            <img class="w-full rounded-xl" src="{{ $post->getThumbnailImage() }}">
        </div>
    </a>
    <div class="mt-3">
        <div class="flex items-center mb-2 gap-x-2">
            @if ($post->categories()->first())
                <x-badge wire:navigate href="{{ route('posts.index', ['category' => $post->categories()->first()->slug]) }}" textColor="{{ $post->categories()->first()->text_color }}" bgColor="{{ $post->categories()->first()->bg_color }}">
                {{ $post->categories()->first()->title }}</x-badge>
            @endif
            <p class="text-gray-500 text-sm">{{ $post->published_at }}</p>
        </div>
        <a href="#" class="text-xl font-bold text-gray-900">{{ $post->title }}</a>
    </div>

</div>