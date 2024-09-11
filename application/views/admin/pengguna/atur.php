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
									Ubah Pengguna
								</div>
									
								<div class="card-body">
                                <form autocomplete="off" action="<?=base_url('Pengguna/simpan_atur/'.$l)?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" value="<?=$data[0]->id?>" name="id">
                                <div class="form-check">
                                <?php
                                if ($menu != null) {
                                    $i = 0;
                                    foreach ($menu as $m) {
                                    $cek_user = $this->Buka_peta->multi_user($data[0]->id,$m->id);
                                    if ($cek_user != null) {?>
									<label class="form-check-label">
									  <input type="checkbox" class="form-check-input" id="v<?=$i?>" name="v<?=$i?>" value="<?=$m->id?>" checked>
									  <?=$m->menu?>
									</label>
                                    <br>
                                    <?php } else {  ?>
                                        <label class="form-check-label">
									  <input type="checkbox" class="form-check-input" id="v<?=$i?>" name="v<?=$i?>" value="<?=$m->id?>">
									  <?=$m->menu?>
									</label>
                                    <br>                                 
                                        <?php }
                                        $i++; 
                                    }
                                    }
                                    ?>

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