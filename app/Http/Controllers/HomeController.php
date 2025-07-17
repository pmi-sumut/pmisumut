<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Infographic;
use App\Models\Partner;
use App\Models\Post;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Home',
            'subTitle' => null,
            'slider' => Slider::where('featured', true)->orderby('sort')->get(),
            'service' => Service::all(),
            'agenda' => Agenda::orderby('created_at')->limit(2)->get(),
            'article' => Post::where('status', 'Published')->orderby('published_at', 'desc')->limit(4)->get(),
            'agenda' => Agenda::orderby('start_date', 'desc')->limit(2)->get(),
            'partner' => Partner::all(),
            'infographic' =>Infographic::all()
        ];
        return view('home',  $data);
    }
}
