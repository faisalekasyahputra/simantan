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
									Tambah Pengguna
								</div>
									
								<div class="card-body">
                                <form autocomplete="off" action="<?=base_url('pengguna/tambah')?>" method="post" enctype="multipart/form-data">
								  <div class="form-row">
									<div class="form-group col-md-12">
									  <label for="inputEmail4">Nama</label>
									  <input type="text" class="form-control" id="inputEmail4" name="nama" placeholder="Nama" autocomplete="off">
									</div>
									
								  </div>
								  
								  <div class="form-group">
									<label for="inputAddress2">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email" autocomplete="off">
									
								  </div>
                                  <div class="form-group">
									<label for="inputAddress2">Password</label>
                                    <input type="password" class="form-control" id="inputEmail4" name="pass" placeholder="" autocomplete="off">
									
								  </div>
                                  <div class="form-group">
									<label for="inputAddress2">No Telepon</label>
                                    <input type="number" class="form-control" id="inputEmail4" name="telp" placeholder="No Telepon" autocomplete="off">
									
								  </div>
								  
                                  <div class="form-group">
									<label for="inputAddress2">Jabatan</label>
                                    <input type="text" class="form-control" id="inputEmail4" name="jabatan" placeholder="Jabatan" autocomplete="off">
									
								  </div>
								  <button type="submit" class="btn btn-primary">Simpan</button>
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