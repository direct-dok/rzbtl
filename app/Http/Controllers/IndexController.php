<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return response('Это главная страница сайта!!')
                    ->header('Content-Type', 'text/plain');
    }

    public function detail(Pages $pages)
    {
        $result = $pages->title . "<br>";
        $result .= $pages->content . "<br>";
        $result .= $pages->url . "<br>";
        return response($result)
            ->header('Content-Type', 'text/plain');
    }
}
