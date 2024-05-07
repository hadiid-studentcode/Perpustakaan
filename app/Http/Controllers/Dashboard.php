<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Halaman Dashboard',
            'subjudul'    => 'Dashboard'
        ];
        return view('v_dashboard', $data);
    }
}