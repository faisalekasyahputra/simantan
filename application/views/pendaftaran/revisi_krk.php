                
                
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card form-pendaftaran">
                            <div class="card-body">
                            <h4 class="card-title"><?=$bread?></h4>
                               
                                <div class="table-responsive">
                                    <table class="table user-table no-wrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">#</th>
                                                <th class="border-top-0">Nama Pemohon</th>
                                                <th class="border-top-0">No. Sertifikat</th>
                                                <th class="border-top-0">Tanggal Pengajuan</th>
                                                <th class="border-top-0">Jenis Permohonan</th>
                                                <th class="border-top-0">Detail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if ($data != null) {
                                                $i = 0;
                                                foreach ($data as $d) {
                                                    $i++;?>
                                            <tr>
                                                <td><?=$i;?></td>
                                                <td><?=$d->nama?></td>
                                                <td><?=$d->no_sertifikat?></td>
                                                <td><?=date('d-m-Y', strtotime($d->tanggal))?></td>
                                                <td><?=$d->jenis?></td>
                                                <td><a href="<?=base_url('Revisi_krk/detail/'.$d->id)?>">Detail</a></td>
                                            </tr>
                                            <?php }
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>  
                               
                               
                            </div>
                        </div>
                    </div>
                </div>

