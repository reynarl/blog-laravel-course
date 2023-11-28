<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 ">
            {{ __('Dashboard') }}
        </h2>

        <h3 class="mt-5 font-semibold text-xl">Categorias</h3>
        <ul class="flex justify-between">
            @foreach ($categories as $category)
                <li class="">
                    <a class="" href="{{ route('posts.category', $category) }}">{{ $category->name }}</a>
                </li>
            @endforeach
        </ul>
        <h3 class="mt-5 font-semibold text-xl">Tags</h3>
        <ul class="flex justify-between">
            @foreach ($tags as $tag)
                <li class="">
                    <a class="" href="{{ route('posts.tag', $tag) }}">{{ $tag->name }}</a>
                </li>
            @endforeach
        </ul>
    </x-slot>
</x-app-layout>
