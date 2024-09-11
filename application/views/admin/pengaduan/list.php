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

									Berisikan daftar Pengaduan

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

                           Nama

                          </th>

                          <th>

                           Nomer Telepon

                          </th>

                          <th>

                            Isi Pengaduan

                          </th>

                          <th>

                            Koordinat

                          </th>

                         

                          <th>

                            Detail

                          </th>

                          <th>

                            Hapus

                          </th>

											</tr>

										</thead>										

										<tbody>

                    <?php if ($data !=null) {

                          $i=0;

                          foreach ($data as $d) {

                            $i++;

                            

                       ?>

                        <tr>

                          <td class="py-1">

                            <?=$i;?>

                          </td>

                          <td>

                            <?=$d->nama?>

                          </td>

                          <td>

                            <?=$d->telepon?>

                          </td>

                          

                          <td>

                          <?=$d->ket?>

                          </td>

                          

                          <td>

                          <a href="https://www.google.co.id/maps/@<?=$d->koordinat?>,15z" target="_blank"><?=$d->koordinat?></a>

                          </td>

                          <td align="center">

                          <a role="button" href="<?=base_url('Pengaduan/form_ubah/'.$d->id)?>" class="btn btn-primary"><span class="btn-label"><i class="fa fa-info"></i></span>Detail</a>

                          </td>

                          <td align="center">

                          <a role="button" href="" onclick="hapus(<?=$d->id?>)" class="btn btn-danger"><span class="btn-label"><i class="fa fa-remove"></i></span>Hapus</a>

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
    <script>
      function hapus(id) {
        var dialog= confirm('Yakin Akan menghapus Data?');
        if (dialog) {
          location.href="<?php echo base_url().'Pengaduan/delete/'?>"+id;
        }else{
          return;
        }
      }
    </script>