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
									Berisikan daftar pemohon KRK
								</div>
									
								<div class="card-body">
									<div class="table-responsive">
									<table id="example1" class="table table-bordered table-hover display">
										<thead>
											<tr>
                      <th>
                           No
                          </th>
                          <th>
                            Tanggal Permohonan
                          </th>
                          <th>
                           Nama
                          </th>
                          <th>
                            Alamat
                          </th>
                          <th>
                            No. Sertifikat
                          </th>
                          <th>
                            Jenis Permohonan
                          </th>
                          
                          
											</tr>
										</thead>										
										<tbody>
                    <?php if ($data !=null) {
                          $i=0;
                          foreach ($data as $d) {
                            $i++;
                            $kel = $this->Buka_peta->fetch_record('tb_kelurahan',$d->kelurahan_lokasi,'id');
                            
                       ?>
                        <tr>
                          <td class="py-1">
                            <?=$i;;?>
                          </td>
                          <td>
                            <?=date('d-m-Y',strtotime($d->tanggal))?>
                          </td>
                          <td>
                            <?=$d->nama?>
                          </td>
                          
                          <td>
                          <?=$d->alamat.', Kel. '.$kel[0]->KELURAHAN?>
                          </td>
                          <td>
                          <?=$d->no_sertifikat?>
                          </td>
                          <td>
                          <?=$d->revisi?>
                          </td>
                          
                          
                        </tr>
                        <?php    }
                        } ?>
											
										</tbody>
									</table>
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