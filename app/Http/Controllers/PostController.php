<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use function Psy\sh;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //Post $post, Category $category
    {
        // if category is selected
//        if ($post->category != null) {
//            return view('posts.index', [
//                'posts' => $category->posts
//            ]);
//        }
        // returns all post (recent first)
        return view('posts.index', [
            'posts' => Post::with('category')->get()
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Post $post)
    {
        // getRouteKeyName()
        return view('posts.show')->with('post', $post);
    }
}
