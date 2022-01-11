<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class authController extends Controller
{
    //
    public function registrasi(){
        user::create([
            'nama_lengkap' => request('nama'),
            'email' => request('email'),
            'password' => request('pass'),
            'status' => request('status'),
            'nim' => request('nim'),
            'alamat' => request('alamat'),
            'nohp' => request('nope')
        ]);

        return redirect('/login');
    }

    public function login(){
        $email = request('email');
        $pass = request('pass');
        $findUser = user::where('email', $email)->where('password',$pass)->get();

        $resultUser = json_decode(json_encode($findUser), true);

        if(count($resultUser) > 0){
            return redirect('http://127.0.0.1:8000/');
        }
    }
}
