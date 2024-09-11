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
									Tambah Data KUPZ
								</div>
									
								<div class="card-body">
                                <form autocomplete="off" action="<?=base_url('MasterKUPZ/ubah/'.$data[0]->Kode)?>" method="post">
								  <div class="form-row">
									<div class="form-group col-md-6">
									  <label for="inputEmail4">Zona</label>
									  <input type="text" class="form-control" id="inputEmail4" name="zona" value="<?=$data[0]->Zona?>" autocomplete="off">
									</div>
									<div class="form-group col-md-6">
									  <label for="inputPassword4">Sub Zona</label>
									  <input type="text" class="form-control" id="inputPassword4" name="subzona" value="<?=$data[0]->Sub_Zona?>" autocomplete="off">
									</div>
								  </div>
								  <div class="form-group">
									<label for="inputAddress">Jenis Pola Ruang</label>
									<input type="text" class="form-control" id="inputAddress" name="jenis" value="<?=$data[0]->Jenis_Pola_Ruang?>">
								  </div>
								  <div class="form-group">
									<label for="inputAddress2">Di Izinkan</label>
                                    <textarea required class="form-control" name="diizinkan" ><?=$data[0]->Di_Izinkan?></textarea>
									
								  </div>
                                  <div class="form-group">
									<label for="inputAddress2">Di Izinkan Bersyarat</label>
                                    <textarea required class="form-control" name="diizinkanbersyarat"><?=$data[0]->Di_Izinkan_Bersyarat?></textarea>
									
								  </div>
                                  <div class="form-group">
									<label for="inputAddress2">Di Izinkan Terbatas</label>
                                    <textarea required class="form-control" name="diizinkanterbatas"><?=$data[0]->Di_Izinkan_Terbatas?></textarea>
									
								  </div>
								  <div class="form-row">
									<div class="form-group col-md-4">
									  <label for="inputCity">KDB</label>
									  <input type="number" class="form-control" id="inputAddress2" name="kdb" value="<?=$data[0]->KDB?>">
									</div>
									<div class="form-group col-md-4">
									  <label for="inputState">KLB</label>
									  <input type="number" class="form-control" id="inputAddress2" name="klb" value="<?=$data[0]->KLB?>">
									</div>
									<div class="form-group col-md-4">
									  <label for="inputZip">KDH</label>
									  <input type="number" class="form-control" id="inputAddress2" name="kdh" value="<?=$data[0]->KDH?>">
									</div>
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