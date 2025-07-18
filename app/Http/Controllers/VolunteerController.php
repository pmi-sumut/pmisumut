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

    public function volunteerCorps(){
        $data = [
            'page' => 'Relawan',
            'title' => 'Korps Sukarela (KSR)',
            'description' => 'Unit bagi individu yang secara sukarela menjadi anggota KSR. anda dapat mendaftar di kantor PMI setempat atau bergabung dengan Unit Kegiatan Mahasiswa (UKM) di universitas anda.'
        ];
        return view('volunteer.volunteer-corps',  $data);
    }

    public function voluntaryWorkforce(){
        $data = [
            'page' => 'Relawan',
            'title' => 'Tenaga Sukarela (TSR)',
            'description' => 'Anggota PMI yang direkrut dari masyarakat dengan keterampilan profesional khusus, seperti dokter, ahli gizi, akuntan, jurnalis, seniman, guru, dll.'
        ];
        return view('volunteer.voluntary-workforce',  $data);
    }
}
