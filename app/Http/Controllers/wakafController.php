<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wakaf;
use Illuminate\Support\Facades\Storage;

class wakafController extends Controller
{
    //
    public function wakaf(){
        session_start();
        $bukti = request('image')->store('wakaf-barang');
        wakaf::create([
            'nama' => $_SESSION['nama'],
            'email' => $_SESSION['email'],
            'id_user' => $_SESSION['id'],
            'nama_barang' => request('nama'),
            'deskripsi_barang' => request('desk'),
            'tanggal_pemberian' => request('tgl'),
            'nomer_dihubungi' => request('nope'),
            'status' => 'diterima',
            'bukti' => $bukti,
            'anon' => request('anon')
        ]);

        return redirect('/waqaf');
    }

    public function getAllWakaf(){
        $listWakaf = wakaf::all();

        return view('admin/wakaf', ['wakaf' => $listWakaf]);
    }

    public function konfirmasi($id){
        $konfirmasi = wakaf::where('id_wakaf', $id)->update([
            'status' => 'terkonfirmasi'
        ]); 

        return redirect('/wakafAdmin');
    }
}
