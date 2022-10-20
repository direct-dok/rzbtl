<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $page = Pages::where('url', 'front')->first();
        return view('index', ['page' => $page]);
    }

    public function show_page($url)
    {
        $page = Pages::where('url', $url)->first();
        if($page) {
            $result = $page->title . "<br>";
            $result .= $page->content . "<br>";
            $result .= $page->url . "<br>";
        } else {
            abort(404);
        }

        return response($result)
            ->header('Content-Type', 'text/html');
    }

    public function showAllPages()
    {
        $pages = Pages::all();
        return view('all_pages', ['pages' => $pages]);
    }

    public function showAddPageForm()
    {
        return view('add_page');
    }

    public function savePage(Request $request)
    {
        Pages::create([
            'title' => $request->title,
            'content' => $request->content,
            'url' => $request->url,
            'description' => $request->description,
            'keywords' => $request->keywords,
        ]);

        return redirect()->route('home');
    }

    public function showEditPageForm(Pages $pg)
    {
        return view('edit_page', ['page' => $pg]);
    }

    public function updatePage(Request $request, Pages $pg)
    {
        $pg->fill([
            'title' => $request->title,
            'content' => $request->content,
            'url' => $request->url,
            'description' => $request->description,
            'keywords' => $request->keywords,
        ]);

        $pg->save();
        return redirect()->route('home');
    }

    public function showDeletePageForm(Pages $pg)
    {
        return view('delete_page', ['page' => $pg]);
    }

    public function deletePage(Pages $pg)
    {
        $pg->delete();
        return redirect()->route('home');
    }
}
