<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Visitor;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Services\VisitorService;

class PageController extends Controller
{
    protected $visitorService;
    protected $pageModel;

    public function __construct(VisitorService $visitorService, Page $pageModel)
    {
        $this->visitorService = $visitorService;
        $this->pageModel = $pageModel;
    }

    public function index($page, $slug)
    {
        $page = $this->pageModel->where('route', $page)->where('slug', $slug)->firstOrFail();

        $this->visitorService->page($page->id);

        $data = [
            'page' => Str::title($page->route),
            'title' => $page->title,
            'description' => $page->description,
            'pages' => $page,
        ];

        return view('page', $data);
    }
}
