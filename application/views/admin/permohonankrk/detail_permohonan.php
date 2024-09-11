

<style>

    .tab {

  overflow: hidden;

  border: 1px solid #ccc;

  background-color: #f1f1f1;

}



/* Style tombol didalam tab */

.tab button {

  background-color: inherit;

  float: left;

  border: none;

  outline: none;

  cursor: pointer;

  padding: 14px 16px;

  transition: 0.3s;

  font-size: 17px;

}



/* Ubah warna background dari buttons on hover */

.tab button:hover {

  background-color: #ddd;

}



/* Buat sebuah kelas tablink active/current */

.tab button.active {

  background-color: #ccc;

}



/* Style tab content */

.tabcontent {

  display: block;

  padding: 6px 12px;

  border: 1px solid #ccc;

  border-top: none;

}

  

/* Fade in tab */

@-webkit-keyframes fadeEffect {

  from {opacity: 0;}

  to {opacity: 1;}

}



@keyframes fadeEffect {

  from {opacity: 0;}

  to {opacity: 1;}

}



.box_basemap {

           

           margin: 10px 5px 5px 10px;

           border-radius: 5px;

       }



.info { 

            width:110px;

            height: auto;

            

          

            font-family: 'Poppins', sans-serif;

            background: white; background: rgba(255,255,255,1); 

            box-shadow: 0 0 15px rgba(0,0,0,0.2); 

            border-radius: 5px;

            display: block;

            position: relative;

            z-index: 2; }  

</style>





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

											    

                <div class="tab">

                  <button class="tablinks" onclick="openCity(event, 'London')">Informasi Pemohon</button>

                  <button class="tablinks" onclick="openCity(event, 'Paris')">Data Spasial</button>

                  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Progres Survey</button>

                  <button class="tablinks" onclick="openCity(event, 'Jakarta')">Upload Dokumen</button>

                  </div>

                  <div id="London" class="tabcontent">

                    <?php include "info_pemohon.php"?>

                  </div>



                  <div id="Paris" class="tabcontent">

                    <?php include "spasial.php"?>

                  </div>



                  <div id="Tokyo" class="tabcontent">

                  <?php include "verifikasi.php"?>

                  </div>

                  <div id="Jakarta" class="tabcontent">

                 

                  <?php include "upload_berkas.php"?>

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

   window.onload = function() {

    

    document.getElementById('London').style.display = "block";

    

    tablinks = document.getElementsByClassName("tablinks");

    tablinks[0].style.backgroundColor = "#ccc";

    document.getElementById('Paris').style.display = "none";

    document.getElementById('Tokyo').style.display = "none";

    document.getElementById('Jakarta').style.display = "none";



    $('#showImageHere1').append("<div id='im1' class='card col-md-4'><img class='card-img-top' src='<?=base_url("assets/images/pdf.png")?>'></div>");

    $('#showImageHere2').append("<div id='im2' class='card col-md-4'><img class='card-img-top' src='<?=base_url("assets/images/pdf.png")?>'></div>");

    $('#showImageHere3').append("<div id='im3' class='card col-md-4'><img class='card-img-top' src='<?=base_url("assets/images/pdf.png")?>'></div>");

    $('#showImageHere4').append("<div id='im4' class='card col-md-4'><img class='card-img-top' src='<?=base_url("assets/images/pdf.png")?>'></div>");

   

                

   }



   function ubah(id){

    var peta = document.getElementById('geo').value;

    if (peta != '') {

        $.ajax({

            type: 'POST',

                url: "<?=base_url('PermohonanKRK/ubah_peta/')?>"+id+"?peta="+peta,

                cache:false,

                success: function(data){

                    alertFunc('info', 'Data Berhasil dirubah');



                }

        });

    }else{

        alertFunc('danger', 'Tidak Ada Data Yang dirubah');  

        return;

    }

   }

function ver(id){

  

  var peta = document.getElementById('sesuai').value;

  var ket = document.getElementById('keterangan_ver').value;

 

  $.ajax({

            type: 'POST',

                url: "<?=base_url('PermohonanKRK/verifikasi/')?>"+id+"?sesuai="+peta+"&ket="+ket,

                cache:false,

                success: function(data){

                    alert(data);

                    alertFunc('info', 'Data Berhasil dirubah');



                }

        });

}

function openCity(evt, cityName) {

  

  var i, tabcontent, tablinks;

  tabcontent = document.getElementsByClassName("tabcontent");

  for (i = 0; i < tabcontent.length; i++) {

    tabcontent[i].style.display = "none";

  }

  tablinks = document.getElementsByClassName("tablinks");

  if (cityName == 'Paris' || cityName == 'Tokyo') {

    tablinks[0].style.backgroundColor="inherit";

  }else if(cityName == 'London') {

    tablinks[0].style.backgroundColor="#ccc";

  }

  for (i = 0; i < tablinks.length; i++) {

    tablinks[i].className = tablinks[i].className.replace(" active", "");

  }

  document.getElementById(cityName).style.display = "block";

  evt.currentTarget.className += " active";

}



</script>