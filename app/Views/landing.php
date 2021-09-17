<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
  </script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

  <script src="https://kit.fontawesome.com/498f4c8f75.js" crossorigin="anonymous"></script>
  <link href="<?= base_url('css/landing.css') ?>" rel="stylesheet">

  <title>Aplikasi Pelayanan Laboratorium PSDMBP</title>
</head>

<body>

  <!-- Header Logo KESDM -->
  <?= $this->include('layout/header') ?>
  <!-- header end -->

  <!-- disini harus ada pengecekan apakah user sudah login atau belum, 
  klo belum panggil ('layout/navbar') klo udah login, panggil ('layout/navbar_registered') -->

  <!-- Navigation -->
  <?= $this->include('layout/navbar') ?>
  <!-- Navigation end -->


  <!--Container-->
  <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="info">
        </div>
      </div>
      <div class="carousel-item">
        <div class="info">
        </div>
      </div>
      <div class="carousel-item">
        <div class="info">

        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
  </div> -->

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?= base_url('../img/gambar1.png') ?>" class="d-block w-70" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?= base_url('../img/gambar2.png') ?>" class="d-block w-70" alt="...">
      </div>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="card-body text-light" style="background-color: #293d50">
    <h3 class="card-text text-center"><b>Aplikasi Pelayanan</b></h3>
    <h3 class="card-text text-center"><b>Laboratorium PSDMBP</b></h3>
    <p class="card-text text-center"><b>Aplikasi yang melayani kebutuhan analisi seperti analisis fisika, kimia, serta
        petrografi</b></p>
  </div>
  <!-- akhir slide banner -->

  <!-- info panel -->
  <div class="card-body" style="background-color: #293d50">
    <div class="row  cols-md-5 text-center">
      <div class="col">
        <div class="card-body " style="background-color: #293d50">
          <a href="pengumuman.html">
            <img src="https://img.icons8.com/color/32/000000/commercial.png" color="#ffff00" height="60" fill="currentColor" />
            <br> <br>
            <h5 class="card-title text-white "><b>Pengumuman</b></h5>
          </a>

        </div>
      </div>
      <div class="col">
        <div class="card-body" style="background-color: #293d50">
          <a href="alur.html">
            <img src="https://img.icons8.com/pastel-glyph/64/4a90e2/sorting-arrows-horizontal--v1.png" color="#ffff00" height="60" fill="currentColor" />
            <br> <br>
            <h5 class="card-title text-white"><b>Alur Pelayanan</b> </h5>
          </a>
        </div>
      </div>

      <div class="col">
        <div class="card-body" style="background-color: #293d50">
          <a href="fasilitas.html">
            <img src="https://img.icons8.com/color/48/4a90e2/microscope.png" color="#ffff00" height="60" fill="currentColor" />
            <br> <br>
            <h5 class="card-title text-white"><b>Fasilitas Laboratorium</b></h5>
          </a>
        </div>
      </div>

      <div class="col">
        <div class="card-body" style="background-color: #293d50">
          <a href="fasilitas.html">
            <img src="https://img.icons8.com/fluency/32/000000/search-in-list.png" color="#ffff00" height="60" fill="currentColor" />
            <br> <br>
            <h5 class="card-title text-white"><b>Tracking Analisis</b></h5>
          </a>
        </div>
      </div>
    </div>
    <br>
  </div>
  <!-- akhir info panel -->
  <!-- about us -->
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