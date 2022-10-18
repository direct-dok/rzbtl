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
}
