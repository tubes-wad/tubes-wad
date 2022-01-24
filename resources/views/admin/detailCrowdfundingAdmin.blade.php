<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Daftar Crowdfunding | Admin</title>
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
    </head>
    <style></style>
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
                    <img src={{ asset("images/logo-lazis.png") }} alt="logo"
                    class="mt-3" />
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
            <div class="col-sm-6">
                <div class="ml-5">
                    @foreach($detailCrowdfunding as $detail)
                    <p class="h1 mt-5" style="font-size: 35px">
                        {{ $detail->nama }}
                    </p>
                    <p class="h5 mt-4" style="font-size: 15px">
                        Deadline : {{ $detail->deadline }}
                    </p>
                    <p class="h5 mt-4" style="font-size: 15px">
                        Kategori : {{ $detail->kategori }}
                    </p>
                    <p class="h5 mt-4" style="font-size: 15px">
                        Tujuan : {{ $detail->tujuan }}
                    </p>
                    <img class="mt-3" src={{ asset('storage/' . $detail->gambar)}}
                    style="max-width: 40%; max-height: 40%;" alt="">
                    <p class="mt-4" style="font-size: 20px">
                        {{ $detail->deskripsi }}
                    </p>
                    @endforeach
                </div>
            </div>
            <div class="col-sm-3" style="margin-top: 115px">
                <center>
                    <div
                        class="container-detail shadow"
                        style="border-radius: 5px"
                    >
                        <div class="">
                            <a class="btn btn-warning w-75 mb-3 mt-3"
                                >Jumlah Dana : Rp. {{ $detail->jumlah_uang }}</a
                            >
                            <a
                                class="btn btn-danger w-75 mb-3"
                                style="color: white"
                                href="/tutupCrowdfunding/{{ $detail->id_crowdfunding }}"
                                >Tutup Crowdfunding</a
                            >
                        </div>
                    </div>
                </center>
            </div>
        </div>
        @endif
        @endif
    </body>
</html>
