<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
   <link rel="stylesheet" href="<?= base_url('css/themify-icons.css') ?> ">
   <link href="<?= base_url('css/style.css') ?>" rel="stylesheet">
    

    <title>Aplikasi Pelayanan Laboratorium PSDMBP</title>
  </head>
  <body>
    <!--Header-->
    <?= $this->include('layout/header') ?>
    <!-- header end -->
    
    
    <!-- Navigation -->
    <?= $this->include('layout/navbar_registered') ?>
    <!--Navigation End-->
   
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
                
                </div>
                <img src="<?= base_url('img/reg.svg') ?>" class="img-fluid">
              </div>
            </div>
            <div class="col-lg-6 p-0">
              <div class="card">
                <div class="card-header">
                  <div class="sub-title">
                    <b>Silahkan Buat Akun Anda</b>
                  </div>
                </div>
                <div class="icon-reg">
                  <img src="https://img.icons8.com/ios-filled/50/4a90e2/add-user-male.png" width="40"/>
                </div>
                <div class="card-body">
                  
                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
                 <?php endif; ?>

                  <form method="post" action="<?= base_url();?>/register/process">
                  <?= csrf_field();?>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <label for="name"></label>
                        <span class="input-group-text"><i class="ti-user"></i></span>
                      </div>
                      <input type="text" id="nama" name="nama" class="form-control input-login" placeholder="Nama Lengkap">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ti-user"></i></span>
                      </div>
                      <label for="no_hp"></label>
                      <input type="text" id="no_hp" name="no_hp" class="form-control input-login" placeholder="Nomer Handphone">
                    </div>
                    
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ti-email"></i></span>
                      </div>
                      <label for="email"></label>
                      <input type="text" id= "email" name="email" class="form-control input-login" placeholder="Email">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ti-lock"></i></span>
                      </div>
                      <input type="password" name="password" class="form-control input-login" placeholder="Kata sandi">
                    </div>
                    <div class="form-group">
                      <label class="mz-check">
                      <input type="checkbox">
                      <i class="mz-blue"></i>
                      Ingat Saya
                    </label>
                    </div>
                    <div class= "text-center">                        
                              <button type="submit" class="btn-reg btn-small form-control">Daftar</button>
                            </div>
                    <div class="bottom">
                      <k><a class="small" href="<?= base_url('page/login') ?>"> Sudah Punya Akun? Masuk</a></k>
                    </div>
                        
                  </form>
                  
                </div>
                
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
    <!--Container End-->
    
    <!--Footer-->
    <?= $this->include('layout/footer') ?>
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