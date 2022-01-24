<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Profil</title>
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
                        <p class="h1" style="font-size: 70px">
                            Selamat Datang !
                        </p>
                        <p class="h5">
                            Dibawah merupakan informasi mengenai Akun kamu
                        </p>
                        <a class="btn btn-primary mt-3" href="#infaq"
                            >Berbuat Baik Sekarang</a
                        >
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
        <div class="container mt-5 mb-4" id="banner">
            <div class="row mt-3">
                <div class="col">
                    <p class="h1" style="font-size: 35px">Data Diri</p>
                    @foreach($dataUser as $user)
                    <p class="h3 mt-4" style="font-size: 15px">
                        Nama : {{ $user->nama_lengkap }}
                    </p>
                    <p class="h3 mt-4" style="font-size: 15px">
                        Status : {{ $user->status }}
                    </p>
                    <p class="h3 mt-4" style="font-size: 15px">
                        nim / nip : {{ $user->nnim }}
                    </p>
                    <p class="h3 mt-4" style="font-size: 15px">
                        Alamat: {{ $user->alamat }}
                    </p>
                    <p class="h3 mt-4" style="font-size: 15px">
                        Alamat: {{ $user->nohp }}
                    </p>
                    @endforeach
                </div>
            </div>
            <br />
            <div class="row mt-3">
                <div class="col">
                    <p class="h1" style="font-size: 35px">Data Infaq</p>
                    <p class="h2 mt-2 mb-4" style="font-size: 15px">
                        Dibawah ini merupakan Data Infaq yang sudah kamu lakukan
                    </p>
                    <table class="table table-hover mt-4">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">id_user</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Gambar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($infaqs) < 1)
                            <tr>
                                <th scope="row">Belum ada data...</th>
                            </tr>
                            @else @foreach($infaqs as $data)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{ $data->id_user}}</td>
                                <td>{{ $data->nama}}</td>
                                <td>{{ $data->created_at}}</td>
                                <td>Rp.{{ $data->jumlah}}</td>
                                <td>
                                    <a
                                        href="{{ asset('storage/' . $data->bukti)}}"
                                        >Lihat Gambar</a
                                    >
                                </td>
                            </tr>
                            @endforeach @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <p class="h1" style="font-size: 35px">Data Crowdfunding</p>
                    <p class="h2 mt-2 mb-4" style="font-size: 15px">
                        Dibawah ini merupakan Data Crowdfunding yang sudah kamu lakukan
                    </p>
                    <table class="table table-hover mt-4">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">id user</th>
                                <th scope="col">id crowdfunding</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Gambar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($transaksi) < 1)
                            <tr>
                                <th scope="row">Belum ada data...</th>
                            </tr>
                            @else @foreach($transaksi as $data)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{ $data->id_user}}</td>
                                <td>{{ $data->id_crowdfunding}}</td>
                                <td>{{ $data->nama}}</td>
                                <td>{{ $data->created_at}}</td>
                                <td>Rp.{{ $data->jumlah}}</td>
                                <td>
                                    <a
                                        href="{{ asset('storage/' . $data->bukti)}}"
                                        >Lihat Gambar</a
                                    >
                                </td>
                            </tr>
                            @endforeach @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <p class="h1" style="font-size: 35px">Data Wakaf</p>
                    <p class="h2 mt-2 mb-4" style="font-size: 15px">
                        Dibawah ini merupakan Data Wakaf yang sudah kamu lakukan
                    </p>
                    <table class="table table-hover mt-4">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">id user</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Nama Pemberi</th>
                                <th scope="col">Nomer Handphone</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($wakaf) < 1)
                            <tr>
                                <th scope="row">Belum ada data...</th>
                            </tr>
                            @else @foreach($wakaf as $data)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{ $data->id_user}}</td>
                                <td>{{ $data->nama_barang}}</td>
                                <td>{{ $data->tanggal_pemberian}}</td>
                                <td>{{ $data->nama}}</td>
                                <td>{{ $data->nomer_dihubungi}}</td>
                                <td>
                                    <a
                                        href="{{ asset('storage/' . $data->bukti)}}"
                                        >Lihat Gambar</a
                                    >
                                </td>
                                <td>
                                    {{ $data->status }}
                                </td>
                            </tr>
                            @endforeach @endif
                        </tbody>
                    </table>
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
