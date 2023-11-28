<x-app-layout>
    <div class="container ml-auto mr-auto bg-blend-color-dodge">
        <h2 class="font-semibold text-xl">Categoria: {{ $category->name }}</h2>

        @foreach ($postsByCategories as $postByCategory)
            <li>
                <a href="{{ route('posts.show', $postByCategory) }}">
                    {{ $postByCategory->title }}
                </a>
            </li>
        @endforeach
    </div>
</x-app-layout>
