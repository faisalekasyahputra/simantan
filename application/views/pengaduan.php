<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
  <script src="<?= base_url('assets/js/leaflet.ajax.js') ?>"></script>
  <!-- Favicon -->
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?= base_url('assets/ico/apple-touch-icon-57x57.png') ?>" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url('assets/ico/apple-touch-icon-114x114.png') ?>" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url('assets/ico/apple-touch-icon-72x72.png') ?>" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url('assets/ico/apple-touch-icon-144x144.png') ?>" />
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?= base_url('assets/ico/apple-touch-icon-60x60.png') ?>" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?= base_url('assets/ico/apple-touch-icon-120x120.png') ?>" />
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?= base_url('assets/ico/apple-touch-icon-76x76.png') ?>" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?= base_url('assets/ico/apple-touch-icon-152x152.png') ?>" />
  <link rel="icon" type="image/png" href="<?= base_url('assets/ico/favicon-196x196.png" sizes="196x196') ?>" />
  <link rel="icon" type="image/png" href="<?= base_url('assets/ico/favicon-96x96.png" sizes="96x96') ?>" />
  <link rel="icon" type="image/png" href="<?= base_url('assets/ico/favicon-32x32.png" sizes="32x32') ?>" />
  <link rel="icon" type="image/png" href="<?= base_url('assets/ico/favicon-16x16.png" sizes="16x16') ?>" />
  <link rel="icon" type="image/png" href="<?= base_url('assets/ico/favicon-128.png" sizes="128x128') ?>" />
  <meta name="application-name" content="&nbsp;" />
  <meta name="msapplication-TileColor" content="#FFFFFF" />
  <meta name="msapplication-TileImage" content="<?= base_url('assets/ico/mstile-144x144.png') ?>" />
  <meta name="msapplication-square70x70logo" content="<?= base_url('assets/ico/mstile-70x70.png') ?>" />
  <meta name="msapplication-square150x150logo" content="<?= base_url('assets/ico/mstile-150x150.png') ?>" />
  <meta name="msapplication-wide310x150logo" content="<?= base_url('assets/ico/mstile-310x150.png') ?>" />
  <meta name="msapplication-square310x310logo" content="<?= base_url('assets/ico/mstile-310x310.png') ?>" />
  <!-- endFavicon -->
  <script src="<?= base_url('assets/js/leaflet.ajax.js') ?>"></script>
  <link rel="stylesheet" href="<?= base_url('assets/css/Control.FullScreen1.css') ?>" media="screen">
  <script src="<?= base_url('assets/js/Control.FullScreen.js') ?>"></script>
  <script src="<?= base_url('assets/js/cari_daftar.js') ?>"></script>
  <link rel="stylesheet" href="https://rawgit.com/k4r573n/leaflet-control-osm-geocoder/master/Control.OSMGeocoder.css" />
  <script src="<?= base_url('assets/draw_pr/Leaflet.draw.js') ?>"></script>
  <script src="<?= base_url('assets/draw_pr/Leaflet.Draw.Event.js') ?>"></script>
  <link rel="stylesheet" href="<?= base_url('assets/draw_pr/leaflet.draw1.css') ?>" media="screen">
  <script src="<?= base_url('assets/draw_pr/Toolbar.js') ?>"></script>
  <script src="<?= base_url('assets/draw_pr/Tooltip.js') ?>"></script>

  <script src="<?= base_url('assets/draw_pr/GeometryUtil.js') ?>"></script>
  <script src="<?= base_url('assets/draw_pr/LatLngUtil.js') ?>"></script>
  <script src="<?= base_url('assets/draw_pr/LineUtil.Intersect.js') ?>"></script>
  <script src="<?= base_url('assets/draw_pr/Polygon.Intersect.js') ?>"></script>
  <script src="<?= base_url('assets/draw_pr/Polyline.Intersect.js') ?>"></script>
  <script src="<?= base_url('assets/draw_pr/TouchEvents.js') ?>"></script>

  <script src="<?= base_url('assets/draw_pr/DrawToolbar.js') ?>"></script>
  <script src="<?= base_url('assets/draw_pr/Draw.Feature.js') ?>"></script>
  <script src="<?= base_url('assets/draw_pr/Draw.SimpleShape.js') ?>"></script>
  <script src="<?= base_url('assets/draw_pr/Draw.Polyline.js') ?>"></script>
  <script src="<?= base_url('assets/draw_pr/Draw.Marker.js') ?>"></script>
  <script src="<?= base_url('assets/draw_pr/Draw.Circle.js') ?>"></script>
  <script src="<?= base_url('assets/draw_pr/Draw.CircleMarker.js') ?>"></script>
  <script src="<?= base_url('assets/draw_pr/Draw.Polygon.js') ?>"></script>
  <script src="<?= base_url('assets/draw_pr/Draw.Rectangle.js') ?>"></script>

  <script src="<?= base_url('assets/draw_pr/EditToolbar.js') ?>"></script>
  <script src="<?= base_url('assets/draw_pr/EditToolbar.Edit.js') ?>"></script>
  <script src="<?= base_url('assets/draw_pr/EditToolbar.Delete.js') ?>"></script>
  <script src="<?= base_url('assets/draw_pr/Control.Draw.js') ?>"></script>
  <script src="<?= base_url('assets/draw_pr/Edit.Poly.js') ?>"></script>
  <script src="<?= base_url('assets/draw_pr/Edit.SimpleShape.js') ?>"></script>
  <script src="<?= base_url('assets/draw_pr/Edit.Rectangle.js') ?>"></script>
  <script src="<?= base_url('assets/draw_pr/Edit.Marker.js') ?>"></script>
  <script src="<?= base_url('assets/draw_pr/Edit.CircleMarker.js') ?>"></script>
  <script src="<?= base_url('assets/draw_pr/Edit.Circle.js') ?>"></script>


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css" />

  <title>DPUPR || Pekalongan</title>
  <!-- Swipper -->
  <link rel="stylesheet" href="<?= base_url('assets/css/swiper-bundle.min.css') ?>">
  <!-- <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/> -->
  <!-- My-CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/style-aio1.css') ?>">
  <!-- CDN-Bootstrape-5-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body class="bg-light overflow-auto">
  <header class="w-100">

    <nav class="navbar nav-first navbar-expand-lg">
      <div class="container">
        <div class="row ">
          <div class="col d-flex" style="align-content: center; align-items: center;">
            <a href="#"><img class="me-3" src="<?= base_url('assets/img/logo-icon-fix.png') ?>" width="22px" alt="logo-text-brand"></a>
            <a href="#"><img src="<?= base_url('assets/img/logo-krk.png') ?>" width="30px" alt="logo-text-brand"></a>
            <div class="col ps-2">
              <a href="#"><img src="<?= base_url('assets/img/logo-text-simantan.png') ?>" width="110px" alt="logo-text-brand"></a>
            </div>

          </div>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav nav-pills ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 200px;">
            <li class="nav-item">
              <a class="nav-link active mx-2 menu" aria-current="page" href="<?= base_url('KRK') ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2 menu " href="<?= base_url('KRK/One_Map') ?>">One Map</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2 menu " href="<?= base_url('KRK/pola_ruang') ?>">Pola Ruang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2 menu " href="<?= base_url('KRK/landing') ?>">Pelayanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2 menu " href="<?= base_url('KRK/unduh') ?>">Unduh</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2 menu " href="<?= base_url('KRK/pengaduan') ?>">Pengaduan</a>
            </li>


          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="container-fluid" style="display: flex;height:100vh;justify-content: center;align-items: stretch;flex-direction: column;" data-aos="zoom-out" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom">
    <div class="row justify-content-center py-auto">
      <div class="card w-75" id="card-tilt" data-aos="flip-up" data-aos-duration="300" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom">
        <div class="row text-center py-2">
          <h2 class="fw-bolder">Pengaduan</h2>
          <h6>Pengaduan pengguna</h6>
        </div>
        <form action="<?= base_url('KRK/tambah_pengaduan') ?>" enctype="multipart/form-data" method="post">
          <!-- Email input -->
          <div class="form-outline mb-3">
            <br> <br> <br><br><br><br><br><br>
          </div>
          <div class="form-outline mb-3">
            <br><br> <br> <br>

          </div>
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example3">Nama</label>
            <input type="fname" id="form3Example3" name="nama" placeholder="Isi Nama Lengkap Sesuai KTP" class="form-control bg-glass" />
          </div>
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example3">Lokasi</label>
            <input type="text" id="form3Example3" name="alamat" placeholder="Isi Nama Jalan atau Nama Tempat" class="form-control bg-glass" />
          </div>
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example3">Tentukan Koordinat dengan mengklik peta di bawah ini</label>
            <div id="map" class="card form-pendaftaran" style="width: 100%; height: 300px;"></div>
            <input type="text" id="koordinat" name="koordinat" class="form-control bg-glass" />
          </div>
          <div class="form-wrapper mb-3">
            <div class="form-outline mb-3">
              <label class="form-label" for="form3Example3">Email</label>
              <input type="email" id="form3Example3" name="email" placeholder="Isi Email contoh pengguna@gmail.com" class="form-control bg-glass" />
            </div>
            <div class="form-outline mb-3 ms-2">
              <label class="form-label" for="form3Example3">No Telepon</label>
              <input type="number" id="form3Example3" name="telp" placeholder="Nomor telepon/whatsapp" class="form-control bg-glass" />
            </div>

          </div>
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example3">Keterangan Aduan</label>
            <textarea id="form3Example3" name="ket" placeholder="Isi dengan rapi dan jelas" class="form-control bg-glass"></textarea>
          </div>
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example3">Foto</label>
            <input type="file" id="foto" name="foto" class="form-control bg-glass" />
          </div>
          <!-- Submit button -->
          <div class="button-action">
            <button type="button" class="buttonku-sendiri btn-block mb-4" data-bs-toggle="modal" data-bs-target="#survey">
              <i class="fa-solid fa-paper-plane pe-3"></i> Kirim Aduan
            </button>

          </div>
      </div>




    </div>
  </div>
  </div>
  </div>
  <div class="modal fade bd-example-modal-lg" id="survey" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">

      <div class="modal-content">

        <div class="modal-header">

          <h5 class="modal-title" id="exampleModalLabel">Survey Kepuasan</h5>

          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>



          </button>

        </div>

        <div class="modal-body">

          <p>1. Apakah persyaratan dalam permohonan perizinan telah sesuai dengan peraturan yang ada ?</p>
            <input type="radio" id="s1" name="s1" value="1">
            <label for="html">Tidak Sesuai</label>&nbsp;&nbsp;
            <input type="radio" id="s1" name="s1" value="2">
            <label for="css">Kurang Sesuai</label>&nbsp;&nbsp;
            <input type="radio" id="s1" name="s1" value="3">
            <label for="javascript">Sesuai</label>&nbsp;&nbsp;
          <input type="radio" id="s1" name="s1" value="4">
            <label for="javascript">Sangat Sesuai</label>
          <p>2. Pendapat saudara tentang kemudahan sistem, mekanisme dan prosedur pelayanan di DPUPR Kota Pekalongan?</p>
            <input type="radio" id="s2" name="s2" value="1">
            <label for="html">Tidak Mudah</label>&nbsp;&nbsp;
            <input type="radio" id="s2" name="s2" value="2">
            <label for="css">Kurang Mudah</label>&nbsp;&nbsp;
            <input type="radio" id="s2" name="s2" value="3">
            <label for="javascript">Sesuai</label>&nbsp;&nbsp;
          <input type="radio" id="s2" name="s2" value="4">
            <label for="javascript">Sangat Sesuai</label>

          <p>3. Pendapat saudara tentang ketepatan penyelesaian pelayanan terhadap janji waktu pelayanan ?</p>
            <input type="radio" id="s3" name="s3" value="1">
            <label for="html">Tidak Tepat</label>&nbsp;&nbsp;
            <input type="radio" id="s3" name="s3" value="2">
            <label for="css">Kurang Tepat</label>&nbsp;&nbsp;
            <input type="radio" id="s3" name="s3" value="3">
            <label for="javascript">Tepat</label>&nbsp;&nbsp;
          <input type="radio" id="s3" name="s3" value="4">
            <label for="javascript">Sangat Tepat</label>

          <p>4. Pendapat saudara tentang kesesuaian biaya/retribusi yang dibayarkan dengan biaya yang ditetapkan?</p>
            <input type="radio" id="s4" name="s4" value="1">
            <label for="html">Tidak Wajar</label>&nbsp;&nbsp;
            <input type="radio" id="s4" name="s4" value="2">
            <label for="css">Kurang Wajar</label>&nbsp;&nbsp;
            <input type="radio" id="s4" name="s4" value="3">
            <label for="javascript">Wajar</label>&nbsp;&nbsp;
          <input type="radio" id="s4" name="s4" value="4">
            <label for="javascript">Sangat Wajar</label>

          <p>5. Pendapat saudara apakah produk spesifikasi jenis pelayanan yang diberikan sudah sesuai dengan hasil pelayanan yang diterima? ?</p>
            <input type="radio" id="s5" name="s5" value="1">
            <label for="html">Tidak Sesuai</label>&nbsp;&nbsp;
            <input type="radio" id="s5" name="s5" value="2">
            <label for="css">Kurang Sesuai</label>&nbsp;&nbsp;
            <input type="radio" id="s5" name="s5" value="3">
            <label for="javascript">Sesuai</label>&nbsp;&nbsp;
          <input type="radio" id="s5" name="s5" value="4">
            <label for="javascript">Sangat Sesuai</label>

          <p>6. Pendapat saudara tentang kompetensi/kemampuan petugas dalam memberikan pelayanan?</p>
            <input type="radio" id="s6" name="s6" value="1">
            <label for="html">Sangat Tidak Baik</label>&nbsp;&nbsp;
            <input type="radio" id="s6" name="s6" value="2">
            <label for="css">Tidak Baik</label>&nbsp;&nbsp;
            <input type="radio" id="s6" name="s6" value="3">
            <label for="javascript">Baik</label>&nbsp;&nbsp;
          <input type="radio" id="s6" name="s6" value="4">
            <label for="javascript">Sangat Baik</label>

          <p>7. Pendapat saudara tentang kesopanan dan keramah-tamahan petugas dalam memberikan pelayanan ?</p>
            <input type="radio" id="s7" name="s7" value="1">
            <label for="html">Sangat Tidak Sopan</label>&nbsp;&nbsp;
            <input type="radio" id="s7" name="s7" value="2">
            <label for="css">Tidak Sopan</label>&nbsp;&nbsp;
            <input type="radio" id="s7" name="s7" value="3">
            <label for="javascript">Sopan</label>&nbsp;&nbsp;
          <input type="radio" id="s7" name="s7" value="4">
            <label for="javascript">Sangat Sopan</label>

          <p>8. Apakah pengaduan dan masukan yang diberikan/diajukan ke petugas pengaduan mendapat respon atau ditindaklanjuti petugas ?</p>
            <input type="radio" id="s8" name="s8" value="1">
            <label for="html">Tidak Direspon</label>&nbsp;&nbsp;
            <input type="radio" id="s8" name="s8" value="2">
            <label for="css">Kurang Direspon</label>&nbsp;&nbsp;
            <input type="radio" id="s8" name="s8" value="3">
            <label for="javascript">Direspon</label>&nbsp;&nbsp;
          <input type="radio" id="s8" name="s8" value="4">
            <label for="javascript">Sangat Direspon</label>

          <p>9. Pendapat saudara tentang sarana dan prasarana pelayanan DPUPR Kota Pekalongan?</p>
            <input type="radio" id="s9" name="s9" value="1">
            <label for="html">Tidak Baik</label>&nbsp;&nbsp;
            <input type="radio" id="s9" name="s9" value="2">
            <label for="css">Kurang Baik</label>&nbsp;&nbsp;
            <input type="radio" id="s9" name="s9" value="3">
            <label for="javascript">Baik</label>&nbsp;&nbsp;
          <input type="radio" id="s9" name="s9" value="4">
            <label for="javascript">Sangat Baik</label>
          <p>10. Berikan Testimoni, kritik dan saran Untuk kami dalam meningkatkan pelayanan di DPUPR Kota Pekalongan?</p>
          <textarea class="form-control" name="testi"></textarea>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <button type="button" class="btn btn-secondary" onclick="CloseModal2()">Close</button>

        </div>
      </div>
      </form>
      <div class="modal-footer">





      </div>

    </div>

  </div>

  </div>


  <section id="footer-bar">
    <footer class="footer-fixed w-100" id="footer" style="bottom:0 ; position:fixed;">
      <p class="p-2 m-0 text-center text-white bg-dark" style="font-size:12px ;">Copyright © DPUPR 2022</p>
    </footer>
  </section>
  <!-- jstilt -->
  <script type="text/javascript" src="assets/js/vanilla-tilt.js"></script>
  <script type="text/javascript">
    VanillaTilt.init(document.querySelector(".modal-dialog"), {
      max: 2,
      speed: 400,
      glare: true,
      "max-glare": 1
    });
    VanillaTilt.init(document.querySelector("#card-tilt"), {
      max: 1,
      speed: 400,
      scale: 1.02

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
      strings: ["Site Plan", "KRK", "Kajian dokumentasi"],
      typeSpeed: 200,
      backSpeed: 100,
      loop: true
    });
  </script>
  <!-- Swipper JS-->
  <script src="assets/js/swiper-bundle.min.js"></script>
  <!-- End-Swiper -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <!-- <script JS -->
  <script src="<?= base_url('assets/js/js.js') ?>"></script>

  <!-- Endscript JS -->

  <!-- CDN-jsswipper-->
  <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script> -->
  <!-- CDN-JS-bootstrape -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <!-- font-awesome -->
  <script src="https://kit.fontawesome.com/40248f80b4.js" crossorigin="anonymous"></script>
  <script>
    var map = new L.map('map', {
      center: L.latLng([-6.8904456, 109.6849576]),
      zoom: 12.5,
      maxBounds: [
        [-7.09, 109.4071054],
        [-6.6, 109.9205119]
      ],
      attributionControl: false,
      fullscreenControl: true,
      fullscreenControlOptions: {
        position: 'topleft'
      },
    });

    peta3 = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
      maxZoom: 20,
      subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    });
    map.addLayer(peta3);
    var osmGeocoder = new L.Control.OSMGeocoder({
      placeholder: 'Cari Jalan/Lokasi...'
    });
    map.addControl(osmGeocoder);
    var xlng = 0.000256;
    var xlat = 0.000200;
    map.on('click', function(e) {
      document.getElementById('koordinat').value = e.latlng.lat + ',' + e.latlng.lng;
      L.polygon([
        [e.latlng.lat - xlat, e.latlng.lng - xlng],
        [e.latlng.lat + xlat, e.latlng.lng - xlng],
        [e.latlng.lat - xlat, e.latlng.lng + xlng],
        [e.latlng.lat + xlat, e.latlng.lng + xlng],
      ]).addTo(map);

      L.polyline([
        [e.latlng.lat, e.latlng.lng - xlng],
        [e.latlng.lat, e.latlng.lng + xlng]
      ]).addTo(map);
    });
  </script>
</body>

</html>