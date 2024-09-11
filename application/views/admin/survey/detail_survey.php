<div class="content-page">
	
		<!-- Start content -->
        <div class="content">
            
			<div class="container-fluid">
					
						<div class="row">
									<div class="col-xl-12">
											<div class="breadcrumb-holder">
													<h1 class="main-title float-left"><?=$jdl_hal?></h1>
													<ol class="breadcrumb float-right">
														<li class="breadcrumb-item">Home</li>
														<li class="breadcrumb-item active"><?=$jdl_hal?></li>
													</ol>
													<div class="clearfix"></div>
											</div>
									</div>
						</div>
						<!-- end row -->

						<div class="row">
				
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">						
							<div class="card mb-3">
								<div class="card-header">
									<h3><i class="fa fa-table"></i> <?=$jdl_hal?></h3>
									Detail Pengaduan
								</div>
									
								<div class="card-body">
                                <form autocomplete="off" action="" method="post">
								  <div class="form-row">
									<div class="form-group col-md-12">
									  <label for="inputEmail4">Nama</label>
									  <p ><?=$data[0]->nama?></p>
									</div>
									
								  </div>
								  <div class="form-group">
									<label for="inputAddress">Email</label>
                                    <p ><?=$data[0]->email?></p>
								  </div>
                                  <div class="form-group">
									<label for="inputAddress">
                                   1. Apakah persyaratan dalam permohonan perizinan telah sesuai dengan peraturan yang ada ?</label>
                                   
                                   <?php 
                                   $jawaban = $data[0]->s1;
                                   if ($jawaban == 1) {
                                    $j = 'Tidak Sesuai';
                                   }elseif ($jawaban==2) {
                                    $j = 'Kurang Sesuai';
                                   }elseif($jawaban == 3) {
                                    $j = 'Sesuai';
                                   }else{
                                    $j= 'Sangat Sesuai';
                                   }
                                   ?>
                                    <p ><b>Jawaban : </b><?=$j?></p>
								  </div>
                                  <br>

                                  <div class="form-group">
									<label for="inputAddress">
                                   2. Pendapat saudara tentang kemudahan sistem, mekanisme dan prosedur pelayanan di DPUPR Kota Pekalongan?</label>
                                   
                                   <?php 
                                   $jawaban = $data[0]->s2;
                                   if ($jawaban == 1) {
                                    $j = 'Tidak Mudah';
                                   }elseif ($jawaban==2) {
                                    $j = 'Kurang Mudah';
                                   }elseif($jawaban == 3) {
                                    $j = 'Mudah';
                                   }else{
                                    $j= 'Sangat Mudah';
                                   }
                                   ?>
                                   <p ><b>Jawaban :</b> <?=$j?></p>
								  </div>
                                  <br>
                                  <div class="form-group">
									<label for="inputAddress">
                                   3. Pendapat saudara tentang ketepatan penyelesaian pelayanan terhadap janji waktu pelayanan ?</label>
                                   
                                   <?php 
                                   $jawaban = $data[0]->s3;
                                   if ($jawaban == 1) {
                                    $j = 'Tidak Tepat';
                                   }elseif ($jawaban==2) {
                                    $j = 'Kurang Tepat';
                                   }elseif($jawaban == 3) {
                                    $j = 'Tepat';
                                   }else{
                                    $j= 'Sangat Tepat';
                                   }
                                   ?>
                                   <p ><b>Jawaban :</b> <?=$j?></p>
								  </div>
                                  <br>
                                  <div class="form-group">
									<label for="inputAddress">
                                   4. Pendapat saudara tentang kesesuaian biaya/retribusi yang dibayarkan dengan biaya yang ditetapkan?</label>
                                   
                                   <?php 
                                   $jawaban = $data[0]->s4;
                                   if ($jawaban == 1) {
                                    $j = 'Tidak Wajar';
                                   }elseif ($jawaban==2) {
                                    $j = 'Kurang Wajar';
                                   }elseif($jawaban == 3) {
                                    $j = 'Wajar';
                                   }else{
                                    $j= 'Sangat Wajar';
                                   }
                                   ?>
                                   <p ><b>Jawaban : </b> <?=$j?></p>
								  </div>
                                  <br>
                                  <div class="form-group">
									<label for="inputAddress">
                                   5. Pendapat saudara apakah produk spesifikasi jenis pelayanan yang diberikan sudah sesuai dengan hasil pelayanan yang diterima?</label>
                                   
                                   <?php 
                                   $jawaban = $data[0]->s5;
                                   if ($jawaban == 1) {
                                    $j = 'Tidak Sesuai';
                                   }elseif ($jawaban==2) {
                                    $j = 'Kurang Sesuai';
                                   }elseif($jawaban == 3) {
                                    $j = 'Sesuai';
                                   }else{
                                    $j= 'Sangat Sesuai';
                                   }
                                   ?>
                                   <p ><b>Jawaban : </b> <?=$j?></p>
								  </div>
                                  <br>
                                  <div class="form-group">
									<label for="inputAddress">
                                   6.  Pendapat saudara tentang kompetensi/kemampuan petugas dalam memberikan pelayanan?</label>
                                   
                                   <?php 
                                   $jawaban = $data[0]->s6;
                                   if ($jawaban == 1) {
                                    $j = 'Sangat Tidak Baik';
                                   }elseif ($jawaban==2) {
                                    $j = 'Tidak Baik';
                                   }elseif($jawaban == 3) {
                                    $j = 'Baik';
                                   }else{
                                    $j= 'Sangat Baik';
                                   }
                                   ?>
                                   <p ><b>Jawaban : </b> <?=$j?></p>
								  </div>
                                  <br>
                                  <div class="form-group">
									<label for="inputAddress">
                                   7.   Pendapat saudara tentang kesopanan dan keramah-tamahan petugas dalam memberikan pelayanan ?</label>
                                   
                                   <?php 
                                   $jawaban = $data[0]->s7;
                                   if ($jawaban == 1) {
                                    $j = 'Sangat Tidak Sopan';
                                   }elseif ($jawaban==2) {
                                    $j = 'Tidak Sopan';
                                   }elseif($jawaban == 3) {
                                    $j = 'Sopan';
                                   }else{
                                    $j= 'Sangat Sopan';
                                   }
                                   ?>
                                   <p ><b>Jawaban : </b> <?=$j?></p>
								  </div>
                                  <br>
                                  <div class="form-group">
									<label for="inputAddress">
                                   8. Apakah pengaduan dan masukan yang diberikan/diajukan ke petugas pengaduan mendapat respon atau ditindaklanjuti petugas ?</label>
                                   
                                   <?php 
                                   $jawaban = $data[0]->s8;
                                   if ($jawaban == 1) {
                                    $j = 'Tidak Direspon';
                                   }elseif ($jawaban==2) {
                                    $j = 'Kurang Direspon';
                                   }elseif($jawaban == 3) {
                                    $j = 'Direspon';
                                   }else{
                                    $j= 'Sangat Direspon';
                                   }
                                   ?>
                                   <p ><b>Jawaban : </b> <?=$j?></p>
								  </div>
                                  <br>
                                  <div class="form-group">
									<label for="inputAddress">
                                   9. Pendapat saudara tentang sarana dan prasarana pelayanan DPUPR Kota Pekalongan?</label>
                                   
                                   <?php 
                                   $jawaban = $data[0]->s9;
                                   if ($jawaban == 1) {
                                    $j = 'Sangat Tidak Baik';
                                   }elseif ($jawaban==2) {
                                    $j = 'Tidak Baik';
                                   }elseif($jawaban == 3) {
                                    $j = 'Baik';
                                   }else{
                                    $j= 'Sangat Baik';
                                   }
                                   ?>
                                   <p ><b>Jawaban : </b> <?=$j?></p>
								  </div>
                                  <br>
                                  <div class="form-group">
									<label for="inputAddress2">10. Testimoni</label>
                                    <p ><?=$data[0]->testi?></p>
									
								  </div>
                                  
								  
								  
                                  <a role="button" href="<?=base_url('Spatial/Survey')?>" class="btn btn-primary"><span class="btn-label"></span>Kembali</a>
								</form>
									</div>
									
								</div>														
							</div><!-- end card-->					
						</div>
						
						<!-- end card-->					
						</div>

				</div>
			<!-- END container-fluid -->

		</div>
		<!-- END content -->

    </div>