<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Crowdfunding</title>
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous"
        />
        <script
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"
        ></script>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap"
            rel="stylesheet"
        />
        <style>
            body {
                overflow-x: hidden;
            }
            #banner {
                font-family: "Poppins", sans-serif;
            }
        </style>
    </head>
    <body>
        <nav
            class="navbar navbar-expand-lg"
            style="background-color: rgb(21, 32, 50)"
        >
            <a class="navbar-brand" href="/" style="color: white">E-Lazis</a>
            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                @if(isset($_SESSION['nama']))
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="btn btn-primary mr-2" href="/profile" id="banner"
                            >Halo, {{ $_SESSION["nama"] }}</a
                        >
                        <a class="btn btn-danger" href="/logout" id="banner"
                            >Logout</a
                        >
                    </li>
                </ul>
                @else
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="btn btn-primary mr-2" href="/login" id="banner"
                            >Login</a
                        >
                        <a class="btn btn-danger" href="/register" id="banner"
                            >Register</a
                        >
                    </li>
                </ul>
                @endif
            </div>
        </nav>
        <div class="mb-5" id="banner">
            <div
                class="body-login"
                style="background-color: rgb(61, 159, 56); height: 550px"
            >
                <div class="row">
                    <div
                        class="col ml-5 mt-5 p-5 shadow"
                        style="background-color: rgb(248, 197, 43)"
                    >
                        <p class="h1" style="font-size: 70px">Saatnya</p>
                        <p class="h1" style="font-size: 70px">Bantu sesama</p>
                        <p class="h5">
                            Mari saling membantu di masa masa yang sulit.
                        </p>
                        <a class="btn btn-primary mt-3" href="#infaq"
                            >Berbuat Baik Sekarang</a
                        >
                    </div>
                    <div class="col">
                        <img
                            src="images/dok.png"
                            alt="illust"
                            style="
                                width: 75%;
                                margin-left: 100px;
                                margin-top: 70px;
                                border-radius: 10px;
                            "
                        />
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="container mt-5 mb-4" id="banner">
                <div class="row mt-3">
                    <div class="col">
                        <p class="h1" style="font-size: 35px">
                            Daftar Crowdfunding saat ini
                        </p>
                        <a class="font-size: 15px" href="/allCrowdfunding"
                            >Lihat semua Crowdfunding</a
                        >
                        <div class="card-deck">
                            @if(count($crowdfunding) < 1)
                            <p>Belum ada Crowdfunding...</p>
                            @else @foreach($crowdfunding as $data)
                            <div class="card mt-3">
                                <img class="card-img-top" src={{ asset('storage/' . $data->gambar)}}
                                alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">
                                        {{ $data->nama }}
                                    </h5>
                                    <p class="card-text">
                                        Rp. {{ $data->jumlah_uang }}
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <a
                                        href="/detailCrowdfundingUser/{{ $data->id_crowdfunding }}"
                                        class="btn btn-success w-100"
                                        >Lihat Data</a
                                    >
                                </div>
                            </div>
                            @endforeach @endif
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <p class="h1" style="font-size: 35px">
                            Hal hal yang harus kamu ketahui
                        </p>
                        <p class="h2 mt-2 mb-4" style="font-size: 15px">
                            Sebelum kamu mulai, yuk baca beberapa hal dibawah
                            ini ^^
                        </p>
                        <p>
                            - Setiap uang yang dikumpulkan akan diberikan kepada
                            Pihak yang bersangkutan dalam pengadaan Crowdfuding
                        </p>
                        <p>
                            - Setelah melakukan Transfer, Pihak Admin akan
                            segera melakukan pengecekan dan apabila sudah
                            terverifikasi maka uang akan masuk ke dalam Rekening
                            kami
                        </p>
                        <p>
                            - Setiap orang bisa melakukan Crowdfunding jika
                            sudah memiliki akun di Web E-Lazis
                        </p>
                        <p>
                            - Hasil Donasi bisa kamu cek di Profil masing masing
                            loh
                        </p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <p class="h1" style="font-size: 35px">
                            Pengen Ngadain Crowdfunding juga ?
                        </p>
                        <p class="h2 mt-2 mb-4" style="font-size: 15px">
                            Kamu juga bisa lho ngadain Crowdfunding ^^
                        </p>
                        <p style="font-size: 15px">
                            Silahkan hubungi Kontak admin untuk mengadakan
                            Crowdfunding, nantinya Admin akan melakukan
                            Verifikasi dan Proses Crowdfunding bisa segera
                            dimulai loh !
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div style="background-color: rgb(21, 32, 50); height: 325px">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p
                            class="h1 mt-5"
                            style="font-size: 30px; color: white"
                        >
                            Tentang Kami
                        </p>
                        <p
                            class="h4 mt-5"
                            style="font-size: 15px; color: white"
                        >
                            LAZISSU merupakan singkatan dari Lazis Syamsul Ulum
                            LAZISSU merupakan Lembaga Amil Zakat, Infak dan
                            Shodaqoh, serta Wakaf di Masjid Syamsul Ulum, Telkom
                            University. LAZISSU merupakan mitra resmi Rumah
                            Zakat sejak
                        </p>
                    </div>
                    <div class="col">
                        <p
                            class="h1 mt-5"
                            style="font-size: 30px; color: white"
                        >
                            Contact Us
                        </p>
                        <p
                            class="h4 mt-5"
                            style="font-size: 15px; color: white"
                        >
                            Bandung
                        </p>
                        <p class="h4" style="font-size: 15px; color: white">
                            082219171615 / 081314918127
                        </p>
                        <p class="h4" style="font-size: 15px; color: white">
                            lazissyamsululum@gmail.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
