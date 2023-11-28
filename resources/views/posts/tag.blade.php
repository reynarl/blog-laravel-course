<x-app-layout>
    <div class="container ml-auto mr-auto bg-blend-color-dodge">
        <h2 class="mt-4 text-center font-semibold text-xl">Posts con el Tag: {{ $tag->name }}</h2>
    </div>
    <div>
        <div class="">
            @foreach ($posts as $post)
                <li><a href="{{ route('posts.show', $post) }}">
                        {{ $post->title }}
                    </a></li>
            @endforeach
        </div>
    </div>
</x-app-layout>
