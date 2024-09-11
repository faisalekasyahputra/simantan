                
                
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex justify-content-center">
                                    <h4 class="card-title col-md-10 mb-md-0 mb-3 align-self-center">Formulir Upload Persyaratan </h4>
                                    
                                </div>
                                <div class="table-responsive mt-5">
                                <form action="<?=base_url('Pendaftaran/upload/'.$jenis)?>" method="POST" enctype="multipart/form-data" id="imageInputForm">
                                    <input type="text" id="nama" name="nama" value="<?=$nama?>">
                                    <input type="text" id="alamat" name="alamat" value="<?=$alamat?>">
                                    <input type="text" id="rt" name="rt" value="<?=$rt?>">
                                <div class="form-group">
                                        <label class="col-md-12 mb-0"><b>Scan Fotokopi KTP Asli</b></label>
                                        <div class="col-md-12">
                                            <input type="file" id="uploadImageFile1" onchange="showImageHereFunc1()" name="uploadImageFile1"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                        <div id="showImageHere1">
                                            
                                               
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12"><b>Scan Sertifikat</b></label>
                                        <div class="col-md-12">
                                            <input type="file" name="uploadImageFile2" id="uploadImageFile2" onchange="showImageHereFunc2()"
                                            class="form-control ps-0 form-control-line">
                                        </div>
                                        <div id="showImageHere2">
                                            
                                               
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0"><b> Scan Surat Kuasa (Apabila Ada)</b></label>
                                        <div class="col-md-12">
                                        <input type="file" name="uploadImageFile3" id="uploadImageFile3" onchange="showImageHereFunc3()"
                                            class="form-control ps-0 form-control-line">
                                        </div>
                                        <div id="showImageHere3">
                                            
                                               
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0"><b>Scan Surat Pendukung Lainnya</b></label>
                                        <div class="col-md-12">
                                        <input type="file" name="uploadImageFile4" id="uploadImageFile4" onchange="showImageHereFunc4()"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                        <div id="showImageHere4">
                                            
                                               
                                        </div>
                                    </div>
                                    <br>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-12 d-flex">
                                            <button onclick="validasi()" name="uploadImage" class="btn btn-primary mx-auto mx-md-0 text-white">Simpan</button>
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<script>
    function showImageHereFunc1() {
        var total_file=document.getElementById("uploadImageFile1").files.length;
        for(var i=0;i<total_file;i++) {
        $('#showImageHere1').append("<div class='card col-md-4'><img class='card-img-top' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
  }
};
function showImageHereFunc2() {
        var total_file=document.getElementById("uploadImageFile2").files.length;
        for(var i=0;i<total_file;i++) {
        $('#showImageHere2').append("<div class='card col-md-4'><img class='card-img-top' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
  }
};
function showImageHereFunc3() {
        var total_file=document.getElementById("uploadImageFile3").files.length;
        for(var i=0;i<total_file;i++) {
        $('#showImageHere3').append("<div class='card col-md-4'><img class='card-img-top' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
  }
};
function showImageHereFunc4() {
        var total_file=document.getElementById("uploadImageFile4").files.length;
        for(var i=0;i<total_file;i++) {
        $('#showImageHere4').append("<div class='card col-md-4'><img class='card-img-top' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
  }
};
function showImageHereFunc5() {
        var total_file=document.getElementById("uploadImageFile5").files.length;
        for(var i=0;i<total_file;i++) {
        $('#showImageHere5').append("<div class='card col-md-4'><img class='card-img-top' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
  }
};
function showImageHereFunc6() {
        var total_file=document.getElementById("uploadImageFile6").files.length;
        for(var i=0;i<total_file;i++) {
        $('#showImageHere6').append("<div class='card col-md-4'><img class='card-img-top' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
  }
}
</script>
