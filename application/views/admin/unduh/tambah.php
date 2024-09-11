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
									Tambah File Unduh
								</div>
									
								<div class="card-body">
                                <form autocomplete="off" action="<?=base_url('Unduh/tambah')?>" method="post" enctype="multipart/form-data">
								  <div class="form-row">
									<div class="form-group col-md-12">
									  <label for="inputEmail4">Nama</label>
									  <input type="text" class="form-control" id="inputEmail4" name="nama" placeholder="Nama" autocomplete="off">
									</div>
									
								  </div>
								  
								  <div class="form-group">
									<label for="inputAddress2">Deskripsi</label>
                                    <textarea required class="form-control" name="deskripsi"></textarea>
									
								  </div>
                                  <div class="form-group">
									<label for="inputAddress2">Jenis</label>
                                    <select name="jenis" id="jenis" class="form-control">
                                    <option value="peta">Peta</option>
                                    <option value="2">Dokumen</option>
                                    </select>
									
								  </div>
                                  <div class="form-group">
									<label for="inputAddress2">File</label>
                                    <input type="file" class="form-control" id="file" name="file_nya" >
									
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