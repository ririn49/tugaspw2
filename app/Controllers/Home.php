<?php

namespace App\Controllers;

use App\Models\HomeModel;
use App\Models\SaranModel;

class Home extends BaseController
{
    public function index(): string
    {
        $perusahaanModel = new HomeModel();
        $data['prs'] = $perusahaanModel->first();
        return view('welcome_message', $data);
    }
    public function saran(): string
    {
        $perusahaanModel = new SaranModel();
        $data['prs'] = $perusahaanModel->first();
        return view('hubungikami', $data);
    }
    
}
