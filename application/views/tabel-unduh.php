<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?=base_url('assets/ico/apple-touch-icon-57x57.png')?>" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url('assets/ico/apple-touch-icon-114x114.png')?>" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url('assets/ico/apple-touch-icon-72x72.png')?>" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url('assets/ico/apple-touch-icon-144x144.png')?>" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?=base_url('assets/ico/apple-touch-icon-60x60.png')?>" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?=base_url('assets/ico/apple-touch-icon-120x120.png')?>" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?=base_url('assets/ico/apple-touch-icon-76x76.png')?>" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?=base_url('assets/ico/apple-touch-icon-152x152.png')?>" />
    <link rel="icon" type="image/png" href="<?=base_url('assets/ico/favicon-196x196.png" sizes="196x196')?>" />
    <link rel="icon" type="image/png" href="<?=base_url('assets/ico/favicon-96x96.png" sizes="96x96')?>" />
    <link rel="icon" type="image/png" href="<?=base_url('assets/ico/favicon-32x32.png" sizes="32x32')?>" />
    <link rel="icon" type="image/png" href="<?=base_url('assets/ico/favicon-16x16.png" sizes="16x16')?>" />
    <link rel="icon" type="image/png" href="<?=base_url('assets/ico/favicon-128.png" sizes="128x128')?>" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="<?=base_url('assets/ico/mstile-144x144.png')?>" />
    <meta name="msapplication-square70x70logo" content="<?=base_url('assets/ico/mstile-70x70.png')?>" />
    <meta name="msapplication-square150x150logo" content="<?=base_url('assets/ico/mstile-150x150.png')?>" />
    <meta name="msapplication-wide310x150logo" content="<?=base_url('assets/ico/mstile-310x150.png')?>" />
    <meta name="msapplication-square310x310logo" content="<?=base_url('assets/ico/mstile-310x310.png')?>" />
    <!-- endFavicon -->
   
    
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css"/>
    
    <title>DPUPR || Pekalongan</title>
    <!-- Swipper --> 
    <link rel="stylesheet" href="<?=base_url('assets/css/swiper-bundle.min.css')?>">
    <!-- <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/> -->
    <!-- My-CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/css/style-aio1.css')?>">
    <!-- CDN-Bootstrape-5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('assets/images/favicon1.png')?>">
  </head>
  <body >
    <header class="w-100">

        <nav class="navbar nav-first navbar-expand-lg">
            <div class="container">
            <div class="row ">
                    <div class="col d-flex" style="align-content: center; align-items: center;">
                        <a href="#"><img class="me-3" src="<?=base_url('assets/img/logo-icon-fix.png')?>" width="22px" alt="logo-text-brand"></a> 
                        <a href="#"><img src="<?=base_url('assets/img/logo-krk.png')?>" width="30px" alt="logo-text-brand"></a>
                        <div class="col ps-2">
                        <a href="#"><img src="<?=base_url('assets/img/logo-text-simantan.png')?>" width="110px" alt="logo-text-brand"></a>
                             </div>

                        </div>
                </div>
             
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav nav-pills ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 200px;">
              <li class="nav-item">
                    <a class="nav-link active mx-2 menu" aria-current="page" href="<?=base_url('KRK')?>">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mx-2 menu " href="<?=base_url('KRK/one_map')?>">One Map</a>
                  </li>
                   <li class="nav-item">
                    <a class="nav-link mx-2 menu " href="<?=base_url('KRK/pola_ruang')?>">Pola Ruang</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mx-2 menu " href="<?=base_url('KRK/landing')?>">Pelayanan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mx-2 menu " href="<?=base_url('KRK/unduh')?>">Unduh</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mx-2 menu " href="<?=base_url('KRK/pengaduan')?>">Pengaduan</a>
                  </li>
              
                </ul>
              </div>
            </div>
          </nav>
    </header>
    
    <div class="container-fluid justify-content-center align-items-center" style="display: flex;height:100vh;justify-content: flex-start;align-items: stretch;flex-direction: column;">
        <div class="container">
          <div class="row">
                    <div class="col col-md-12">
                    
                        <div class="card p-3"  data-aos="flip-left" data-aos-delay="200" data-aos-duration="500" data-aos-easing="ease-in-out"  style="max-height:85vh;">
                          <div class="title-wrapper-card text-center">

                            <div class="card p-2 mb-2">
                              <div class="col-md-6 offset-md-3">
                              <h4 class="card-title p-0 m-0 fw-bolder">UNDUHAN</h4>
                              <p class="card-text text-center p-0">Unduh Peta dan Dokumen</p>
                              </div>
                              
                            </div>
                          </div> 
                          <div class="row g-2 overflow-scroll" style="display: flex;align-items: flex-start;align-content: center;justify-content: center;flex-wrap: nowrap; max-height:85vh; ">
                          <div class="card col-md-6 p-0 m-1" style="width:47%;">
                            <div class="card-header">
                              <h6 class="card-title p-0 m-0 fw-bolder">- File Peta</h6>
                            </div>
                          <div class="table-data">
                             <table id="example1" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                  
                                    <th>No </th>
                                    <th>Nama </th>
                                    <th>Deskripsi</th>
                                    <th>Detail</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <?php if ($file != null) {
                                    $i = 0;
                                    foreach ($file as $f) {
                                      $i++;
                                   ?>
                                    <td><?=$i?></td>
                                    <td><?=$f->nama?></td>
                                    <td><?=$f->deskripsi?></td>
                                    <td><a href="<?=base_url('KRK/detail_unduh/'.$f->id)?>">Preview</a></td>
                                </tr>
                                <?php  }
                                  }?>
                              </a>
                            </tbody>
                        </table>
                          </div>
                          </div>
                          
                          <div class="card col-md-6 p-0 m-1" style="width:47%;">
                          <div class="card-header">
                            <h6 class=" p-0 m-0 fw-bolder">- File Dokumen</h6>
                          </div>
                          <div class=" table-data">
                             <table id="example1" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No </th>
                                    <th>Nama </th>
                                    <th>Deskripsi</th>
                                    <th>Detail</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <?php if ($dok != null) {
                                    $i = 0;
                                    foreach ($dok as $f) {
                                      $i++;
                                   ?>
                                    <td><?=$i?></td>
                                    <td><?=$f->nama?></td>
                                    <td><?=$f->deskripsi?></td>
                                    <td><a href="<?=base_url('KRK/detail_unduh/'.$f->id)?>">Preview</a></td>
                                </tr>
                                <?php  }
                                  }?>
                                
                              </a>
                            </tbody>
                        </table>
                          </div>
                          </div>
                          </div>
                         
                        </div>
                     
                    </div>
                </div>
              </div>
            </div>
         
     
    
            <section id="footer-bar">
    <footer class="footer-fixed w-100" id="footer" style="bottom:0 ; position:fixed;" >
    <p class="p-2 m-0 text-center text-white bg-dark" style="font-size:12px ;">Copyright © DPUPR 2022</p>
    </footer>
</section>
<!-- jstilt -->

<script type="text/javascript" src="<?=base_url('assets/js/vanilla-tilt.js')?>"></script>
<script type="text/javascript">
  VanillaTilt.init(document.querySelector(".modal-dialog"), {
		max: 2,
		speed: 400,
    glare: true,
    "max-glare" : 1
	});
  VanillaTilt.init(document.querySelector("#card-tilt"), {
		max: 10,
		speed: 400,
   
	});
  VanillaTilt.init(document.querySelector("#card-tilt2"), {
		max: 10,
		speed: 400,
   
	});
  VanillaTilt.init(document.querySelector("#card-tilt3"), {
		max: 10,
		speed: 400,
    
	});
</script>
<!-- typeJS -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
  var typed = new Typed('.auto-typing', {
    strings: ["Site Plan","KRK","Kajian dokumentasi"],
    typeSpeed: 200,
    backSpeed: 100,
    loop : true
  });
</script>
<!-- Swipper JS-->
<script src="<?=base_url('assets/js/swiper-bundle.min.js')?>"></script>
<!-- End-Swiper -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> 
    <script>
      AOS.init();
    </script>
    <!-- <script JS -->
      <script src="<?=base_url('assets/js/js.js')?>"></script>
     
      <!-- Endscript JS -->

     <!-- CDN-jsswipper-->
    <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script> -->
    <!-- CDN-JS-bootstrape -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/40248f80b4.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
      $(document).ready(function () {
      $('#example').DataTable();
      });
    </script>
  </body>
</html>