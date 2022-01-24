<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\infaq;
use Illuminate\Support\Facades\Storage;


class infaqController extends Controller
{
    //
    public function infaqAwal(){
        session_start();
        $bukti = request('image')->store('bukti-transfer');

        $anon = request('anon') ? 'on' : 'off';
        infaq::create([
            'nama' => $_SESSION['nama'],
            'email' => $_SESSION['email'],
            'id_user' => $_SESSION['id'],
            'jumlah' => request('uang'),
            'status' => 'diterima',
            'bukti' => $bukti,
            'anon' => $anon
        ]);

        return redirect('/');
    }

    public function getInfaq(){
        $listInfaq = infaq::orderBy('id_infaq', 'desc')->skip(0)->take(3)->get();

        return view('infaq/infaq', ['infaqs' => $listInfaq]);
    }

    public function getInfaqAdmin(){
        $listInfaq = infaq::where('status', 'diterima')->get();

        return view('admin/adminInfaq', ['infaqs' => $listInfaq]);
    }

    public function konfirmasiInfaq($id){
        $konfirmasi = infaq::where('id_infaq', $id)->update([
            'status' => 'terkonfirmasi'
        ]); 

        if($konfirmasi){
            return redirect('/admin');
        }
    }
}
