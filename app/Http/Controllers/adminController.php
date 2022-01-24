<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\infaq;
use App\Models\rekap;
use Illuminate\Support\Facades\Hash;
use App\Models\user;


class adminController extends Controller
{
    //
    public function getDana(){
        $getDana = infaq::where('status', 'terkonfirmasi')->sum('jumlah');

        $rekap = rekap::all();

        return view('admin/admin', ['dana' => $getDana, 'rekap' => $rekap]);
    }

    public function rekap(){
        $totalDana = infaq::where('status', 'terkonfirmasi')->sum('jumlah');

        rekap::create([
            'jumlah' => $totalDana,
            'status' => 'belum diumumkan'
        ]);
        
        return redirect('/admin');
    }

    public function umumkan($id){
        $umumkan = rekap::where('id_rekap', $id)->update([
            'status' => 'sudah diumumkan'
        ]);

        if($umumkan){
            return redirect('/admin');
        }
    }

    public function daftar(){
        $password = Hash::make(request('pass'));
        user::create([
            'nama_lengkap' => request('nama'),
            'email' => request('email'),
            'password' => $password,
            'status' => request('status'),
            'nim' => request('nim'),
            'alamat' => request('alamat'),
            'nohp' => request('nope'),
            'role' => 'admin'
        ]);

        return redirect('/admin');
    }

}
