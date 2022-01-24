<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crowdfunding;
use App\Models\transaksiCrowdfunding;
use Illuminate\Support\Facades\Storage;

class crowdfundingController extends Controller
{
    //
    public function createCrowdfunding() {
        $gambar = request('image')->store('crowdfunding-image');

        crowdfunding::create([
            'nama' => request('nama'),
            'deskripsi' => request('desc'),
            'deadline' => request('deadline'),
            'tujuan' => request('penyelenggara'),
            'kategori' => request('kategori'),
            'gambar' => $gambar,
            'status' => 'ongoing',
            'jumlah_uang' => 0
        ]);

        return redirect('/crowdfundingAdmin');
    }

    public function viewCrowdfundingAdmin(){
        $listCrowdfunding = crowdfunding::all();

        return view('admin/daftarCrowdfunding', ['crowdfunding' => $listCrowdfunding]);
    }

    public function getDetailCrowdfundingAdmin($id){
        $detailCrowdfunding = crowdfunding::where('id_crowdfunding', $id)->get();

        return view('admin/detailCrowdfundingAdmin', ['detailCrowdfunding' => $detailCrowdfunding]);
    }

    public function tutupCrowdfunding($id){
        $tutupCrowdfunding = crowdfunding::where('id_crowdfunding', $id)->update([
            'status' => 'ditutup'
        ]);

        if($tutupCrowdfunding){
            return redirect('/daftarCrowdfunding');
        }
    }

    public function getAllCrowdfunding(){
        $getCrowdfunding = crowdfunding::where('status', 'ongoing')->skip(0)->take(3)->get();

        return view('crowdfunding/crowdfunding', ['crowdfunding' => $getCrowdfunding]);
    }

    public function getCrowdfunding(){
        $getCrowdfunding = crowdfunding::where('status', 'ongoing')->get();

        return view('crowdfunding/allCrowdfunding', ['crowdfunding' => $getCrowdfunding]);
    }

    public function getDetailCrowdfunding($id){
        $getCrowdfunding = crowdfunding::where('id_crowdfunding', $id)->get();

        return view('crowdfunding/detailCrowdfunding', ['crowdfunding' => $getCrowdfunding]);
    }

    public function donasi(){
        session_start();
        $bukti = request('image')->store('bukti-transfer-crowdfunding');
        transaksiCrowdfunding::create([
            'nama' => $_SESSION['nama'],
            'email' => $_SESSION['email'],
            'id_user' => $_SESSION['id'],
            'jumlah' => request('jumlah'),
            'status' => 'diterima',
            'bukti' => $bukti,
            'anon' => request('anon'),
            'id_crowdfunding' => request('id'),
            'message' => request('msg')
        ]);

        return redirect('/allCrowdfunding');
    }

    public function getTransaksi(){
        $getTransaksi = transaksiCrowdfunding::all()->where('status', 'diterima');

        return view('admin/beasiswa', ['transaksi' => $getTransaksi]);
    }

    public function konfirmasi($idC, $idU){

        $dana = crowdfunding::select('jumlah_uang')->where('id_crowdfunding', $idC)->value('jumlah_uang');
        // ddd($dana);

        $danaUser = transaksiCrowdfunding::select('jumlah')->where('id_donasi', $idU)->value('jumlah');

        $total = $dana + $danaUser;

        $updateCrowdfunding = crowdfunding::where('id_crowdfunding', $idC)->update([
            'jumlah_uang' => $total
        ]);

        $updateStatus = transaksiCrowdfunding::where('id_donasi', $idU)->update([
            'status' => 'terkonfirmasi'
        ]);

        return redirect('/crowdfundingAdmin');
    }

}
