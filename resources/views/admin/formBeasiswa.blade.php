<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Form Crowdfunding | Admin</title>
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
    <style>
        body {
            overflow: hidden;
        }
    </style>
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
            <div class="col-sm-5">
                <div class="ml-5">
                    <p class="h1 mt-5" style="font-size: 35px">Crowdfunding</p>
                    <p class="h5 mt-3" style="font-size: 20px">
                        Silahkan isi form dibawah ini untuk membuat Crowdfunding
                        baru
                    </p>
                    <form
                        action="/submitCrowdfunding"
                        method="post"
                        enctype="multipart/form-data"
                    >
                        @csrf
                        <div class="form-group mt-4">
                            <label for="nama">Nama Crowdfunding</label>
                            <input
                                type="text"
                                class="form-control"
                                id="nama"
                                name="nama"
                                placeholder="Masukan Nama dari Crowdfunding"
                            />
                            <!-- <small id="emailHelp" class="form-text text-muted"
                                >Silahkan masukan nama Beasiswa</small
                            > -->
                        </div>
                        <div class="form-group mt-2">
                            <label for="desc">Deskripsi Crowdfunding</label>
                            <textarea
                                type="text"
                                class="form-control"
                                id="desc"
                                name="desc"
                                placeholder="Masukan deskripsi dari Crowdfunding"
                            ></textarea>
                        </div>
                        <div class="form-group mt-2">
                            <label for="deadline">Deadline Crowdfunding</label>
                            <input
                                type="date"
                                class="form-control"
                                id="deadline"
                                name="deadline"
                            />
                            <small
                                id="deadlineHelp"
                                class="form-text text-muted"
                                >Tanggal di atas merupakan tanggal Terakhir
                                Crowdfunding bisa di akses oleh User</small
                            >
                        </div>
                        <div class="form-group mt-4">
                            <label for="nama">Tujuan Penyelenggaraan</label>
                            <input
                                type="text"
                                class="form-control"
                                id="penyelenggara"
                                name="penyelenggara"
                                placeholder="Masukan tujuan penyelenggaraan Crowdfunding"
                            />
                            <small id="emailHelp" class="form-text text-muted"
                                >Silahkan tuliskan tujuan secara singkat</small
                            >
                        </div>
                        <div class="form-group mt-4">
                            <label for="kategori">Kategori Crowdfunding</label>
                            <select
                                id="kategori"
                                name="kategori"
                                class="form-control"
                            >
                                <option value="Dana Kuliah" selected>
                                    Dana Kuliah
                                </option>
                                <option value="Bantuan Bencana">
                                    Bantuan Bencana
                                </option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group mt-4">
                            <label for="image">Gambar</label>
                            <input
                                type="file"
                                class="form-control-file"
                                name="image"
                                id="image"
                            />
                            <small id="emailHelp" class="form-text text-muted"
                                >Silahkan masukan gambar yang memiliki hubungan
                                dengan Crowdfunding</small
                            >
                        </div>
                        <button type="submit" class="btn btn-success mt-2">
                            Buat Crowdfunding
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endif
        @endif
    </body>
</html>
