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
									Berisikan Data Pengguna								</div>
									
								<div class="card-body">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        
                                    <a role="button" href="<?=base_url('Pengguna/form_tambah')?>" class="btn btn-primary"><span class="btn-label"><i class="fa fa-plus"></i></span>Tambah</a>
                                    </div>
                                    <br>
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
                           Email
                          </th>
                          <th>
                            Jabatan
                          </th>
                          <th>
                            Detail
                          </th>
                          <th>
                            Atur Pengguna
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
                            <?=$d->email?>
                          </td>
                          
                          <td>
                          <?=$d->jabatan?>
                          </td>
                          
                        
                          <td align="center">
                          <a role="button" href="<?=base_url('Pengguna/form_ubah/'.$d->id)?>" class="btn btn-primary"><span class="btn-label"><i class="fa fa-info"></i></span>Detail</a>
                          </td>
                          <td align="center">
                          <a role="button" href="<?=base_url('Pengguna/form_atur/'.$d->id)?>" class="btn btn-info"><span class="btn-label"><i class="fa fa-gear"></i></span>Atur</a>
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
  var dialog = confirm('Yakin Akan Menghapus Data?')
  if (dialog) {
  
    location.href="<?php echo base_url().'Pengguna/delete/'?>"+id;
  }else{
   
    return;
  }
}
</script>