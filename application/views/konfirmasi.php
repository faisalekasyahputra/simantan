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

  </head>
  <body class="body-non-overflow">
    <header class="w-100">

        <nav class="navbar nav-first navbar-expand-lg">
            <div class="container">
            <div class="row ">
                    <div class="col d-flex" style="align-content: center; align-items: center;">
                        <a href="#"><img src="<?=base_url('assets/img/logo-krk.png')?>" width="30px" alt="logo-text-brand"></a>
                        <div class="col ps-2">
                        <a href="#"><img src="<?=base_url('assets/img/logo-text-simantan.png')?>" width="110px" alt="logo-text-brand"></a></div>

                        </div>
                </div>
             
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav nav-pills ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 200px;">
                  <li class="nav-item">
                    <a class="nav-link active mx-2 menu" aria-current="page" href="https://pekalongankota.go.id/berita/simtaru-layanan-sistem-informasi-tata-ruang-kota-pekalongan.html">Web Distaru</a>
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
    
      <div class="container-fluid py-5 bg-batik single-section pb-0" data-aos="zoom-out"  data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom"s>
        <div class="container ">
          <div class="row container-card">
                    <div class="col col-md-10">
                    
                        <div class="card card-menu-utama p-3 unduhan"  data-aos="fade-down"  data-aos-offset="200" data-aos-delay="200" data-aos-duration="500" data-aos-easing="ease-in-out">
                          <div class="title-wrapper-card text-center">

                            <div class="row pb-3">
                              <div class="col-md-6 offset-md-3">
                              <h4 class="card-title p-0 m-0 fw-bolder">Tunggu beberapa saat, kami sedang melakukan proses konfirmasi....</h4>
                            
                              </div>
                              
                            </div>
                          </div> 
                          
                          
                           
                         
                         
                        </div>
                     
                    </div>
                </div>
              </div>
            </div>
         
      <div class="modal fade modal-login-static" id="exampleModalToggle"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalToggleLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-login" data-tilt">
          <div class="modal-content bg-glass">
           
            <div class="modal-body  px-4 py-5 px-md-5">
             
                 <h1 class="modal-title text-center pb-4" id="staticBackdropLabel" style="font-size: 1.5rem ;">Daftar</h1>
            
             
              <form>
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1" class="form-control bg-glass" />
                      <label class="form-label" for="form3Example1">First name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline"> 
                      <input type="text" id="form3Example2" class="form-control bg-glass" />
                      <label class="form-label" for="form3Example2">Last name</label>
                    </div>
                  </div>
                </div>
  
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3" class="form-control bg-glass" />
                  <label class="form-label" for="form3Example3">Email address</label>
                </div>
  
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4" class="form-control bg-glass" />
                  <label class="form-label" for="form3Example4">Password</label>
                </div>
  
                <!-- Submit button -->
                <div class="button-action">
                  <button type="submit" class="buttonku-sendiri btn-block mb-4">
                    Daftar
                  </button>
                </form>
                  <h6 class="modal-title text-center pb-4" style="font-size: 1rem ;">Sudah Punya Akun ?</h6>
                  <button type="button" class="buttonku-sendiri masuk btn-block mb-4" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">
                    Masuk
                  </button>
                </div>
  
             
                
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade modal-login-static" id="exampleModalToggle2" aria-labelledby="exampleModalToggleLabel"  data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-login" data-tilt">
          <div class="modal-content bg-glass">
           
            <div class="modal-body  px-4 py-5 px-md-5">
             
                 <h1 class="modal-title text-center pb-4" id="staticBackdropLabel" style="font-size: 1.5rem ;">Masuk</h1>
            
              <form>
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3" class="form-control bg-glass" />
                  <label class="form-label" for="form3Example3">Email address</label>
                </div>
  
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4" class="form-control bg-glass" />
                  <label class="form-label" for="form3Example4">Password</label>
                </div>
  
                <!-- Submit button -->
                <div class="button-action">
                  <button type="submit" class="buttonku-sendiri masuk btn-block mb-4">
                    Masuk
                  </button>
                </form>
                  <h6 class="modal-title text-center pb-4" style="font-size: 1rem ;">Belum Punya Akun ?</h6>
                  <button type="button" class="buttonku-sendiri btn-block mb-4" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">
                    Daftar
                  </button>
                </div>
  
             
                
            </div>
          </div>
        </div>
      </div>
    
      <!-- <section id="Berita">
          <div class="container-fluid p-2">
            <div class="container my-5">
              <div class="row text-center">
                <h2 class="my-1">
                  Berita Terkini
                </h2>
                <p class="my-1">
                  Berita Terbaru Seputar Dinas Penataan Ruang Kota Semarang
                </p>
              </div>
              <!-- card- slider section  
                <div class="slide-container swiper">
                <div class="slide-content">
                  <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide shadow-sm" style="width: 18rem;">
                      <div class="image-content">
                        <img src="assets/img/Alun-alun_Kota_Pekalongan.jpg" class="card-img-top img-content" alt="content.jpg">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                      <div class="card-footer">
                        <a href="#" class="btn btn-primary btn-utama">Go somewhere</a>
                      </div>
                    </div>
                    <div class="card swiper-slide shadow-sm" style="width: 18rem;">
                      <div class="image-content">
                        <img src="assets/img/Alun-alun_Kota_Pekalongan.jpg" class="card-img-top img-content" alt="content.jpg">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                      <div class="card-footer">
                        <a href="#" class="btn btn-primary btn-utama">Go somewhere</a>
                      </div>
                    </div>
                    <div class="card swiper-slide shadow-sm" style="width: 18rem;">
                      <div class="image-content">
                        <img src="assets/img/Alun-alun_Kota_Pekalongan.jpg" class="card-img-top img-content" alt="content.jpg">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                      <div class="card-footer">
                        <a href="#" class="btn btn-primary btn-utama">Go somewhere</a>
                      </div>
                    </div>
                    <div class="card swiper-slide shadow-sm" style="width: 18rem;">
                      <div class="image-content">
                        <img src="assets/img/Alun-alun_Kota_Pekalongan.jpg" class="card-img-top img-content" alt="content.jpg">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                      <div class="card-footer">
                        <a href="#" class="btn btn-primary btn-utama">Go somewhere</a>
                      </div>
                    </div>
                    <div class="card swiper-slide shadow-sm" style="width: 18rem;">
                      <div class="image-content">
                        <img src="assets/img/Alun-alun_Kota_Pekalongan.jpg" class="card-img-top img-content" alt="content.jpg">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                      <div class="card-footer">
                        <a href="#" class="btn btn-primary btn-utama">Go somewhere</a>
                      </div>
                    </div>
                    <div class="card swiper-slide shadow-sm" style="width: 18rem;">
                      <div class="image-content">
                        <img src="assets/img/Alun-alun_Kota_Pekalongan.jpg" class="card-img-top img-content" alt="content.jpg">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                      <div class="card-footer">
                        <a href="#" class="btn btn-primary btn-utama">Go somewhere</a>
                      </div>
                    </div>
                  
                  <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>
                </div>
                
              </div>
            
            <!-- n card- slider section  
              
              </div>
            </div>
          </div>

       </section> -->

<section id="footer-bar">
    <footer class="footer-fixed" id="footer"  >
    <p class="p-3 m-0 text-center position-absolute">Copyright © DPUPR 2022</p>
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </body>
  <script>
    window.onload = function(){
    
      swal({ title: "Konfirmasi Sukses",
      text: "Lanjutkan proses",
      type: "success"}).then(okay => {
        if (okay) {
          window.location.href =  "<?=base_url('KRK/landing')?>";
        }
      });
       
    }
  </script>
</html>