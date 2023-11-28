<x-app-layout>
    <div class="container ml-auto mr-auto bg-blend-color-dodge">
        <h2 class="mt-4 text-center font-semibold text-xl">{{ $post->title }}</h2>
        <div class="flex justify-center">
            @foreach ($post->tags as $tag)
                <p class="bg-gray-700 rounded-full px-3 py-3 text-sm">{{ $tag->name }}</p>
            @endforeach
        </div>
        <p class="mt-5">{{ $post->body }}</p>
    </div>
    <div>
        <h2 class="mt-6 mb-6">Entradas similares</h2>
        <div class="flex align-middle justify-between">
            @foreach ($similarPosts as $similarPost)
                <a href="{{ route('posts.show', $similarPost) }}">
                    {{ $similarPost->title }}
                </a>
            @endforeach
        </div>
    </div>
</x-app-layout>
