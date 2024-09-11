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

                          <th>

                            Status

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

                            $kel = $this->Buka_peta->fetch_record('tb_kelurahan',$d->kelurahan,'id');

                            if ($d->status == 1) {

                              $sta = 'Belum Sesuai';

                            }elseif ($d->status == 2) {

                              $sta = 'Sudah Sesuai';

                            }elseif ($d->status == 3) {

                              $sta = 'Sudah Disurvey';

                            }else{

                              $sta = 'Sudah Siap';

                            }

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

                          <?=$d->jenis?>

                          </td>

                          <td>

                          <?=$sta?>

                          </td>

                          <td align="center">

                              <a role="button" href="<?=base_url('PermohonanKRK/detail_permohonan/'.$d->id)?>" class="btn btn-primary"><i class="fa fa-info"></i>

                          </td>

                          <td align="center">

                          <a role="button" href="#" onclick="hapus(<?=$d->id?>)" class="btn btn-danger"><i class="fa fa-remove"></i></a>

                          </td>

                        </tr>

                        <?php    }

                        } ?>

											

										</tbody>

									</table>

									</div>
                  <script>

function hapus(id) {
  var dialog = confirm('Yakin Akan Menghapus Data?')
  if (dialog) {
  
    location.href="<?php echo base_url().'PermohonanKRK/delete/'?>"+id;
  }else{
   
    return;
  }
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