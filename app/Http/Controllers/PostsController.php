<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Categories;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function allPosts()
    {
        $categories = [];
        $all_posts = Posts::all();
        $all_categories = Categories::all();

        foreach ($all_categories as $category) {
            $categories[$category->id]['name'] = $category->name;
            $categories[$category->id]['url'] = $category->url;
        }

        return view('all_posts', ['posts' => $all_posts, 'categories' => $categories]);
    }

    public function pagePost($category_url, $post_url) {

        $post = Posts::where('url', '/' . $post_url)->first();
        $category = Categories::where('url', '/' . $category_url)->first();
        if(!($post && $category)) {
            abort(404);
        }
        return view('post', ['post' => $post, 'category' => $category->name]);
    }
}
