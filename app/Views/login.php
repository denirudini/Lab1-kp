<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
  <!--<link rel="stylesheet" href="<?= base_url('css/themify-icons.css') ?>" -->
  <link href="<?= base_url('css/style.css') ?>" rel="stylesheet">

  <title>Aplikasi Pelayanan Laboratorium PSDMBP</title>
</head>

<body>
  <!--Header-->
  <?= $this->include('layout/header') ?>
  <!-- header end -->


  <!-- disini harus ada pengecekan apakah user sudah login atau belum, 
  klo belum panggil ('layout/navbar') klo udah login atau di halaman login/register panggil ('layout/navbar_registered') -->

  <!-- Navigation -->
  <?= $this->include('layout/navbar_registered') ?>
  <!-- Navigation end -->

  <!--Container-->
  <div class="container">
    <div class="row justify-content-md-center mt-12">
      <div class="col-sm-8">
        <div class="row border-box">
          <div class="col-lg-6 p-0">
            <div class="teks">
              <div class="card-body">
                <h3 class="text-center">Aplikasi Pelayanan</h3>
                <h3 class="text-center">Laboratorium PSDMBB</h3>
                <img src="<?= base_url('img/lab.svg') ?>" class="img-fluid">
              </div>

            </div>
          </div>
          <div class="col-lg-6 p-0">
            <div class="card">
              <div class="card-header">
                <div class="sub-title my-2">
                  <b>Silahkan Masuk</b>
                </div>
              </div>
              <div class="icon-user">
                <img src="https://img.icons8.com/ios-filled/50/4a90e2/user.png" width="50" />
              </div>
              <div class="card-body">
                <form>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ti-user"></i></span>
                    </div>
                    <input type="text" class="form-control input-login" placeholder="Username">
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ti-lock"></i></span>
                    </div>
                    <input type="password" class="form-control input-login" placeholder="Kata sandi">
                  </div>

                  <div class="form-group">
                    <label class="mz-check">
                      <input type="checkbox">
                      <i class="mz-blue"></i>
                      Ingat Saya
                    </label>
                  </div>
                  <div class="text-center">
                    <a href=".php" class="btn form-control">Masuk</a>
                  </div>
                  <div class="bottom my-3">
                    <a class="small" href="forgot.html">Lupa Kata Sandi?</a>
                    <a class="small" href="<?= base_url('page/register') ?>">Buat Akun Sekarang</a>
                  </div>
                </form>
                <div>&nbsp;</div>

              </div>

            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
  <!--Container End-->

  <!--Footer-->

  <!--Footer End-->


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>