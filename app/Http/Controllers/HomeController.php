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
    protected $sliderModel;
    protected $serviceModel;
    protected $agendaModel;
    protected $postModel;
    protected $partnerModel;
    protected $infographicModel;

    public function __construct(
        Slider $sliderModel,
        Service $serviceModel,
        Agenda $agendaModel,
        Post $postModel,
        Partner $partnerModel,
        Infographic $infographicModel
    )
    {
        $this->sliderModel = $sliderModel;
        $this->serviceModel = $serviceModel;
        $this->agendaModel = $agendaModel;
        $this->postModel = $postModel;
        $this->partnerModel = $partnerModel;
        $this->infographicModel = $infographicModel;
    }

    public function index()
    {
        $data = [
            'title' => 'Home',
            'subTitle' => null,
            'slider' => $this->sliderModel->where('featured', true)->orderby('sort')->get(),
            'service' => $this->serviceModel->all(),
            'agenda' => $this->agendaModel->orderby('start_date', 'desc')->limit(2)->get(),
            'article' => $this->postModel->where('status', 'Published')->orderby('published_at', 'desc')->limit(4)->get(),
            'partner' => $this->partnerModel->all(),
            'infographic' => $this->infographicModel->all()
        ];

        return view('home', $data);
    }
}