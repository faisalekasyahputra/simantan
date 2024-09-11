<footer class="footer text-center">
                © 2022 DPUPR KOTA PEKALONGAN
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?=base_url('assets/js/jquery-2.2.3.min.js')?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?=base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?=base_url('assets/js/app-style-switcher.js')?>"></script>
    <!--Wave Effects -->
    <script src="<?=base_url('assets/js/waves.js')?>"></script>
    <!--Menu sidebar -->
    <script src="<?=base_url('assets/js/sidebarmenu.js')?>"></script>
    <!--Custom JavaScript -->
    <script src="<?=base_url('assets/js/custom.js')?>"></script>
    <!--This page JavaScript -->
    <!--flot chart-->
    <script src="<?=base_url('assets/js/jquery.flot.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery.flot.tooltip.min.js')?>"></script>
    <script src="<?=base_url('assets/js/dashboard1.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery.bootstrap-growl.js')?>"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
 
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