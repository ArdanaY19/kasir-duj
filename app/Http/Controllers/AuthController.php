<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        $user = User::All();
        if(Auth::attempt($request->only('email','password'))){
            $user = User::where('email', $request->email)->first();
            if($user->role == 'admin'){
                    //Auth::guard('admin')->LoginUsingId($user->id);
                    return redirect('/admin/admin');
                } elseif($user->role == 'head'){
                    //Auth::guard('petani')->LoginUsingId($user->id);
                    return redirect('/ho/head');
                }elseif ($user->role == 'cabang') {
                // Auth::guard('customer')->LoginUsingId($user->id);
                    return redirect('/kc/cabang');
                }elseif ($user->role == 'kasir') {
                    // Auth::guard('customer')->LoginUsingId($user->id);
                        return redirect('/kasir/kasir');
                    }
            }
        return redirect('/login')->with('status', 'Maaf, email dan password anda tidak sesuai. Harap periksa kembali');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('logout', 'Anda yakin ingin keluar ?');
    }

    //homenya admin
    public function admin()
    {
        return view('admin.admin');
    }

    public function head()
    {
        return view('ho.head');
    }

    public function cabang()
    {
        return view('kc.cabang');
    }

    public function kasir()
    {
        return view('kasir.kasir');
    }

}
