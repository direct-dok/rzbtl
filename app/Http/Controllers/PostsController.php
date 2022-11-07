<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Categories;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;

class PostsController extends Controller
{
    public function allPosts()
    {
        $all_posts = Posts::all();
        $categories = $this->getCategories();

        return view('all_posts', ['posts' => $all_posts, 'categories' => $categories]);
    }

    public function pagePost($category_url, $post_url) {

        $post = Posts::where('url', '/' . $post_url)->first();
        $category = Categories::where('url', '/' . $category_url)->first();
        if(!($post && $category)) {
            abort(404);
        }
        return view('post', ['post' => $post, 'category' => $category]);
    }

    public function addPost()
    {
        if(!Gate::allows('access-admin')) {
            abort(403);
        }
        $all_categories = Categories::all();
        return view('add_post', ['categories' => $all_categories]);
    }

    public function savePost(Request $request)
    {
        if(!Gate::allows('access-admin')) {
            abort(403);
        }
        $path_img = $request->file('image')->store('uploads', 'public_img');

        Posts::create([
            'title' => $request->title,
            'preview' => $request->preview,
            'content' => $request->content,
            'image' => '/storage/images/' . $path_img,
            'url' => $request->url,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'keywords' => $request->keywords,
            'create_date' => date('Y-m-d h:i:s'),
            'edit_date' => date('Y-m-d h:i:s'),
        ]);

        return redirect()->route('home');
    }

    public function showAllPosts(User $user)
    {
        if(!Gate::allows('access-admin')) {
            abort(403);
        }
        $posts = Posts::all();
        $categories = $this->getCategories();
        return view('all_posts_admin', ['posts' => $posts, 'categories' => $categories]);
    }

    protected function getCategories()
    {
        $all_categories = Categories::all();
        $categories = [];

        foreach ($all_categories as $category) {
            $categories[$category->id]['name'] = $category->name;
            $categories[$category->id]['url'] = $category->url;
        }

        return $categories;
    }

    public function showEditPostForm(Posts $post)
    {
        if(!Gate::allows('access-admin')) {
            abort(403);
        }
        $categories = Categories::all();
        return view('edit_post', ['post' => $post, 'categories' => $categories]);
    }

    public function updatePost(Request $request, Posts $post)
    {
        if(!Gate::allows('access-admin')) {
            abort(403);
        }
        $array_post_data = [
            'title' => $request->title,
            'preview' => $request->preview,
            'content' => $request->content,
            'url' => $request->url,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'keywords' => $request->keywords,
            'updated_at' => strtotime("now"),
        ];

        if($request->file('image')) {
            $arr_path_img = explode('/', $post->image);
            Storage::disk('public')->delete('\\images\\uploads\\' . end($arr_path_img));
            $array_post_data['image'] = '/storage/images/' . $request->file('image')->store('uploads', 'public_img');
        }

        $post->fill($array_post_data);
        $post->save();
        return redirect()->route('home');
    }

    public function showDeletePostForm(Posts $post)
    {
        if(!Gate::allows('access-admin')) {
            abort(403);
        }
        return view('delete_post', ['post' => $post]);
    }

    public function deletePost(Posts $post)
    {
        if(!Gate::allows('access-admin')) {
            abort(403);
        }
        $post->delete();
        return redirect()->route('home');
    }

    public function categoryPosts($category)
    {
        $category = Categories::where('url', '/' . $category)->first();
        if(!$category) {
            abort(404);
        }

        $posts = $category->posts;
        $categories = $this->getCategories();

        return view('all_posts', ['posts' => $posts, 'categories' => $categories, 'category' => $category]);
    }
}
