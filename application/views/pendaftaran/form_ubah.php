                
                
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card form-pendaftaran">
                            <div class="card-body">
                                <div class="d-md-flex justify-content-center">
                                    <h2 class="card-title col-md-10 mb-md-0 mb-3 align-self-center text-center">Formulir Ubah Pendaftaran KRK </h2>
                                    
                                </div>
                                <div class="table-responsive mt-5">
                                <div class="form-wrapper">
                                        <div class="form-group">
                                        <div id="foto1">
                                            <div style='width:155px;border: 2px solid black;border-radius: 10px;padding-top:3px;padding-left:3px;padding-right:3px;padding-bottom:3px'>
                                                <a href="<?=base_url('assets/syarat/'.$data[0]->syarat1)?>" target="_blank"><img style="border-radius: 10px;" src="<?=base_url('assets/images/pdf.png')?>" width="145px"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ms-2">
                                    <div id="foto2">
                                    <div style='width:155px;border: 2px solid black;border-radius: 10px;padding-top:3px;padding-left:3px;padding-right:3px;padding-bottom:3px'>
                                               <a href="<?=base_url('assets/syarat/'.$data[0]->syarat2)?>" target="_blank"><img style="border-radius: 10px;" src="<?=base_url('assets/images/pdf.png')?>" width="145px"></a>
                                            </div>
                                    </div>
                                    </div>
                                    <div class="form-group ms-2">
                                    <?php if ($data[0]->syarat3 == null ){
                                        $fo3 = 'no_image.png';
                                    }else{
                                        $fo3 = 'pdf.png';
                                    }?>
                                    <?php if ($data[0]->syarat4 == null ){
                                        $fo4 = 'no_image.png';
                                    }else{
                                        $fo4 = 'pdf.png';
                                    }?>
                                    <div id="foto3">
                                    <div style='width:155px;border: 2px solid black;border-radius: 10px;padding-top:3px;padding-left:3px;padding-right:3px;padding-bottom:3px'>
                                                <a href="<?=base_url('assets/syarat/'.$data[0]->syarat3)?>" target="_blank"><img style="border-radius: 10px;" src="<?=base_url('assets/images/'.$fo3)?>" width="145px"></a>
                                            </div>

                                    </div>
                                    </div>
                                    <div class="form-group ms-2">
                                    <div id="foto4">
                                    <div style='width:155px;border: 2px solid black;border-radius: 10px;padding-top:3px;padding-left:3px;padding-right:3px;padding-bottom:3px'>
                                                <a href="<?=base_url('assets/syarat/'.$data[0]->syarat4)?>" target="_blank"><img style="border-radius: 10px;" src="<?=base_url('assets/images/'.$fo4)?>" width="145px"></a>
                                            </div>
                                    </div>
                                    </div>
                                    </div>
                                <div class="form-wrapper">
                                        <div class="form-group">
                                        
                                        <label class="col-sm-12">Upload KTP (Format PDF)<sup style="color:red;font-size:14px">*</sup></label>
                                        <div class="col-sm-12 border-bottom">
                                       
                                        <input type="file" name="uploadImageFile1" id="uploadImageFile1" onchange="showImageHereFunc1(1)"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                       
                                    </div>
                                    <div class="form-group ms-2">
                                       
                                        
                                        <label class="col-sm-12">Upload Sertifikat (Format PDF)<sup style="color:red;font-size:14px">*</sup></label>
                                        <div class="col-sm-12 border-bottom">
                                        
                                        <input type="file" name="uploadImageFile2" id="uploadImageFile2" onchange="showImageHereFunc1(2)"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                        
                                    </div>
                                    <div class="form-group ms-2">
                                        
                                        <label class="col-sm-12">Surat Kuasa (Format PDF Jika Ada)</label>
                                        <div class="col-sm-12 border-bottom">
                                        
                                        <input type="file" name="uploadImageFile3" id="uploadImageFile3" onchange="showImageHereFunc1(3)"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group ms-2">
                                        
                                        <label class="col-sm-12">Pendukung Lainnya (Format PDF Jika Ada)</label>
                                        <div class="col-sm-12 border-bottom">
                                        
                                        <input type="file" name="uploadImageFile4" id="uploadImageFile4" onchange="showImageHereFunc1(4)"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Mengajukan Permohonan Keterangan Rencana Pemanfaatan Ruang/ Rekomendasi Siteplan untuk lahan yang terletak di :
                                        </label>
                                       
                                    </div>

                                    <div class="container-fluid">
                
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card form-pendaftaran">
                                                <div class="card-body" id='mymap_nya'>
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <h4 class="card-title text-center">Gambar Lokasi Permohonan<sup style="color:red;font-size:14px">*</sup></h4>
                                                            <div id="map" class="card form-pendaftaran" style="width: 100%;"></div>
                                                    
                                                        </div>
                                                        <div class="col-md-4">
                                                        <h4 class="card-title text-center">Panduan</h4>
                                                            <div  class="card form-pendaftaran" style="width: 100%; height: 500px;">
                                                                <div style="padding-left: 5px;padding-top:5px;padding-right:5px">
                                                               
                                                                    <video id="myVideo" width="100%" style="border-radius:15px" controls>
                                                                    <source src="<?=base_url('assets/tutorial/gambar.mp4')?>" type="video/mp4">
                                                               
                                                                </div>
                                                                <hr>
                                                                <div style="padding-left: 5px;padding-top:5px;padding-right:5px">
                                                                <ul>
                                                                    <li>Cari lokasi yang akan digambar</li>
                                                                    <li>Atau tulis Nama Jalan pada kolom pencarian, lalu tekan tombol cari</li>
                                                                    <li>Klik Logo Polygon pada pojok kanan bawah</li>		
                                                                    <li>Klik pada sudut-sudut area yang kan digambar</li>
                                                                    <li>Tekan kotak titik pertama untuk mengakhiri menggambar</li>	
                                                                    <li>Untuk Menghapus, klik Logo Hapus di pojok kanan bawah.</li>		
                                                                    <li>Lakukan proses menggambar di area lain.</li>
                                                                    <button onClick="tutup()">Tutup</button>				
                                                                </ul>
                                                                   
                                                                
                                                                </div>
                                                        </div>
                                                    </div>

                                                    <div id="result" value="" style="display: none;"><?=$data[0]->geojson?></div>
                                                    
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
               
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Nama Lengkap<sup style="color:red;font-size:14px">*</sup></label>
                                        <div class="col-md-12">
                                            <input type="text" id="nama" name="nama" placeholder="Isi Nama Lengkap"
                                                class="form-control ps-0 form-control-line" value="<?=$data[0]->nama?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label for="example-email" class="col-md-12">Alamat Lengkap<sup style="color:red;font-size:14px">*</sup></label>
                                                <input type="text" name="alamat" id="alamat" placeholder="Isi Alamat Lengkap"
                                                class="form-control ps-0 form-control-line" value="<?=$data[0]->alamat?>">
                                            </div>
                                            <div class="col-md-2">
                                            <label for="example-email" class="col-md-12">RT<sup style="color:red;font-size:14px">*</sup></label>
                                                <input type="text" name="rt" id="rt" 
                                                class="form-control ps-0 form-control-line" value="<?=$data[0]->RT?>">
                                            </div>
                                            <div class="col-md-2">
                                            <label for="example-email" class="col-md-12">RW<sup style="color:red;font-size:14px">*</sup></label>
                                                <input type="text" name="rw" id="rw" 
                                                class="form-control ps-0 form-control-line" value="<?=$data[0]->RW?>">
                                            </div>
                                        </div>
                                    </div>
									<?php if ( $data[0]->kelurahan != 0){?>
                                    <div class="form-wrapper">
                                        <div class="form-group">
                                        <label class="col-sm-12">Kecamatan<sup style="color:red;font-size:14px">*</sup></label>
                                        <div class="col-sm-12 border-bottom">

                                        <?php $kel = $data[0]->kelurahan; 
                                        $nama_kel = $this->Buka_peta->fetch_record('tb_kelurahan',$kel,'id');
                                        $kelurahan = $nama_kel[0]->KELURAHAN;
                                        $kec = $nama_kel[0]->KECAMATAN;
                                        $nama_kec = $this->Buka_peta->fetch_record('tb_kecamatan',$kec,'id');
                                        $kecamatan = $nama_kec[0]->kecamatan;
                                        ?>
                                            <select class="form-select" onchange="kel(this.value)" name="kecamatan" id="kecamatan">
                                            <option value="<?=$kec?>"><?=$kecamatan?></option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group ms-2">
                                        <label class="col-sm-12">Kelurahan<sup style="color:red;font-size:14px">*</sup></label>
                                        <div class="col-sm-12 border-bottom">
                                            <select name="kelurahan" id="kelurahan" class="form-select">
                                                <option value="<?=$kel?>"><?=$kelurahan?></option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    </div>
									<?php } else {?>
									<div class="form-wrapper" id="divkec2" style="display:block">
                                        <div class="form-group">
                                        <label class="col-sm-12">Masukkan Nama Kecamatan<sup style="color:red;font-size:14px">*</sup></label>
                                        <div class="col-sm-12 border-bottom">
                                            <input type="text" id="kecamatan_man1" value="<?=$data[0]->kecamatan_man1?>" name="kecamatan_man1" class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Masukkan Nama Kelurahan<sup style="color:red;font-size:14px">*</sup></label>
                                        <div class="col-sm-12 border-bottom">
                                           <input type="text" id="kelurahan_man1" value="<?=$data[0]->kelurahan_man1?>" name="kelurahan_man1" class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    </div>
									<?php } ?>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Pekerjaan</label>
                                        <div class="col-md-12">
                                        <input type="text" name="pekerjaan" id="pekerjaan" placeholder="Isi Pekerjaan"
                                            class="form-control ps-0 form-control-line" value="<?=$data[0]->pekerjaan?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">No HP/WA<sup style="color:red;font-size:14px">*</sup></label>
                                        <div class="col-md-12">
                                            <input type="number"  name="no_hp"  id="no_hp" placeholder="123 456 7890"
                                                class="form-control ps-0 form-control-line" value="<?=$data[0]->no_hp?>">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                       
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label for="example-email" class="col-md-12">Alamat Lengkap<sup style="color:red;font-size:14px">*</sup></label>
                                                <input type="text" name="alamat_lokasi" id="alamat_lokasi" placeholder="Isi Alamat Lengkap"
                                                class="form-control ps-0 form-control-line" value="<?=$data[0]->alamat_lokasi?>">
                                            </div>
                                            <div class="col-md-2">
                                            <label for="example-email" class="col-md-12">RT</label>
                                                <input type="text" name="rt_lokasi" id="rt_lokasi" 
                                                class="form-control ps-0 form-control-line" value="<?=$data[0]->RT_lokasi?>">
                                            </div>
                                            <div class="col-md-2">
                                            <label for="example-email" class="col-md-12">RW</label>
                                                <input type="text" name="rw_lokasi" id="rw_lokasi" 
                                                class="form-control ps-0 form-control-line" value="<?=$data[0]->RW_lokasi?>">
                                            </div>
                                        </div>
                                    </div>
									<?php if ($data[0]->kelurahan_lokasi !=0) {?>
                                    <div class="form-wrapper">
                                        <div class="form-group">
                                        <label class="col-sm-12">Kecamatan<sup style="color:red;font-size:14px">*</sup></label>
                                        <div class="col-sm-12 border-bottom">

                                        <?php $kel = $data[0]->kelurahan_lokasi; 
                                        $nama_kel = $this->Buka_peta->fetch_record('tb_kelurahan',$kel,'id');
                                        $kelurahan = $nama_kel[0]->KELURAHAN;
                                        $kec = $nama_kel[0]->KECAMATAN;
                                        $nama_kec = $this->Buka_peta->fetch_record('tb_kecamatan',$kec,'id');
                                        $kecamatan = $nama_kec[0]->kecamatan;
                                        ?>
                                            <select class="form-select" onchange="kel_lokasi(this.value)" name="kecamatan_lokasi" id="kecamatan_lokasi">
                                            <option value="<?=$kec?>"><?=$kecamatan?></option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group ms-2">
                                        <label class="col-sm-12">Kelurahan<sup style="color:red;font-size:14px">*</sup></label>
                                        <div class="col-sm-12 border-bottom">
                                            <select name="kelurahan_lokasi" id="kelurahan_lokasi" class="form-select">
                                                <option value="<?=$kel?>"><?=$kelurahan?></option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                    <?php } else {?>
									<div class="form-wrapper" id="divkec2" style="display:block">
                                        <div class="form-group">
                                        <label class="col-sm-12">Masukkan Nama Kecamatan<sup style="color:red;font-size:14px">*</sup></label>
                                        <div class="col-sm-12 border-bottom">
                                            <input type="text" id="kecamatan_man2" value="<?=$data[0]->kecamatan_man2?>" name="kecamatan_man2" class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Masukkan Nama Kelurahan<sup style="color:red;font-size:14px">*</sup></label>
                                        <div class="col-sm-12 border-bottom">
                                           <input type="text" id="kelurahan_man2" value="<?=$data[0]->kelurahan_man2?>" name="kelurahan_man2" class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    </div>
									<?php } ?>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Status Tanah<sup style="color:red;font-size:14px">*</sup></label>
                                        <div class="col-md-12">
                                        <input type="text" id="status" name="status" placeholder="Isi Status Tanah"
                                            class="form-control ps-0 form-control-line" value="<?=$data[0]->status_tanah?>">
                                      
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">No. Sertifikat (5 Digit Terakhir)<sup style="color:red;font-size:14px">*</sup></label>
                                        <div class="col-md-12">
                                        <input type="text"  name="no_sertifikat" id="no_sertifikat" placeholder="Isi No. Sertifikat"
                                            class="form-control ps-0 form-control-line" value="<?=$data[0]->no_sertifikat?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Luas Tanah<sup style="color:red;font-size:14px">*</sup></label>
                                        <div class="col-md-12">
                                        <input type="number" name="luas" id="luas" placeholder="Isi Luas Tanah"
                                            class="form-control ps-0 form-control-line" value="<?=$data[0]->luas_tanah?>">
                                        </div>
                                    </div>
                                    <?php 
                                    $jenis = $data[0]->jenis;
                                    if ($jenis=='siteplan') {
                                        $jns =  'Site Plan';
                                      
                                    }elseif ($jenis =='krk') {
                                        $jns =  'KRK';
                                    
                                    }else{
                                        $jns =  'Dokumen Kajian';
                                    
                                    }?>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Rencana Pemanfaatan Ruang<sup style="color:red;font-size:14px">*</sup></label>
                                        <div class="col-md-12">
                                       <input type="hidden" name="jns" id="jns" value="<?=$jenis?>"
                                            class="form-control ps-0 form-control-line">
                                        <input type="text" name="rencana" id="rencana" value="<?=$data[0]->rencana?>"
                                            class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12 d-flex">
                                            <button onclick="validasi(<?=$data[0]->kelurahan?>,<?=$data[0]->kelurahan_lokasi?>)" class="btn btn-primary mx-auto mx-md-0 text-white">Simpan</button>
                                        </div>
                                    </div>
                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>

window.onload = function() {
    peta();
    tutup();
    $.ajax({
            type: 'POST',
          	url: "<?=base_url('Pendaftaran/kecamatan')?>",
          	
          	success: function(msg){
                $("#kecamatan").html(msg);
                $("#kecamatan_lokasi").html(msg);
            }
        });

        $.ajax({
            type: 'POST',
          	url: "<?=base_url('Pendaftaran/kelurahan/1')?>",
          	
          	success: function(msg){
                $("#kelurahan").html(msg);
            }
        });
 
};

function kel(a) {
    $.ajax({
            type: 'POST',
          	url: "<?=base_url('Pendaftaran/kelurahan/')?>"+a,
          	
          	success: function(msg){
                $("#kelurahan").html(msg);
            }
        });
}
function kel_lokasi(a) {
    $.ajax({
            type: 'POST',
          	url: "<?=base_url('Pendaftaran/kelurahan/')?>"+a,
          	
          	success: function(msg){
                $("#kelurahan_lokasi").html(msg);
            }
        });
}





function validasi(a,b) {
  const foto2 = $('#uploadImageFile2').prop('files')[0];
       const foto3 = $('#uploadImageFile3').prop('files')[0];
       const foto4 = $('#uploadImageFile4').prop('files')[0];
       var fot1 = $('#uploadImageFile1').val();
       var fot2 = $('#uploadImageFile2').val();
       var fot3 = $('#uploadImageFile3').val();
       var fot4 = $('#uploadImageFile4').val();
       var nama = document.getElementById('nama').value;
       var alamat = document.getElementById('alamat').value;
       var rt = document.getElementById('rt').value;
       var rw = document.getElementById('rw').value;
	   if (a != 0) {
			var kelurahan = document.getElementById('kelurahan').value;
			var kecamatan = "-";
	   }else{
		   var kelurahan = document.getElementById('kelurahan_man1').value;
		   if (kelurahan =="") {
			     swal('Terjadi Kesalahan','Anda Belum Mengisi Kelurahan');
				return;
			}
		   var kecamatan = document.getElementById('kecamatan_man1').value;
		   if (kecamatan =="") {
			     swal('Terjadi Kesalahan','Anda Belum Mengisi Kecamatan');
				return;
			}
	   }
	    if (b != 0) {
			var kelurahan_lokasi = document.getElementById('kelurahan_lokasi').value;
			var kecamatan_lokasi = "";
	   }else{
		   var kelurahan_lokasi = document.getElementById('kelurahan_man2').value;
		   if (kelurahan_lokasi =="") {
			     swal('Terjadi Kesalahan','Anda Belum Mengisi Kelurahan Lokasi');
				return;
			}
		   var kecamatan_lokasi = document.getElementById('kecamatan_man2').value;
		   if (kecamatan_lokasi =="") {
			     swal('Terjadi Kesalahan','Anda Belum Mengisi Kecamatan Lokasi');
				return;
			}
	   }
       var pekerjaan = document.getElementById('pekerjaan').value;
       var no_hp = document.getElementById('no_hp').value;
       var geo = document.getElementById('result').innerHTML;
       var alamat_lokasi = document.getElementById('alamat_lokasi').value;
       var rt_lokasi = document.getElementById('rt_lokasi').value;
       var rw_lokasi= document.getElementById('rw_lokasi').value;
      
       var status = document.getElementById('status').value;
       var no_sertifikat = document.getElementById('no_sertifikat').value;
       var luas = document.getElementById('luas').value;
       var jenis = document.getElementById('jns').value;
	   var rencana = document.getElementById('rencana').value;
	   var a = a;
	   var b = b;
	   
       
       var id = '<?=$data[0]->id?>';   
if (geo == ""){
            swal('Terjadi Kesalahan','Anda Belum Menggambar Peta');
            return;
        }else if (nama == "") {
            swal('Terjadi Kesalahan','Anda Belum Mengisi Nama');
            return;
       }else if (alamat == ""){
            swal('Terjadi Kesalahan','Anda Belum Mengisi Alamat');
            return
       }else if (rt == ""){
            swal('Terjadi Kesalahan','Anda Belum Mengisi RT');
            return;
       
       }else if (rw == ""){
            swal('Terjadi Kesalahan','Anda Belum Mengisi RW');
            return;
       }else if (pekerjaan == ""){
            swal('Terjadi Kesalahan','Anda Belum Mengisi Pekerjaan');
            return;
       }else if (no_hp == ""){
            swal('Terjadi Kesalahan','Anda Belum Mengisi Telepon');  
            return;
       }else if (kelurahan  == ""){
            swal('Terjadi Kesalahan','Anda Belum Mengisi Kelurahan'); 
            return;
       }else if (alamat_lokasi  == ""){
            swal('Terjadi Kesalahan','Anda Belum Mengisi Alamat Lokasi'); 
            return;
       }else if (rt_lokasi  == ""){
            swal('Terjadi Kesalahan','Anda Belum Mengisi RT Lokasi'); 
            return;
       }else if (rw_lokasi  == ""){
            swal('Terjadi Kesalahan','Anda Belum Mengisi RW Lokasi');
            return;
       }else if (kelurahan_lokasi  == ""){
            swal('Terjadi Kesalahan','Anda Belum Mengisi Kelurarahan Lokasi');
            return;
       }else if (status == ""){
            swal('Terjadi Kesalahan','Anda Belum Mengisi Status Tanah'); 
            return;
       }else if (no_sertifikat == ""){
            swal('Terjadi Kesalahan','Anda Belum Mengisi Sertifkat'); 
            return;
       }else if (luas == ""){
            swal('Terjadi Kesalahan','Anda Belum Mengisi Luas Tanah'); 
            return;
	  }else if (rencana == ""){
            swal('Terjadi Kesalahan','Anda Belum Mengisi Rencana Pemanfaatan Ruang'); 
            return;
       }else{	   
			let formData = new FormData();
			formData.append('foto1', foto1);
			formData.append('foto2', foto2);
			formData.append('foto3', foto3);
			formData.append('foto4', foto4);
			formData.append('nama', nama);
			formData.append('alamat',alamat);	
			formData.append('pekerjaan',pekerjaan);	
			formData.append('no_hp',no_hp);	
			formData.append('rt',rt);
			formData.append('geo',geo);
			formData.append('rw',rw);
			formData.append('kelurahan',kelurahan);
			formData.append('kecamatan',kecamatan);
			formData.append('kecamatan_lokasi',kecamatan_lokasi);
			formData.append('alamat_lokasi',alamat_lokasi);	
			formData.append('rt_lokasi',rt_lokasi);
			formData.append('rw_lokasi',rw_lokasi);
			formData.append('kelurahan_lokasi',kelurahan_lokasi);
			formData.append('status',status);
			formData.append('no_sertifikat',no_sertifikat);
			formData.append('luas',luas);
			formData.append('a',a);
			formData.append('b',b);
			formData.append('jenis',jenis);
			formData.append('rencana',rencana);
			formData.append('id',id);
			$.ajax({
				type: 'POST',
            url: '<?php echo base_url('Draf_krk/proses_ubah'); ?>',
		    data: formData,
		    cache: false,
		    processData: false,
		    contentType: false,
            success: function(response)
            {
                
               if (response == 'Data Sukses') {
                
                swal({ title: "Permohonan Sukses",
                  text: 'Permohonan Telah Diubah',
                  type: "success"}).then(okay => {
                    if (okay) {
                      window.location.href =  "<?=base_url('Draf_krk')?>";
                    }
                });
                
               }else{
                alert(msg);
                swal('Gagal','Permohonan Gagal Di Ubah');
                return;
               }
               
                
            }
				
			});
		
	   }

}
function showImageHereFunc1(e) {
  
  var total_file=document.getElementById("uploadImageFile"+e).files.length;
  for(var i=0;i<total_file;i++) {
      
      $('#foto'+e).html("<div style='width:155px;border: 2px solid black;border-radius: 10px;padding-top:3px;padding-left:3px;padding-right:3px;padding-bottom:3px'><img  style='border-radius: 10px;' src='"+URL.createObjectURL(event.target.files[i])+"' width='145px' ></div>");
  }
};
function buka() {
    h = '<div class="row"><div class="col-md-8"><h4 class="card-title text-center">Gambar Lokasi Permohonan</h4><div id="map" class="card form-pendaftaran" style="width: 100%; height: 500px;"></div></div>';
    h = h + '<div class="col-md-4"><h4 class="card-title text-center">Panduan</h4><div  class="card form-pendaftaran" style="width: 100%; height: 500px;"><div style="padding-left: 5px;padding-top:5px;padding-right:5px">';
    h = h + '<video id="myVideo" width="100%" style="border-radius:15px" controls><source src="<?=base_url('assets/tutorial/gambar.mp4')?>" type="video/mp4">';
    h = h + '</div><hr><div style="padding-left: 5px;padding-top:5px;padding-right:5px"><ul>';
    h = h + '<li>Cari lokasi yang akan digambar</li><li>Atau tulis Nama Jalan pada kolom pencarian, lalu tekan tombol cari</li>';
    h = h + '<li>Klik Logo Polygon pada pojok kanan bawah</li><li>Klik pada sudut-sudut area yang kan digambar</li>';
    h = h + '<li>Tekan kotak titik pertama untuk mengakhiri menggambar</li><li>Untuk Menghapus, klik Logo Hapus di pojok kanan bawah.</li>';		
    h = h + '<li>Lakukan proses menggambar di area lain.</li><button onClick="tutup()">Tutup</button></ul></div></div></div></div>';
    h = h + '<div id="result" value="" style="display:none;"><?=$data[0]->geojson?></div><input type="hidden" placeholder="" name="geo" id="geo">';
    $('#mymap_nya').html(h);
    peta();
}

function tutup(){
    $('#mymap_nya').html('<h4 class="card-title text-center">Gambar Lokasi Permohonan</h4><div id="map" class="card form-pendaftaran" style="width: 100%; height: 500px;"></div><div id="result" value="" style="display: none;"><?=$data[0]->geojson?></div><input type="hidden" placeholder="" name="geo" id="geo"><button onClick="buka()">Lihat Panduan</button>');
    peta()
   }

function peta() {
    var osmUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            osmAttrib = '&copy; <a href="http://openstreetmap.org/copyright">OpenStreetMap</a> contributors',
            osm = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
            maxZoom: 20,subdomains:['mt0','mt1','mt2','mt3']}),
            map = new L.map('map',{
                    center: L.latLng([-6.8904456,109.6849576]),
                    zoom: 12.5,
                    maxBounds: [[-7.09, 109.4071054],[-6.6,109.9205119]],
                    attributionControl: false,
                    fullscreenControl: true,
                    fullscreenControlOptions: {
                    position: 'topleft'
                },
                });
drawnItems = L.featureGroup().addTo(map);
var osmGeocoder = new L.Control.OSMGeocoder({placeholder: 'Cari Jalan/Lokasi...'});
map.addControl(osmGeocoder);
<?php if ($data[0]->geojson != null || ($data[0]->geojson !='')) { ?>
            var drawnItems = L.geoJson(<?php echo $data[0]->geojson; ?>).addTo(map);   
   <?php } ?>
   var drawControl = new L.Control.Draw({
        draw: {
            marker: false,
            circlemarker: false,
            circle: false,
            rectangle: false,
            polyline: false,
         },
         edit: {
             featureGroup: drawnItems,
             edit: false
         }
     });

map.addControl(drawControl);
    map.on(L.Draw.Event.CREATED, function (event) {
        var layer = event.layer;

        drawnItems.addLayer(layer);
    });

    L.control.layers({
        'google hybrid': osm.addTo(map),
        "osm": L.tileLayer(osmUrl, { maxZoom: 18, attribution: osmAttrib })},
         { 'drawlayer': drawnItems }, 
         { position: 'topright', collapsed: false }).addTo(map);

map.on('draw:created', function (event) {
    var layer = event.layer,
        feature = layer.feature = layer.feature || {};
    
        feature.type = feature.type || "Feature";
    var props = feature.properties = feature.properties || {};
    drawnItems.addLayer(layer);
    var s = L.GeometryUtil.geodesicArea(layer.getLatLngs());
    var hasil = $('#result').html(JSON.stringify(drawnItems.toGeoJSON()));
    
    var cookieValue = document.getElementById('result').innerHTML;
    document.getElementById('geo').value = cookieValue;
   
    
}); 

var base = new L.GeoJSON.AJAX(["<?=base_url('assets/Batas_kecamatan.geojson')?>"],{style:base_awal });  
function base_awal(feature) { return {weight: '2',color : 'white',fillopacity : 0,fillOpacity : 0,fillcolor : 'transparent',};}
base.addTo(map);
}
</script>