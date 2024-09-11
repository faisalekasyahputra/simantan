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

									<form method="post" action="<?=base_url('PermohonanKRK/tgllap/')?>">
									<div class="row">
										    <div class="col-md-2">
												<b>Pilih Tanggal Permohonan</b>
											</div>
											<div class="col-md-2">
												<input class="form-control" type="date" id="tgl1" name="tgl1">
											</div>
											<div class="col-md-2">
												<input class="form-control" type="date" id="tgl2" name="tgl2">
											</div>
											<div class="col-md-1">
												<button class="btn btn-primary" type="submit" id="button">Simpan</button>
											</div>
											<div class="col-md-1">
												<button class="btn btn-danger" type="button" onclick="ekspor()" id="button1">Ekspor Ke Excel</button>
											</div>
										
									</div>
									<div class="row">
											<div class="col-md-2">
												
											</div>
										    <div class="col-md-6">
												<p style="display:inline"><b>Periode :</b></p>  <p id="t1" style="display:inline"><?=$tanggal1?></p> s/d<p id="t2" style="display:inline"> <?=$tanggal2?><p>
											</div>
											
											
											
	
									</div>
									</form>
									<br><br>
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

                            Alamat Lokasi

                          </th>
						    <th>

                            Koordinat

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

                            $kel = $this->Buka_peta->fetch_record('tb_kelurahan',$d->kelurahan,'id');
							$geojson = $d->geojson;
							$panjang = strlen($geojson);
							$p = $panjang-104;
							$awal= strpos($geojson, '[[['); 
							$p = $panjang-$awal-8;
							$geo=substr($geojson,$awal+2,$p);
							

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

                          <?=$d->alamat_lokasi.' RT.'.$d->RT_lokasi.' RW.'.$d->RW_lokasi.', Kel. '.$kel[0]->KELURAHAN?>

                          </td>
						
						  <td>
						    <?=$geo?>
						  </td>

                          <td>

                          <?=$d->no_sertifikat?>

                          </td>

                          <td>

                          <?=$d->jenis?>

                          </td>

                        

                     

                        </tr>

                        <?php    }

                        } ?>

											

										</tbody>

									</table>

									</div>
                  <script>



function ekspor() {
	 var t1 = $("#t1").html();
	  var t2 = $("#t2").html();
	 location.href="<?php echo base_url().'Excel?tgl1='?>"+t1+"&tgl2="+t2;
}
</script>
									

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