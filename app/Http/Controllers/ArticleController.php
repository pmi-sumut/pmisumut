<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Visitor;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index(Request $request)
    {
        $search = $request->input('q');
        $categorySlug = $request->input('category');

        $query = Post::query();
        $categoryName = 'Semua Artikel';

        if (!empty($categorySlug)) {
            $category = Category::where('slug', $categorySlug)->first();
            if ($category) {
                $categoryName = $category->title;
            }
            $query->whereHas('category', function ($q) use ($categorySlug) {
                $q->where('slug', $categorySlug);
            });
        }

        if (!empty($search)) {
            $query->where('title', 'LIKE', '%' . $search . '%');
        }

        $posts = $query->where('status', 'Published')
                    ->orderBy('published_at', 'desc')
                    ->paginate(5);

        $data = [
            'page' => 'Artikel',
            'title' => $categoryName,
            'description' => $search ? 'Cari: ' . $search : null,
            'article' => $posts,
            'categorySlug' => $categorySlug,
            'populer' => Post::popular()->limit(5)->get()
        ];
        return view('article.index', $data);
    }

    public function show($slug)
    {
        $article = Post::where('slug', $slug)->where('status', 'Published')->firstOrFail();

        Visitor::create([
            'post_id' => $article->id,
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
            'referrer' => url()->current(),
        ]);

        $data = [
            'page' => 'Artikel',
            'title' => 'Detail Artikel',
            'description' => null,
            'article' => $article,
            'populer' => Post::popular()->limit(5)->get()
        ];

        return view('article.show', $data);
    }
}

