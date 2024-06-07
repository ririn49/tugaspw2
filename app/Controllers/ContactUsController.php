<?php

namespace App\Controllers;

use App\Models\SaranModel;
use CodeIgniter\Controller;
use App\Models\HomeModel;

class ContactUsController extends Controller
{
    public function index()
    { 
        $perusahaanModel = new HomeModel();
        $data['prs'] = $perusahaanModel->first();
        return view('contact_us',$data);
    }

    public function send()
    {
        $saranModel = new SaranModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'pesan' => $this->request->getPost('pesan')
        ];

        $saranModel->insert($data);

        return redirect()->back()->with('success', 'Pesan telah terkirim!');
    }
}
