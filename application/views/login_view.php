<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .login {
            width: 100%;
            max-width: 400px;
        }
        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            text-align: center;
        }
        .input-group-text {
            background-color: #fff;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
    </style>
</head>
<body>
    <div class="login">
        <div class="card">
            <div class="card-header">
                <h1 class="h3">LOGIN</h1>
                <span>(Sebelah layar)</span>
                <h3>-- Sign in Your Account --</h3>
            </div>
            <div class="card-body">
                <form action="<?= base_url('Home/cekLoginUser') ?>" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username">
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
                    <button type="submit" class="btn btn-primary btn-block">
                        <i class="fa fa-send"></i> Masuk
                    </button>
                </form>
                <div class="text-center mt-3">
                    <h3>Atau</h3>
                    <a href="<?= base_url('home/Register') ?>">Daftar Anggota Baru</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        <?php if ($this->session->flashdata('msg') == '1') { ?>
            alert('Username / Password Salah!!!');
        <?php } ?>
        <?php if ($this->session->flashdata('msg') == '2') { ?>
            alert('Data Berhasil Ditambahkan');
        <?php } ?>
    </script>
</body>
</html>
