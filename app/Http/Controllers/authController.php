<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    //
    public function registrasi(){
        $password = Hash::make(request('pass'));

        $role = request('nama') == 'admin' ? 'admin' : 'user';

        user::create([
            'nama_lengkap' => request('nama'),
            'email' => request('email'),
            'password' => $password,
            'status' => request('status'),
            'nim' => request('nim'),
            'alamat' => request('alamat'),
            'nohp' => request('nope'),
            'role' => $role
        ]);

        return redirect('/login');
    }

    public function login(){
        $email = request('email');
        $pass = request('pass');
        $findUser = user::where('email', $email)->get();

        $resultUser = json_decode(json_encode($findUser), true);

        if(count($resultUser) > 0){
            $passData = $resultUser[0]['password'];
            if(Hash::check(request('pass'), $passData)){
                if($resultUser[0]['nama_lengkap'] == 'admin' || $resultUser[0]['role'] == 'admin'){
                    session_start();
                    $_SESSION['id'] = $resultUser[0]['id_user'];
                    $_SESSION['email'] = $resultUser[0]['email'];
                    $_SESSION['nama'] = $resultUser[0]['nama_lengkap'];
                    $_SESSION['role'] = $resultUser[0]['role'];
                    return redirect('/admin');
                }else{
                    session_start();
                    $_SESSION['id'] = $resultUser[0]['id_user'];
                    $_SESSION['email'] = $resultUser[0]['email'];
                    $_SESSION['nama'] = $resultUser[0]['nama_lengkap'];
                    $_SESSION['role'] = $resultUser[0]['role'];
                    return redirect('/');
                }
            }
        }else{
            return redirect('/?gagal=true');
        }
    }

    public function logout(){
        session_start();

        session_unset();

        session_destroy();

        return redirect('/');
    }
}
