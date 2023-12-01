@if (auth()->user())

    <x-app-layout>
        <div class="container ml-auto mr-auto">
            <h2 class="text-center font-semibold text-xl">Posts</h2>
            @foreach ($posts as $post)
                <p>
                    <li><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></li>
                </p>
            @endforeach

        </div>
    </x-app-layout>

@endif

<h1>Bienvenido</h1>
<div class="btn">
    <a href="login">INGRESAR</a>
</div>
