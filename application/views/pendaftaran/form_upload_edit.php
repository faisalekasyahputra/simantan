                
                
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex justify-content-center">
                                    <h4 class="card-title col-md-10 mb-md-0 mb-3 align-self-center">Formulir Upload Persyaratan </h4>
                                    
                                </div>
                                <div class="table-responsive mt-5">
                                <form action="<?=base_url('Draf_krk/upload_edit/'.$id)?>" method="POST" enctype="multipart/form-data" id="imageInputForm">
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0"><b>Scan Fotokopi KTP Asli</b></label>
                                        <div class="col-md-12">
                                            <input type="file" id="uploadImageFile1" onchange="showImageHereFunc1()" name="uploadImageFile1"
                                                class="form-control ps-0 form-control-line" value="asda">
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
                                        <label class="col-md-12 mb-0"><b>Scan Dokumen Pendukung Lainnya</b></label>
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
           document.getElementById('im1').innerHTML = "<img class='card-img-top' src='"+URL.createObjectURL(event.target.files[i])+"'>";
        
  }
};
function showImageHereFunc2() {
        var total_file=document.getElementById("uploadImageFile2").files.length;
        for(var i=0;i<total_file;i++) {
            document.getElementById('im2').innerHTML = "<img class='card-img-top' src='"+URL.createObjectURL(event.target.files[i])+"'>";
  }
};
function showImageHereFunc3() {
        var total_file=document.getElementById("uploadImageFile3").files.length;
        for(var i=0;i<total_file;i++) {
            document.getElementById('im3').innerHTML = "<img class='card-img-top' src='"+URL.createObjectURL(event.target.files[i])+"'>";
  }
};
function showImageHereFunc4() {
        var total_file=document.getElementById("uploadImageFile4").files.length;
        for(var i=0;i<total_file;i++) {
            document.getElementById('im4').innerHTML = "<img class='card-img-top' src='"+URL.createObjectURL(event.target.files[i])+"'>";
  }
};
function showImageHereFunc5() {
        var total_file=document.getElementById("uploadImageFile5").files.length;
        for(var i=0;i<total_file;i++) {
            document.getElementById('im5').innerHTML = "<img class='card-img-top' src='"+URL.createObjectURL(event.target.files[i])+"'>";
  }
};
function showImageHereFunc6() {
        var total_file=document.getElementById("uploadImageFile6").files.length;
        for(var i=0;i<total_file;i++) {
            document.getElementById('im6').innerHTML = "<img class='card-img-top' src='"+URL.createObjectURL(event.target.files[i])+"'>";
  }
}

window.onload = function() {
    $('#showImageHere1').append("<div id='im1' class='card col-md-4'><img class='card-img-top' src='<?=base_url("assets/syarat/".$data[0]->syarat1)?>'></div>");
    $('#showImageHere2').append("<div id='im2' class='card col-md-4'><img class='card-img-top' src='<?=base_url("assets/syarat/".$data[0]->syarat2)?>'></div>");
    $('#showImageHere3').append("<div id='im3' class='card col-md-4'><img class='card-img-top' src='<?=base_url("assets/syarat/".$data[0]->syarat3)?>'></div>");
    $('#showImageHere4').append("<div id='im4' class='card col-md-4'><img class='card-img-top' src='<?=base_url("assets/syarat/".$data[0]->syarat4)?>'></div>");
    $('#showImageHere5').append("<div id='im5' class='card col-md-4'><img class='card-img-top' src='<?=base_url("assets/syarat/".$data[0]->syarat5)?>'></div>");
    $('#showImageHere6').append("<div id='im6' class='card col-md-4'><img class='card-img-top' src='<?=base_url("assets/syarat/".$data[0]->syarat6)?>'></div>");
  }


</script>
