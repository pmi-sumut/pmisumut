<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index($page, $slug){
        $article = Page::where('page', $page)->where('slug', $slug)->firstOrFail();
        $data = [
            'page' => $article->page,
            'title' => $article->title,
            'description' => $article->description,
            'pages' => $article
        ];
        return view('page',  $data);
    }
}
