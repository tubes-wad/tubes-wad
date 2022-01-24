<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\infaq;
use App\Models\transaksiCrowdfunding;
use App\Models\wakaf;

class userController extends Controller
{
    //
    public function getProfile(){
        session_start();

        $getDataUser = user::all()->where('id_user', $_SESSION['id']);

        $getDataInfaq = infaq::all()->where('id_user', $_SESSION['id']);

        $getDataCrowdfunding = transaksiCrowdfunding::all()->where('id_user', $_SESSION['id']);

        $getDataWakaf = wakaf::all()->where('id_user', $_SESSION['id']);

        return view('profile', ['dataUser' => $getDataUser, 'infaqs' => $getDataInfaq, 'transaksi' => $getDataCrowdfunding, 'wakaf' => $getDataWakaf]);
    }
}
