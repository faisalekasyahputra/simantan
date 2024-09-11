<footer class="footer">
		<span class="text-right">
		Copyright <a target="_blank" href="#">simantan.pekalongankota.go.id</a>
		</span>
		<span class="float-right">
		Powered by <a target="_blank" href="https://www.pikeadmin.com"><b>DPUPR Kota Pekalongan</b></a>
		</span>
	</footer>

</div>
<div class="modal fade bd-example-modal-lg" id="modalku" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Panduan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       
        </button>
      </div>
      <div class="modal-body">
      <object data="<?=base_url('assets/tutorial/PANDUAN_ADMIN.pdf')?>" width="100%" height="650"></object>
      </div>
      <div class="modal-footer">
       
      
      </div>
    </div>
  </div>
</div>
<!-- END main -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
		
<script src="<?=base_url('assets/js/popper.min.js')?>"></script>
<script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>

<script src="<?=base_url('assets/js/detect.js')?>"></script>
<script src="<?=base_url('assets/js/fastclick.js')?>"></script>
<script src="<?=base_url('assets/js/jquery.blockUI.js')?>"></script>
<script src="<?=base_url('assets/js/jquery.nicescroll.js')?>"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- App js -->
<script src="<?=base_url('assets/js/pikeadmin.js')?>"></script>

<!-- BEGIN Java Script for this page -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

	<!-- Counter-Up-->
	<script src="<?=base_url('assets/js/jquery.waypoints.min.js')?>"></script>
	
	<script src="<?=base_url('assets/js/switchery.min.js')?>"></script>	
	<script src="<?=base_url('assets/js/jquery.bootstrap-growl.js')?>"></script>
	<script src="<?=base_url('assets/plugins/moment.min.js')?>"></script>	
	<script src="<?=base_url('assets/plugins/daterangepicker.js')?>"></script>
	<script src="<?=base_url('assets/js/jquery.filer.min.js')?>"></script>	
	<script>
		$(document).ready(function() {
			
			// data-tables
			$('#example1').DataTable();
					
			// counter-up
			$('.counter').counterUp({
				delay: 10,
				time: 600
			});
		} );		
	</script>
	
	<script>
	var ctx1 = document.getElementById("lineChart").getContext('2d');
	var lineChart = new Chart(ctx1, {
		type: 'bar',
		data: {
			labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
			datasets: [{
					label: 'Sudah Diverifkasi',
					backgroundColor: '#3EB9DC',
					data: [<?=$tgl2[0]?>, <?=$tgl2[1]?>, <?=$tgl2[2]?>, <?=$tgl2[3]?>, <?=$tgl2[4]?>, <?=$tgl2[5]?>, <?=$tgl2[6]?>, <?=$tgl2[7]?>, <?=$tgl2[8]?>, <?=$tgl2[9]?>, <?=$tgl2[10]?>, <?=$tgl2[11]?>] 
				}, {
					label: 'Belum Diverifikasi',
					backgroundColor: '#EBEFF3',
					data:[<?=$tgl[0]?>, <?=$tgl[1]?>, <?=$tgl[2]?>, <?=$tgl[3]?>, <?=$tgl[4]?>, <?=$tgl[5]?>, <?=$tgl[6]?>, <?=$tgl[7]?>, <?=$tgl[8]?>, <?=$tgl[9]?>, <?=$tgl[10]?>, <?=$tgl[11]?>] 
				}]
				
		},
		options: {
						tooltips: {
							mode: 'index',
							intersect: false
						},
						responsive: true,
						scales: {
							xAxes: [{
								stacked: true,
							}],
							yAxes: [{
								stacked: true
							}]
						}
					}
	});


	var ctx2 = document.getElementById("pieChart").getContext('2d');
	var pieChart = new Chart(ctx2, {
		type: 'pie',
		data: {
				datasets: [{
					data: [12, 19, 3, 5, 2, 3],
					backgroundColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)'
					],
					label: 'Dataset 1'
				}],
				labels: [
					"Red",
					"Orange",
					"Yellow",
					"Green",
					"Blue"
				]
			},
			options: {
				responsive: true
			}
	 
	});


	var ctx3 = document.getElementById("doughnutChart").getContext('2d');
	var doughnutChart = new Chart(ctx3, {
		type: 'doughnut',
		data: {
				datasets: [{
					data: [12, 19, 3, 5, 2, 3],
					backgroundColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)'
					],
					label: 'Dataset 1'
				}],
				labels: [
					"Red",
					"Orange",
					"Yellow",
					"Green",
					"Blue"
				]
			},
			options: {
				responsive: true
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
