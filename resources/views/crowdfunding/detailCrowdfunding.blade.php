<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Detail Crowdfunding</title>
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous"
        />
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
        <div class="container">
            <div class="container mt-5 mb-4" id="banner">
                <div class="row mt-3">
                    <div class="col">
                        @foreach($crowdfunding as $data)
                        <a href="/allCrowdfunding" class="btn btn-warning mb-3"
                            >Kembali</a
                        >
                        <p class="h1" style="font-size: 35px">
                            {{ $data->nama }}
                        </p>
                        <p>Deadline : {{ $data->deadline }}</p>
                        <img class="mt-3" style="max-height: 65%; max-width:
                        65%;" src={{ asset('storage/' . $data->gambar)}}
                        /> @endforeach
                        <p class="mt-5">{{ $data->deskripsi}}</p>
                        <a class="btn btn-warning"
                            >Uang Terkumpul Saat ini : Rp.
                            {{ $data->jumlah_uang }}</a
                        >
                        @if(!isset($_SESSION['nama']))
                        <a
                            class="btn btn-primary mr-2"
                            href="/login"
                            id="banner"
                            >Kamu harus Login terlebih dahulu untuk melakukan Donasi</a
                        >
                        @else
                        <button
                            type="button"
                            class="btn btn-primary"
                            data-bs-toggle="modal"
                            data-bs-target="#donasi"
                        >
                            Donasi
                        </button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div
            class="modal fade"
            id="donasi"
            tabindex="-1"
            aria-labelledby="donasi"
            aria-hidden="true"
        >
            <div class="modal-dialog">
                <div class="modal-content">
                    <form
                        action="/donasi"
                        method="POST"
                        enctype="multipart/form-data"
                    >
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                Donasi
                            </h5>
                        </div>
                        <div class="modal-body">
                            <p>
                                - Silahkan lakukan Transfer ke Bank XYZ No Rek 083457284234 a/n lazisu
                            </p>
                            <div class="mb-3">
                                <label for="jumlah" class="col-form-label"
                                    >Jumlah Uang:</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="jumlah"
                                    name="jumlah"
                                    placeholder="Silahkan masukan Jumlah uang yang ingin di Donasikan"
                                />
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label"
                                    >Message:</label
                                >
                                <textarea
                                    class="form-control"
                                    id="message-text"
                                    placeholder="Contoh : Semoga uangnya Berguna ya!"
                                    name="msg"
                                ></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="image">Bukti Transfer</label>
                                <input
                                    type="file"
                                    class="form-control-file"
                                    name="image"
                                    id="image"
                                />
                            </div>
                            <div class="mb-3 form-check form-group">
                                <input
                                    type="checkbox"
                                    class="form-check-input"
                                    id="anon"
                                    name="anon"
                                />
                                <label class="form-check-label" for="anon"
                                    >Infaq Sebagai Anonim ?
                                    </label
                                >
                            </div>
                            <input
                                type="hidden"
                                name="id"
                                value="{{ $data->id_crowdfunding }}"
                            />
                        </div>
                        <div class="modal-footer">
                            <button
                                type="button"
                                class="btn btn-secondary"
                                data-bs-dismiss="modal"
                            >
                                Batal
                            </button>
                            <button type="submit" class="btn btn-primary">
                                Donasi
                            </button>
                        </div>
                    </form>
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
    <!-- JavaScript Bundle with Popper -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"
    ></script>
</html>
