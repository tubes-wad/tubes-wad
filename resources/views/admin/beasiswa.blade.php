<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Beasiswa | Admin</title>
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
                overflow: hidden;
            }
        </style>
    </head>
    <body>
    @if(!isset($_SESSION['role']))
            <p>ANDA BUKAN ADMIN</p>
    @else
        @if($_SESSION['role'] !== 'admin')
            <p>ANDA BUKAN ADMIN</p>
        @else
        <div class="row">
            <div
                class="col-sm-2 sidebar"
                style="
                    background-color: rgb(21, 32, 50);
                    height: 100%;
                    width: 5%;
                    color: white;
                    min-height: 100vh;
                "
            >
                <center>
                    <br />
                    <br />
                    <p class="h1" style="font-size: 35px">Admin</p>
                    <img src="images/logo-lazis.png" alt="logo" class="mt-3" />
                </center>
                <a
                    class="btn btn-warning mt-5 ml-5"
                    href="/admin"
                    style="width: 65%"
                    >Home Admin</a
                >
                <a class="btn btn-warning mt-3 ml-5" href="/infaqAdmin" style="width: 65%"
                    >Infaq</a
                >
                <a
                    class="btn btn-warning mt-3 ml-5"
                    href="/crowdfundingAdmin"
                    style="width: 65%"
                    >Crowdfunding</a
                >
                <a class="btn btn-warning mt-3 ml-5" href="/wakafAdmin" style="width: 65%"
                    >Waqaf</a
                >
                <a class="btn btn-warning mt-3 ml-5" href="/daftarAdmin" style="width: 65%"
                    >Daftar Admin</a
                >
            </div>
            <div class="col-sm-9">
                <div class="ml-5">
                    <p class="h1 mt-5" style="font-size: 35px">Crowdfunding</p>
                    <p class="h5 mt-3" style="font-size: 20px">
                        Anda bisa mengelola data yang ada dalam Crowdfunding
                        pada laman ini
                    </p>
                    <a href="/formTambahBeasiswa" class="btn btn-success mt-3">
                        Tambah Crowdfunding Baru
                    </a>
                    <a href="/daftarCrowdfunding" class="btn btn-success mt-3">
                        Lihat Daftar Crowdfunding saat ini
                    </a>
                    <p class="h1 mt-5" style="font-size: 35px">
                        Transaksi Crowdfunding
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
                                <th scope="col">Actions</th>
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
                                <td>
                                    <a class="btn btn-success" href="/konfirmasiCrowdfunding/{{ $data->id_crowdfunding }}/{{ $data->id_donasi }}"
                                        >Konfirmasi Crowdfunding</a
                                    >
                                    <a class="btn btn-warning" href="/accInfaq"
                                        >Lihat Data User</a
                                    >
                                </td>
                            </tr>
                            @endforeach @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif
        @endif
    </body>
</html>
