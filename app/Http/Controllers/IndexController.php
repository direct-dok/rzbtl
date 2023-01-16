<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

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
            return view('page', ['page' => $page]);
        } else {
            abort(404);
        }
    }

    public function showAllPages()
    {
        if(!Gate::allows('access-admin')) {
            abort(403);
        }
        $pages = Pages::all();
        return view('all_pages', ['pages' => $pages]);
    }

    public function showAddPageForm()
    {
        if(!Gate::allows('access-admin')) {
            abort(403);
        }
        return view('add_page');
    }

    public function savePage(Request $request)
    {
        if(!Gate::allows('access-admin')) {
            abort(403);
        }
        Pages::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'content' => $request->content,
            'url' => $request->url,
            'seo_title' => $request->seo_title,
            'description' => $request->description,
            'keywords' => $request->keywords,
        ]);

        return redirect()->route('page.all');
    }

    public function showEditPageForm(Pages $pg)
    {
        if(!Gate::allows('access-admin')) {
            abort(403);
        }
        return view('edit_page', ['page' => $pg]);
    }

    public function updatePage(Request $request, Pages $pg)
    {
        if(!Gate::allows('access-admin')) {
            abort(403);
        }
        $pg->fill([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'content' => $request->content,
            'url' => $request->url,
            'seo_title' => $request->seo_title,
            'description' => $request->description,
            'keywords' => $request->keywords,
        ]);

        $pg->save();
        return redirect()->route('page.all');
    }

    public function showDeletePageForm(Pages $pg)
    {
        if(!Gate::allows('access-admin')) {
            abort(403);
        }
        return view('delete_page', ['page' => $pg]);
    }

    public function deletePage(Pages $pg)
    {
        if(!Gate::allows('access-admin')) {
            abort(403);
        }
        $pg->delete();
        return redirect()->route('page.all');
    }
}
