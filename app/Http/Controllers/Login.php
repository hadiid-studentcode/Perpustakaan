<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Routing\Controller as BaseController;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Halaman Login',
            'subjudul'    => 'Login'
        ];
        return view('v_login', $data);
    }

    public function Register()
    {
        $data = [
            'judul' => 'Halaman Register',
            'subjudul'    => 'Register'
        ];
        return view('v_register', $data);
    }
}