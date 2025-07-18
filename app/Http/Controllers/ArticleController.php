<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Visitor;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Services\VisitorService;

class ArticleController extends Controller
{
    protected $visitorService;
    protected $postModel;
    protected $categoryModel;

    public function __construct(VisitorService $visitorService, Post $post, Category $category)
    {
        $this->visitorService = $visitorService;
        $this->postModel = $post;
        $this->categoryModel = $category;
    }

    public function index(Request $request)
    {
        $search = $request->input('q');
        $categorySlug = $request->input('category');

        $query = $this->postModel->query(); 
        $categoryName = 'Semua Artikel';

        if ($categorySlug) {
            $category = $this->categoryModel->where('slug', $categorySlug)->first();
            if ($category) {
                $categoryName = $category->title;
                $query->whereHas('category', function ($q) use ($categorySlug) {
                    $q->where('slug', $categorySlug);
                });
            }
        }

        if ($search) {
            $query->where('title', 'LIKE', '%' . $search . '%');
        }

        $posts = $query->where('status', 'Published')
                        ->orderBy('published_at', 'desc')
                        ->paginate(5);

        return view('article.index', [
            'page' => 'Artikel',
            'title' => $categoryName,
            'description' => $search ? 'Cari: ' . $search : null,
            'article' => $posts,
            'categorySlug' => $categorySlug,
            'populer' => $this->postModel->popular()->limit(5)->get()
        ]);
    }

    public function show($slug)
    {
        $article = $this->postModel->where('slug', $slug)->where('status', 'Published')->firstOrFail();

        $this->visitorService->post($article->id);

        return view('article.show', [
            'page' => 'Artikel',
            'title' => 'Detail Artikel',
            'description' => null,
            'article' => $article,
            'populer' => $this->postModel->popular()->limit(5)->get()
        ]);
    }
}