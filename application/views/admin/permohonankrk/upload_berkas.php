<br>



<h5>Upload Berkas Hasil Permohonan</h5>

<hr>

<form  action="<?=base_url('PermohonanKRK/upload_berkas/'.$data[0]->id)?>" method="post" enctype="multipart/form-data" id="imageInputForm">

<input type="hidden" name="id" value="<?=$data[0]->id?>" />

<div class="form-group row">

	<label for="inputEmail3" class="col-sm-2 col-form-label">Upload Berkas </label>

	<div class="col-sm-5">

	<input type="file" name="uploadImageFile1" id="filer_example2" multiple="multiple">

	<input type="hidden" name="id" value="<?=$data[0]->id?>" />

	</div>

</div>

<div class="form-group row" >

	<label for="inputEmail3" class="col-sm-2 col-form-label">Hasil Upload</label>

	<div class="col-sm-5">

<?php if ($data[0]->berkas1 != null) {?>	
<a href="<?=base_url('assets/berkas/'.$data[0]->berkas1)?>" target="_blank"><img  style='border-radius: 10px;' src='<?=base_url("assets/images/pdf.png")?>' width='100px' ></a>
<?php } ?>	
</div>

</div>

<div class="form-group row" style="display: none;">

	<label for="inputEmail3" class="col-sm-2 col-form-label">Upload Berkas 3</label>

	<div class="col-sm-5">

	<input type="file" name="uploadImageFile3" id="filer_example2" multiple="multiple">

	</div>

</div>

<div class="form-group row" style="display: none;">

	<label for="inputEmail3" class="col-sm-2 col-form-label">Upload Berkas 4</label>

	<div class="col-sm-5">

	<input type="file" name="uploadImageFile4" id="filer_example2" multiple="multiple">

	</div>

</div>

<button type="submit"  class="btn btn-primary" name="uploadImage1">Simpan</button>

</form>



</form>