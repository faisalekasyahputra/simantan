                
                
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
                                                <th class="border-top-0">Status</th>
                                                <th class="border-top-0">Detail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if ($data != null) {
                                                $i = 0;
                                                foreach ($data as $d) {
                                                    $i++;
                                                    if($d->status=='1' || $d->status==null) {
                                                        $sta='Persiapan';
                                                    }elseif($d->status=='2'){
                                                        $sta='Verifikasi Berkas';
                                                    }elseif($d->status=='3'){
                                                        $sta = 'Proses Survey';
                                                    }else{
                                                        $sta='Permohonan Siap';
                                                    }
                                                    
                                                    ?>
                                            <tr>
                                                <td><?=$i;?></td>
                                                <td><?=$d->nama?></td>
                                                <td><?=$d->no_sertifikat?></td>
                                                <td><?=date('d-m-Y', strtotime($d->tanggal))?></td>
                                                <td><?=$sta?></td>
                                                <td><a href="<?=base_url('Draf_krk/lacak/'.$d->id)?>">Detail</a></td>
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

