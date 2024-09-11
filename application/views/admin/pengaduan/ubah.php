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
									  <input type="text" class="form-control" id="inputEmail4" name="zona" value="<?=$data[0]->nama?>" autocomplete="off">
									</div>
									
								  </div>
								  <div class="form-group">
									<label for="inputAddress">Alamat</label>
									<input type="text" class="form-control" id="inputAddress" name="jenis" value="<?=$data[0]->alamat?>">
								  </div>
								  <div class="form-row">
									<div class="form-group col-md-6">
									  <label for="inputEmail4">Email</label>
									  <input type="text" class="form-control" id="inputEmail4" name="zona" value="<?=$data[0]->email?>" autocomplete="off">
									</div>
									<div class="form-group col-md-6">
									  <label for="inputEmail4">No Telepon</label>
									  <input type="text" class="form-control" id="inputEmail4" name="zona" value="<?=$data[0]->telepon?>" autocomplete="off">
									</div>
								  </div>
                                  <div class="form-group">
									<label for="inputAddress2">Isi Pengaduan</label>
                                    <textarea required class="form-control" name="diizinkanbersyarat"><?=$data[0]->ket?></textarea>
									
								  </div>
                                  
								  <div class="form-row">
									<div class="form-group col-md-4">
									  <label for="inputCity">Foto Aduan</label>
									  <img src="<?=base_url('assets/pengaduan/'.$data[0]->foto)?>" width="100%">
									</div>
									
								  </div>
								  
                                  <a role="button" href="<?=base_url('Pengaduan')?>" class="btn btn-primary"><span class="btn-label"></span>Kembali</a>
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