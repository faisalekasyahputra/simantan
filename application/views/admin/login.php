<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Backoffice Simtaru</title>
  <!-- base:css -->
  <link rel="stylesheet" href="<?=base_url('assets/css/materialdesignicons.min.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/css/vendor.bundle.base.css')?>">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?=base_url('assets/css/style_admin1.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/css/style_admin_login.css')?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?=base_url('assets/image/favicon.png')?>" />
  <script src="<?=base_url('assets/js/jquery-2.2.3.min.js')?>"></script>
</head>

<body>
  <div class="container-scroller d-flex">
  <div class="overlay-hero container-fluid position-absolute w-100 h-100 bg-white" style="z-index:0;">
                          </div>
    <div class="container-fluid page-body-wrapper full-page-wrapper d-flex" >
      <div class="content-wrapper d-flex align-items-center auth px-0" style="background-image: url('<?=base_url("assets/images/batik.png")?>'); background-size:cover;">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="card rounded-4 shadow auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo d-flex justify-content-center pb-0 mb-2" style="align-items: center; flex-direction: column;">
                <img src="<?=base_url('assets/img/logo-krk.png')?>" style="width:80px ;" alt="logo">
                <h4 class="fw-bold pt-2" id="gagal">SIMANTAN</h4>
                <h6 class="text-center fw-light" id="gagal">Sistem Informasi dan Pelayanan Pemanfaatan Ruang Kota Pekalongan</h6>
              </div>
              <form class="pt-3" action="<?=base_url('Admin/auth')?>" method="post" >
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg bg-white rounded-4" id="email_log" name="email_log" placeholder="Nama Pengguna/Email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg bg-white rounded-4" name="pass_log" id="pass_log" placeholder="Kata Sandi">
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn w-100 rounded-4 fw-bold py-0"  id="login" style="background-color: #0888A3;border: #0888a3;"><h5 class="m-0"> Masuk</h5></button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                                     </div>
                  
                </div>
               
                
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <section id="footer-bar">
    <footer class="footer-fixed w-100" id="footer" style="bottom:0 ; position:fixed;" >
    <p class="p-2 m-0 text-center text-white bg-dark" style="font-size:12px ;">Copyright © DPUPR 2022</p>
    </footer>
</section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="<?=base_url('assets/js/vendor.bundle.base.js')?>"></script>
  <!-- endinject -->
  <script src="<?=base_url('assets/js/jquery.cookie.js')?>" type="text/javascript"></script>
  <!-- inject:js -->
  <script src="<?=base_url('assets/js/off-canvas.js')?>"></script>
  <script src="<?=base_url('assets/js/hoverable-collapse.js')?>"></script>
  <script src="<?=base_url('assets/js/template.js')?>"></script>
  <script src="<?=base_url('assets/js/jquery.bootstrap-growl.js')?>"></script>
  <!-- endinject -->
  <script>
    $( "#login" ).click(function() {
      var pass = $("#pass_log").val();
	    var email = $("#email_log").val();
      if (email == '') {
        alert('email tidak boleh kosong');
		    $("#gagal").html('email tidak boleh kosong');
        return;
      }else if (pass == '') {
        alert('password tidak boleh kosong')
        $("#gagal").html('password tidak boleh kosong');
        return;
      }
     

    });
    function alertFunc(status, message) {
       $.bootstrapGrowl(message, {
  ele: 'body', // which element to append to
  type: status, // (null, 'info', 'error', 'success')
  offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
  align: 'right', // ('left', 'right', or 'center')
  width: 250, // (integer, or 'auto')
  delay: 4000,
  
  stackup_spacing: 10 // spacing between consecutively stacked growls.
});
}
  </script>
  <?php
     if($this->session->flashdata('status') == "")
     {
     }
     else
     {
        $message = $this->session->flashdata('status');
        echo "<script>alertFunc('".$message['alert']."','".$message['msg']."')</script>";
     }
    ?>
</body>

</html>
