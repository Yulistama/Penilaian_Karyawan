
<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="<?= base_url('bg_login/') ?>https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('bg_login/') ?> https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="<?= base_url('bg_login/') ?>css/style.css">

    </head>
    <body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section"></h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
                            <div class="text w-100">
                                <h2>Welcome to login</h2>
                                <p>"Aplikasi Penilaian Prestasi Kerja </p>
                                <p>Pegawai Negri Sipil"</p>
                            </div>
                  </div>
                        <div class="login-wrap p-4 p-lg-5">
                    <div class="d-flex">
                        <div class="w-100">
                            <h3 class="mb-4">Sign In</h3>
                        </div>
                    </div>
                        <?= $this->session->flashdata('message') ;?>
                        <form action="<?= base_url('Auth/process') ?>" method="post" class="signin-form">
                        <div class="form-group mb-3">
                            <label class="label" for="name">Username</label>
                            <input type="text" class="form-control" placeholder="Username" name="username" required>
                        </div>
                    <div class="form-group mb-3">
                        <label class="label" for="password">Password</label>
                      <input type="password" class="form-control" placeholder="Password" name="pass" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="login" class="form-control btn btn-primary submit px-3">Sign In</button>
                    </div>
                    </div>
                  </form>
                </div>
              </div>
                </div>
            </div>
        </div>
    </section>

    <script src="<?= base_url('bg_login/') ?>js/jquery.min.js"></script>
  <script src="<?= base_url('bg_login/') ?>js/popper.js"></script>
  <script src="<?= base_url('bg_login/') ?>js/bootstrap.min.js"></script>
  <script src="<?= base_url('bg_login/') ?>js/main.js"></script>

    </body>
</html>

