<form  action="<?=base_url('PermohonanKRK/proses_ubah/'.$data[0]->id)?>" method="post" enctype="multipart/form-data" id="imageInputForm">
<div class="form-row">
									<div class="form-group col-md-12">
									  <label for="inputEmail4">Nama Lengkap</label>
									  <input type="text" id="nama" name="nama" class="form-control"  value="<?=$data[0]->nama?>" autocomplete="off">
									<input type="hidden" value="<?=$data[0]->kelurahan?>" name="jenkel"/>
									</div>
									<div class="form-group col-md-12">
									  <label for="inputPassword4">Alamat Lengkap</label>
									  <input type="text" name="alamat" id="alamat" class="form-control"  value="<?=$data[0]->alamat?>" autocomplete="off">
									  <input type="hidden" name="id" value="<?=$data[0]->id?>" />
									</div>
								  </div>
                                  <div class="form-row">
									<div class="form-group col-md-6">
									  <label for="inputEmail4">Pekerjaan</label>
									  <input type="text" name="pekerjaan" id="pekerjaan" class="form-control"  value="<?=$data[0]->pekerjaan?>" autocomplete="off">
									</div>
									<div class="form-group col-md-6">
									  <label for="inputPassword4">Nomer WA</label>
									  <input type="text" name="no_hp"  id="no_hp" class="form-control"  value="<?=$data[0]->no_hp?>" autocomplete="off">
									</div>
								  </div>
								  
								  <?php if ($data[0]->kelurahan != 0 ) { ?>
								  <div class="form-row">
									<div class="form-group col-md-6">
									  <label for="inputEmail4">Kecamatan</label>
                                      <?php $kel = $data[0]->kelurahan; 
                                        $nama_kel = $this->Buka_peta->fetch_record('tb_kelurahan',$kel,'id');
                                        $kelurahan = $nama_kel[0]->KELURAHAN;
                                        $kec = $nama_kel[0]->KECAMATAN;
                                        $nama_kec = $this->Buka_peta->fetch_record('tb_kecamatan',$kec,'id');
                                        $kecamatan = $nama_kec[0]->kecamatan;
										
										$kec1 = $this->Buka_peta->fetch_record('tb_kecamatan',null,null);
                                        ?>
									  <select name="kecamatan" id="kecamatan" onchange="te(this.value)" class="form-control">
                                      <option value="<?=$kec?>"><?=$kecamatan?></option>
									   <?php foreach ($kec1 as $k) {?>
									  <option value="<?=$k->id?>"><?=$k->kecamatan?></option>
									  <?php } ?>
									  </select>
									</div>
									<div class="form-group col-md-6">
									  <label for="inputPassword4">Kelurahan</label>
									  <select   name="kelurahan" id="kelurahan" class="form-control">
                                      <option value="<?=$kel?>"><?=$kelurahan?></option>
									 
									  </select>
									</div>
								  </div>
								  <?php } else {?>
								   <div class="form-row">
										<div class="form-group col-md-6">
											<label for="inputEmail4">Kecamatan</label>
											<input type="text" class="form-control" name="kecamatan_man1" value="<?=$data[0]->kecamatan_man1?>">
										</div>
										<div class="form-group col-md-6">
											  <label for="inputPassword4">Kelurahan</label>
											  <input type="text" class="form-control" name="kelurahan_man1" value="<?=$data[0]->kelurahan_man1?>">
										</div>
									  
								   </div>
								  
								  <?php }?>
								  <script>
								  function te(a) {
									   $.ajax({
               type: 'POST',
                 url: "<?=base_url('Pendaftaran/kelurahan/')?>"+a,
                 
                 success: function(msg){
                   $("#kelurahan").html(msg);
               }
           });
								  }
								  </script>
								  <div class="form-row">
									<div class="form-group col-md-4">
									  <label for="inputCity">Status Tanah</label>
									  <input type="text" value="<?=$data[0]->status_tanah?>"  class="form-control" id="status" name="status">
									</div>
									<div class="form-group col-md-4">
									  <label for="inputState">No Sertifikat</label>
									  <input type="text" value="<?=$data[0]->no_sertifikat?>"  class="form-control" name="no_sertifikat" id="no_sertifikat">
									  
									</div>
									<div class="form-group col-md-4">
									  <label for="inputZip">Luas Tanah</label>
									  <input type="text" value="<?=$data[0]->luas_tanah?>" class="form-control" name="luas" id="luas">
									</div>
									<div class="form-group col-md-4">
									  <label for="inputZip">Luas Tanah</label>
									  <input type="text" value="<?=$data[0]->luas_tanah?>" class="form-control" name="luas" id="luas">
									</div>
								  </div>
								  <div class="form-row">
								  <div class="form-group col-md-6">
									  <label for="inputEmail4">Upload KTP</label>
									  <input type="file" id="uploadImageFile1" accept="application/pdf" onchange="showImageHereFunc1()" name="uploadImageFile1"
                                                class="form-control ps-0 form-control-line">
                                      <a href="<?=base_url('assets/syarat/'.$data[0]->syarat1)?>" target="_blank"><div id="showImageHere1">   
                                      </div></a>
                                    </div>
									<div class="form-group col-md-6">
									  <label for="inputEmail4">Upload Sertifikat</label>
									  <input type="file" id="uploadImageFile2" accept="application/pdf" onchange="showImageHereFunc2()" name="uploadImageFile2"
                                                class="form-control ps-0 form-control-line">
												<a href="<?=base_url('assets/syarat/'.$data[0]->syarat2)?>" target="_blank"><div id="showImageHere2">
                                            
                                               
                                      </div></a>
                                    </div>
									
								  </div>
								  <div class="form-row">
								  <div class="form-group col-md-6">
									  <label for="inputEmail4">Upload Surat Kuasa</label>
									  <input type="file" id="uploadImageFile3" accept="application/pdf" onchange="showImageHereFunc3()" name="uploadImageFile3"
                                                class="form-control ps-0 form-control-line">
												<a href="<?=base_url('assets/syarat/'.$data[0]->syarat3)?>" target="_blank"><div id="showImageHere3">   
                                      </div></a>
                                    </div>
									<div class="form-group col-md-6">
									  <label for="inputEmail4">Upload Pendukung Lain</label>
									  <input type="file" id="uploadImageFile4" accept="application/pdf" onchange="showImageHereFunc4()" name="uploadImageFile4"
                                                class="form-control ps-0 form-control-line">
												<a href="<?=base_url('assets/syarat/'.$data[0]->syarat4)?>" target="_blank"><div id="showImageHere4">
                                            
                                               
                                      </div></a>
                                    </div>
									
								  </div>
								  <button type="submit"  class="btn btn-primary" name="uploadImage">Ubah</button>
								</form>

								<Script>
								
							   
							   
								function showImageHereFunc1() {
											var total_file=document.getElementById("uploadImageFile1").files.length;
											for(var i=0;i<total_file;i++) {
											document.getElementById('im1').innerHTML = "<img class='card-img-top' src='<?=base_url("assets/images/pdf.png")?>'>";
											
									}
									};
									function showImageHereFunc2() {
											var total_file=document.getElementById("uploadImageFile2").files.length;
											for(var i=0;i<total_file;i++) {
												document.getElementById('im2').innerHTML = "<img class='card-img-top' src='<?=base_url("assets/images/pdf.png")?>'>";
									}
									};
									function showImageHereFunc3() {
											var total_file=document.getElementById("uploadImageFile3").files.length;
											for(var i=0;i<total_file;i++) {
												document.getElementById('im3').innerHTML = "<img class='card-img-top' src='<?=base_url("assets/images/pdf.png")?>'>";
									}
									};
									function showImageHereFunc4() {
											var total_file=document.getElementById("uploadImageFile4").files.length;
											for(var i=0;i<total_file;i++) {
												document.getElementById('im4').innerHTML = "<img class='card-img-top' src='<?=base_url("assets/images/pdf.png")?>'>";
									}
									};
									
								</Script>