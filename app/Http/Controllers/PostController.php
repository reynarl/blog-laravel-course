<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        //latest ordena de manera descendente pero le podemos indicar conforme a que campo
        $posts = Post::where('status', 2)->latest('id')->get();
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        $similarPosts = Post::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id) //muestra todos excepto el mismo post
            ->where('status', 2)
            ->latest('id') //ordenar de forma ascendente por id
            ->take(4) //muestra 4
            ->get();
        return view('posts.show', compact('post', 'similarPosts'));
    }

    public function category(Category $category)
    {
        $postsByCategories = Post::where('category_id', $category->id)->get();
        return view('posts.category', compact('postsByCategories', 'category'));
    }

    public function tag(Tag $tag)
    {
        //accediento al metodo posts dentro del modelo tag para mostrar y filtrar los posts
        $posts = $tag->posts()->where('status', 2)->latest('id')->get();
        return view('posts.tag', compact('posts', 'tag'));
    }
}
