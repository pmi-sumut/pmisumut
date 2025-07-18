<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Visitor;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index($slug)
    {
        // Ambil halaman berdasarkan slug
        $article = Page::where('slug', $slug)->firstOrFail();

        Visitor::create([
            'page_id' => $article->id,
            'ip_address' => request()->ip(), 
            'user_agent' => request()->userAgent(),
        ]);

        $data = [
            'page' => 'Page',
            'title' => $article->title,
            'description' => $article->description,
            'pages' => $article,
        ];

        return view('page', $data);
    }
}

