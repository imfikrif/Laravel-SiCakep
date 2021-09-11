<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function auth_login(Request $req)
    {
        $nik        = $req->nik;
        $pass       = $req->password;

        $cek_login  = User::where([
            ['nik', '=' , $nik],
            ['password', '=', $pass]
        ])->first();

        // dd($cek_login);

        if(!empty($cek_login)){
            // dd($cek_login);
            Session::put('nama', 'Admin');
            return redirect('dashboard');
        } else {
            return back()->with('status', 'Gagal login!');
        }
    }

    public function logout()
    {
        session_unset();
        return redirect('/');
    }
}
