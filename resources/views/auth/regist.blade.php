<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Register</title>
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
        <style>
            body {
            }
        </style>
    </head>
    <body>
        <nav
            class="navbar navbar-expand-lg mb-5"
            style="background-color: rgb(21, 32, 50)"
        >
            <a class="navbar-brand" href="#" style="color: white">E-Lazis</a>
            <div class="ml-auto">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#" style="color: white"
                            >Login</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: white"
                            >Register</a
                        >
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container mb-5">
            <div
                class="body-login shadow p-3 bg-white rounded mx-auto"
                style="background-color: white; width: 45%"
            >
                <center>
                    <h4>Register</h4>
                    <img src="images/logo-lazis.jpg" alt="logo" class="mb-3" />
                </center>
                <form action="/registUser" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input
                            class="form-control"
                            type="text"
                            name="nama"
                            id="nama"
                            placeholder="Masukan Nama Lengkap"
                        />
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input
                            class="form-control"
                            type="email"
                            name="email"
                            id="email"
                            placeholder="Masukan Email"
                        />
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input
                            class="form-control"
                            type="password"
                            name="pass"
                            id="pass"
                            placeholder="Masukan Password"
                        />
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select
                            class="form-control"
                            type="text"
                            name="status"
                            id="status"
                        >
                            <option value="mahasiswa">Mahasiswa</option>
                            <option value="dosen">Dosen</option>
                            <option value="staff">Staff</option>
                            <option value="umum">Umum</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM / NIP</label>
                        <input
                            class="form-control"
                            type="text"
                            name="nim"
                            id="nim"
                            placeholder="Masukan NIM / NIP ( kosongkan jika tidak ada )"
                        />
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea
                            class="form-control"
                            name="alamat"
                            id="alamat"
                            rows="3"
                            placeholder="Masukan Alamat"
                        ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="nope">No HP</label>
                        <input
                            class="form-control"
                            type="text"
                            name="nope"
                            id="nope"
                            placeholder="Masukan Nomer Yang Dapat Dihubungi"
                        />
                    </div>
                    <center>
                        <div class="form-group">
                            <button
                                class="btn btn-primary"
                                type="submit"
                                style="width: 25%"
                            >
                                Register
                            </button>
                        </div>
                    </center>
                </form>
            </div>
        </div>
    </body>
</html>
