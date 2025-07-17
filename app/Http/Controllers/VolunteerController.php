<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function youthRedCross(){
        $data = [
            'page' => 'Relawan',
            'title' => 'Palang Merah Remaja (PMR)',
            'description' => 'Adalah wadah kegiatan remaja di sekolah atau lembaga pendidikan normal dalam kepalangmerahan melalui program kegiatan ekstra kurikuler.'
        ];
        return view('volunteer.youth-red-cross',  $data);
    }
}
