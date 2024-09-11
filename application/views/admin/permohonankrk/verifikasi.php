<br>


<h5>Verifikasi Kesesuaian Permohonan</h5>


<hr>


<div class="form-group row">


    <label  class="col-sm-2 col-form-label"><r>Verifikasi & Kesesuaian</r></label>


    <div class="col-sm-10">


        <select name="sesuai" id="sesuai" class="form-control">


		<?php if ($data[0]->status == '1') {?>


            <option value="1">Belum Sesuai</option>


            <option value="2">Sudah Sesuai</option>


		<?php } else {?>


			<option value="2">Sudah Sesuai</option>


			<option value="1">Belum Sesuai</option>


           


			<?php } ?>


		</select>


    </div>


</div>


<div class="form-group row">


	<label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>


	<div class="col-sm-10">


		<textarea required class="form-control" name="keterangan_ver" id="keterangan_ver"><?=$data[0]->ket_ver?></textarea>


	</div>


</div>


<button type="submit" onclick="ver(<?=$data[0]->id?>)"  class="btn btn-primary" name="uploadImage">Simpan</button>


<hr>


<br>


<h5>Proses Pengukuran Lapangan</h5>


<hr>


<form  action="" method="post" enctype="multipart/form-data" id="imageInputForm">


<div class="form-group row">


	<label for="inputEmail3" class="col-sm-2 col-form-label">Nomor Survey</label>


	<div class="col-sm-3">


		<input type="text" class="form-control" id="nomor" name="nomor" value="<?=$data[0]->no_survey?>" placeholder="Nomor" autocomplete="off">


	</div>


</div>


<div class="form-group row">


	<label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Survey</label>


	<div class="col-sm-3">
	<?php 

	if ($data[0]->tgl_survey !=null) {
		$tgl_survey = date('m/d/Y',strtotime($data[0]->tgl_survey));
	}else {
		$tgl_survey = date('m/d/Y');
	}
	?>

    <input type="text" class="form-control" name="singledatepicker" id="singledatepicker" value="<?=$tgl_survey?>"/>


 


 <script>


 $(function() {


     $('input[name="singledatepicker"]').daterangepicker({


         singleDatePicker: true,


         showDropdowns: true


     });


 });


 </script>


	</div>


</div>


<div class="form-group row">


	<label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>


	<div class="col-sm-10">


		<textarea required class="form-control" name="keterangan" id="keterangan"><?=$data[0]->ket_survey?></textarea>


	</div>


</div>

<div class="form-group row">
<div class="col-sm-5">
<div id="foto1">
	<div style='width:110px;border: 2px solid black;border-radius: 10px;padding-top:3px;padding-left:3px;padding-right:3px;padding-bottom:3px'><a href="<?=base_url("assets/syarat/".$data[0]->syarat5)?>" target="_blank"><img  style='border-radius: 10px;' src='<?=base_url("assets/syarat/".$data[0]->syarat5)?>' width='100px' ></a></div>
	</div>
</div>
</div>
<div class="form-group row">


	<label for="inputEmail3" class="col-sm-2 col-form-label">Upload Foto Pengukuran</label>


	<div class="col-sm-5">


	<input type="file"  onchange="showImageHereFunc1(1)" class="form-control" id="foto11" name="foto11" placeholder="" autocomplete="off">

	<input type="hidden" name="id" id="id" value="<?=$data[0]->id?>" />


	</div>


</div>
<div class="form-group row">
<div class="col-sm-5">
<div id="foto2">
	<div style='width:110px;border: 2px solid black;border-radius: 10px;padding-top:3px;padding-left:3px;padding-right:3px;padding-bottom:3px'><a href="<?=base_url("assets/syarat/".$data[0]->syarat6)?>" target="_blank"><img  style='border-radius: 10px;' src='<?=base_url("assets/syarat/".$data[0]->syarat6)?>' width='100px' ></a></div>
	</div>
</div>
</div>

<div class="form-group row">


	<label for="inputEmail3" class="col-sm-2 col-form-label">Upload Hasil Pengukuran</label>


	<div class="col-sm-5">


	<input type="file"  onchange="showImageHereFunc1(2)" class="form-control" id="foto12" name="foto12" placeholder="" autocomplete="off">



	</div>


</div>


<button type="button" onclick="simpan()"  class="btn btn-primary" name="uploadImage1">Simpan</button>


</form>


<hr>


<br>


<h5>Permohonan Siap</h5>


<hr>


<form  action="<?=base_url('PermohonanKRK/proses_siap/'.$data[0]->id)?>" method="post" enctype="multipart/form-data" id="imageInputForm">


<div class="form-group row">


	<label for="inputEmail3" class="col-sm-2 col-form-label">Nomor </label>


	<div class="col-sm-3">


		<input type="text" class="form-control" id="nomor1" name="nomor1" value="<?=$data[0]->no_siap?>" placeholder="Nomor" autocomplete="off">


		<input type="hidden" name="id" id="id1" value="<?=$data[0]->id?>" />


	</div>


</div>


<div class="form-group row">


	<label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal</label>


	<div class="col-sm-3">
			<?php 		
	if ($data[0]->tgl_siap !=null) {
		$tgl_siap = date('m/d/Y',strtotime($data[0]->tgl_siap));
	}else {
		$tgl_siap = date('m/d/Y');
	}
	?>
    <input type="text" class="form-control" name="singledatepicker" id="singledatepicker1" value="<?=$tgl_siap?>"/>


 


 <script>


 $(function() {


     $('input[name="singledatepicker"]').daterangepicker({


         singleDatePicker: true,


         showDropdowns: true


     });


 });








 </script>


	</div>


</div>


<div class="form-group row">


	<label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>


	<div class="col-sm-10">


		<textarea required class="form-control" name="keterangan" id="keterangan1"><?=$data[0]->ket_siap?></textarea>


	</div>


</div>


<button type="button" onclick="simpan1()"  class="btn btn-primary" name="uploadImage2">Simpan</button>


</form>
<script>
function showImageHereFunc1(e) {
  
  var total_file=document.getElementById("foto1"+e).files.length;
  for(var i=0;i<total_file;i++) {
	  
	  $('#foto'+e).html("<div style='width:155px;border: 2px solid black;border-radius: 10px;padding-top:3px;padding-left:3px;padding-right:3px;padding-bottom:3px'><img  style='border-radius: 10px;' src='"+URL.createObjectURL(event.target.files[i])+"' width='145px' ></div>");
  }
};

function simpan() {
	const foto1 = $('#foto11').prop('files')[0];
	const foto2 = $('#foto12').prop('files')[0];
	var nomor = $('#nomor').val();
    var tanggal = $('#singledatepicker').val();
	var keterangan = $('#keterangan').val();
	var id = $('#id').val();
	if (nomor !=""  && foto1!="") {
		let formData = new FormData();
        formData.append('foto1', foto1);
		formData.append('foto2', foto2);
        formData.append('nomor', nomor);
        formData.append('tanggal', tanggal); 
		formData.append('keterangan', keterangan); 
		formData.append('id', id); 
		$.ajax({
			type: 'POST',
            url: '<?=base_url('PermohonanKRK/proses_survey1/')?>',
		    data: formData,
		    cache: false,
		    processData: false,
		    contentType: false,
			success: function (msg) {
               alert(msg);
		               
		    },
		    error: function () {
		        alert("Data Gagal Diupload");
		    }
		});
	}else{
		alert('Lengkapi Semua Data');
	}
	
}

function simpan1 () {
	var nomor = $('#nomor1').val();
    var tanggal = $('#singledatepicker1').val();
	var keterangan = $('#keterangan1').val();
	var id = $('#id1').val();
	if (nomor !=""  && keterangan!="") {
		let formData = new FormData();
        formData.append('nomor', nomor);
        formData.append('tanggal', tanggal); 
		formData.append('keterangan', keterangan); 
		formData.append('id', id);
		$.ajax({
			type: 'POST',
            url: '<?=base_url('PermohonanKRK/proses_siap1/')?>',
		    data: formData,
		    cache: false,
		    processData: false,
		    contentType: false,
			success: function (msg) {
               alert(msg);
		               
		    },
		    error: function () {
		        alert("Data Gagal Diupload");
		    }
		});
	}else{
		alert('Lengkapi Semua Data');
	}
}
</script>