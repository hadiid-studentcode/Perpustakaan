<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


class Login extends BaseController
{

    protected $users;

    public function __construct(User $users){

        $this->users = $users;
    }

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

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function registerData(Request $request)
    {
        try {


            if ($request->password == $request->passwordRetype) {

              $data = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
              ];

              $this->users->getData($data);

              return back()->with('success', 'Register Berhasil');



            } else {
               return back()->with('error', 'Password Tidak Sama');
            }
        } catch (Exception $e) {
            return back()->with('error', 'Terjadi Kesalahan');
        }

        return 'registerData';
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function settings(){
        return view('v_settings')
        ->with('judul', 'Settings')
        ->with('subjudul', 'Settings')
        ;
    }
}
