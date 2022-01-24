<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Home</title>
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
                        <a
                            class="btn btn-primary mr-2"
                            href="/profile"
                            id="banner"
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
                        <a
                            class="btn btn-primary mr-2"
                            href="/login"
                            id="banner"
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
        @if(isset($_GET['gagal']))
        <div
            id="banner"
            style="background-color: rgb(220, 53, 69); color: white"
        >
            Password Salah
        </div>
        @endif
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
                        <p class="h1" style="font-size: 70px">Bantu</p>
                        <p class="h1" style="font-size: 70px">Bersama</p>
                        <p class="h5">
                            Mari saling membantu di masa masa yang sulit.
                        </p>
                        <a class="btn btn-primary mt-3" href=""
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
        <div class="container" id="banner">
            <p class="h1" style="font-size: 35px">
                Lazissu
            </p>
            <p class="h1" style="font-size: 20px">Berbagai Macam Kebaikan</p>
            <div class="row mt-4 mb-4">
                <div
                    class="col shadow mr-3"
                    style="
                        background-color: rgb(248, 197, 43);
                        border-radius: 5px;
                    "
                >
                    <center>
                        <p class="h1 mt-4" style="font-size: 30px">Infaq</p>
                    </center>
                    <p class="h3 mt-4" style="font-size: 15px">
                        Infaq adalah mengeluarkan harta yang Pokok. mencakup
                        zakat dan non-zakat. Infak wajib di antaranya zakat,
                        kafarat, nazar, dan lain-lain.
                    </p>
                    <a class="btn btn-primary mt-2 mb-3" href="/infaq">Infaq</a>
                </div>
                <div
                    class="col shadow mr-3"
                    style="
                        background-color: rgb(248, 197, 43);
                        border-radius: 5px;
                    "
                >
                    <center>
                        <p class="h1 mt-4" style="font-size: 30px">
                            Crowdfunding
                        </p>
                    </center>
                    <p class="h3 mt-4" style="font-size: 15px">
                        Yuk bantu sesama dalam masa masa sulit! LAZISSU
                        memberikan bantuan untuk semua kalangan demi kebaikan
                        bersama loh!
                    </p>
                    <a class="btn btn-primary" href="/crowdfunding"
                        >Crowdfunding</a
                    >
                </div>
                <div
                    class="col shadow"
                    style="
                        background-color: rgb(248, 197, 43);
                        border-radius: 5px;
                    "
                >
                    <center>
                        <p class="h1 mt-4" style="font-size: 30px">Waqaf</p>
                    </center>
                    <p class="h3 mt-4" style="font-size: 15px">
                        Telah hadir Program Bantuan TPA. Mari kita Wujudkan 1
                        santri 1 Quran/Iqro Paket yang tersedia : Wakaf Quran &
                        Iqra 1 paket Quran + Iqra Wakaf seharga 75.000
                    </p>
                    <a class="mt-3 btn btn-primary" href="/waqaf">Waqaf</a>
                </div>
            </div>
        </div>
        <div class="container mt-5 mb-4" id="banner">
            <p class="h1" style="font-size: 35px">Event Saat Ini</p>
            <p class="h1" style="font-size: 20px">
                Kebaikan yang sedang kami lakukan
            </p>
            <div class="row mt-5">
                <div class="col">
                    <p class="h1 mt-4" style="font-size: 30px">
                        Berbagi Beras Untuk Lansia
                    </p>
                    <p class="h3 mt-4" style="font-size: 15px">
                        Sahabat LAZISSU, begitu banyak lansia yang dipuncak
                        usianya masih harus bersusah payah dalam menanggung
                        kehidupannya. Padahal selayaknya mereka tinggal
                        istirahat di rumah dengan banyak beribadah. Namun
                        kenyataannya tidak seindah dengan buku perkembangan
                        manusia. Masih banyak yang bersusah bahkan tanpa sanak
                        saudara.
                    </p>
                </div>
                <div class="col">
                    <img
                        src="images/event-1.png"
                        alt="event-1"
                        style="width: 103%; height: 90%"
                    />
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <img
                        src="images/event-2.png"
                        alt="event-1"
                        style="width: 103%; height: 90%"
                    />
                </div>
                <div class="col">
                    <p class="h1 mt-4" style="font-size: 30px">
                        Pembinaan Anak Yatim Dhuafa
                    </p>
                    <p class="h3 mt-4" style="font-size: 15px">
                        Mengapa akhlaq dan Al Qur’an menjadi dasar pembinaan?
                        Sebagian besar anak-anak yang menerima program anak asuh
                        adalah anak-anak yang kehilangan sosok ayah dan model
                        teladan dalam hidupnya. Ditambah himpitan ekonomi dan
                        lingkungan yang cukup keras, sangat berdampak pada
                        perilaku mereka.
                    </p>
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
