<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Halaman Registrasi</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Register Account</h3>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('home/add_user') ?>" method="post">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" autocomplete="off" required />
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="fa fa-key"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" autocomplete="off" required />
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-send"></i> Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html