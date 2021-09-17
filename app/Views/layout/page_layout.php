<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    <link href="css/landing.css" rel="stylesheet">

    <title>Aplikasi Pelayanan Laboratorium PSDMBP</title>
  </head>
  <body>
  
    <!-- Header Logo KESDM -->
    <?= $this->include('layout/header') ?>
    <!-- header end -->


    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark text-light">
      <div class="order-0">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      </div>
      <div class="navbar-collapse collapse w-100 order-3 dual-collapse2" id="navbarNav">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link text-light" href="login.html">Masuk</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">Info</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="contact.html">Kontak</a>
              </li>
          </ul>
      </div>
    </nav>
    <!-- Navigation end -->  
    

    <!--Container-->
    <div class="alert " style="background-color: #ffff00" role="alert">
      <b>Selamat Datang Di Website Pelayanan Laboratorium PSDMBP!</b>
    </div>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://www.esdm.go.id/assets/imagecache/sliderSite/xslider-cc136-khnqopn.jpg.pagespeed.ic.Qxc6xE22bp.webp" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://www.esdm.go.id/assets/imagecache/sliderSite/xslider-surat-ke-menteri-esdm-clz77zr.jpg.pagespeed.ic.juwqbnhmFc.webp" class="d-block w-100" alt="...">
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
   
    <div class="card-body text-light"  style= "background-color: #293d50">
      <h3 class="card-text text-center"><b>Aplikasi Pelayanan</b></h3>
      <h3 class="card-text text-center"><b>Laboratorium PSDMBP</b></h3>
      <p class="card-text text-center"><b>Aplikasi yang melayani kebutuhan analisi seperti analisis fisika, kimia, serta petrografi</b></p>
    </div>

    <div class="card-body"  style= "background-color: #293d50">
             
      <div class="row  cols-md-5 text-center" >
        <div class="col">
            <div class="card-body " style= "background-color: #293d50">
              <a href="pengumuman.html" >
                <img src="https://img.icons8.com/fluent/48/000000/speaker.png"
                color="#ffff00"  height="60" fill="currentColor" />
                <br> <br>
                <h5 class="card-title text-white "><b>Pengumuman</b></h5> 
              </a>
              
              
            </div>
        </div>
        <div class="col">
          <div class="card-body" style= "background-color: #293d50">
            <a href="alur.html" >
              <img src="https://img.icons8.com/pastel-glyph/64/4a90e2/sorting-arrows-horizontal--v1.png"
              color="#ffff00"  height="60" fill="currentColor" />
              <br> <br>
             <h5 class="card-title text-white"><b>Alur Pelayanan</b> </h5>
            </a>
          </div>
        </div>
      
        <div class="col">
          <div class="card-body" style= "background-color: #293d50">
            <a href="fasilitas.html" >
              <img src="https://img.icons8.com/color/48/4a90e2/microscope.png"
                  color="#ffff00"  height="60" fill="currentColor" />
                  <br> <br>
              <h5 class="card-title text-white"><b>Fasilitas Laboratorium</b></h5>
            </a>
          </div>
        </div>
       
      </div>
      <br>
    </div>
    <!--Container End-->



    <!--Footer-->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark text-light">
      <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col">
                <b>Hak Cipta © 2021 Pusat Sumber Daya Mineral Batubara Dan Panas Bumi</b>  </div>
                
            </div>
        </div>
      </footer>
    </nav>
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
