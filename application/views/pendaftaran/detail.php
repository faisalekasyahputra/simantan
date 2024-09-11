                
                
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card form-pendaftaran">
                            <div class="card-body">
                                <div class="d-md-flex justify-content-center">
                                    <h2 class="card-title col-md-10 mb-md-0 mb-3 align-self-center text-center">Detail Pendaftaran KRK </h2>
                                    
                                </div>
                                <div class="table-responsive mt-5">
                                
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Nama Lengkap</label>
                                        <div class="col-md-12">
                                            <input type="text" id="nama" name="nama" placeholder="Isi Nama Lengkap"
                                                class="form-control ps-0 form-control-line" value="<?=$data[0]->nama?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label for="example-email" class="col-md-12">Alamat Lengkap</label>
                                                <input type="text" name="alamat" id="alamat" placeholder="Isi Alamat Lengkap"
                                                class="form-control ps-0 form-control-line" value="<?=$data[0]->alamat?>">
                                            </div>
                                            <div class="col-md-2">
                                            <label for="example-email" class="col-md-12">RT</label>
                                                <input type="text" name="rt" id="rt" 
                                                class="form-control ps-0 form-control-line" value="<?=$data[0]->RT?>">
                                            </div>
                                            <div class="col-md-2">
                                            <label for="example-email" class="col-md-12">RW</label>
                                                <input type="text" name="rw" id="rw" 
                                                class="form-control ps-0 form-control-line" value="<?=$data[0]->RW?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-wrapper">
                                        <div class="form-group">
                                        <label class="col-sm-12">Kecamatan</label>
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
                                        <label class="col-sm-12">Kelurahan</label>
                                        <div class="col-sm-12 border-bottom">
                                            <select name="kelurahan" id="kelurahan" class="form-select">
                                                <option value="<?=$kel?>"><?=$kelurahan?></option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Pekerjaan</label>
                                        <div class="col-md-12">
                                        <input type="text" name="pekerjaan" id="pekerjaan" placeholder="Isi Pekerjaan"
                                            class="form-control ps-0 form-control-line" value="<?=$data[0]->pekerjaan?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">No HP/WA</label>
                                        <div class="col-md-12">
                                            <input type="number"  name="no_hp"  id="no_hp" placeholder="123 456 7890"
                                                class="form-control ps-0 form-control-line" value="<?=$data[0]->no_hp?>">
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
                                                <div class="card-body">
                                                    <h4 class="card-title text-center">Gambar Lokasi Permohonan</h4>
                                                    <div id="map" class="card form-pendaftaran" style="width: 100%; height: 500px;"></div>
                                                    <div id='result' value='' style="display: none;"><?=$data[0]->geojson?></div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
               
                                    </div>
                                    <div class="form-group">
                                       
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label for="example-email" class="col-md-12">Alamat Lengkap</label>
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
                                    <div class="form-wrapper">
                                        <div class="form-group">
                                        <label class="col-sm-12">Kecamatan</label>
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
                                        <label class="col-sm-12">Kelurahan</label>
                                        <div class="col-sm-12 border-bottom">
                                            <select name="kelurahan_lokasi" id="kelurahan_lokasi" class="form-select">
                                                <option value="<?=$kel?>"><?=$kelurahan?></option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Status Tanah</label>
                                        <div class="col-md-12">
                                        <input type="text" id="status" name="status" placeholder="Isi Status Tanah"
                                            class="form-control ps-0 form-control-line" value="<?=$data[0]->status_tanah?>">
                                       <input type="hidden" name="jenis" id="jenis" value="<?=$data[0]->jenis?>>"
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">No. Sertifikat</label>
                                        <div class="col-md-12">
                                        <input type="text"  name="no_sertifikat" id="no_sertifikat" placeholder="Isi No. Sertifikat"
                                            class="form-control ps-0 form-control-line" value="<?=$data[0]->no_sertifikat?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Luas Tanah</label>
                                        <div class="col-md-12">
                                        <input type="number" name="luas" id="luas" placeholder="Isi Luas Tanah"
                                            class="form-control ps-0 form-control-line" value="<?=$data[0]->luas_tanah?>">
                                        </div>
                                    </div>
                                   
                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<style>

</style>
<script>




window.onload = function() {
    
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
<?php if ($data[0]->geojson != null || ($data[0]->geojson !='')) { ?>
            var drawnItems = L.geoJson(<?php echo $data[0]->geojson; ?>).addTo(map);   
   <?php } ?>
map.addControl(new L.Control.Draw({
        edit: {
            featureGroup: drawnItems,
            poly: {
                allowIntersection: false
            }
        },
        draw: {
            polygon: {
                allowIntersection: false,
                showArea: true
            }
        }
    }));
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



function validasi() {
       var nama = document.getElementById('nama').value;
       var alamat = document.getElementById('alamat').value;
       var rt = document.getElementById('rt').value;
       var rw = document.getElementById('rw').value;
       var kelurahan = document.getElementById('kelurahan').value;
       var pekerjaan = document.getElementById('pekerjaan').value;
       var no_hp = document.getElementById('no_hp').value;
       var geo = document.getElementById('result').innerHTML;
       var alamat_lokasi = document.getElementById('alamat_lokasi').value;
       var rt_lokasi = document.getElementById('rt_lokasi').value;
       var rw_lokasi= document.getElementById('rw_lokasi').value;
       var kelurahan_lokasi = document.getElementById('kelurahan_lokasi').value;
       var status = document.getElementById('status').value;
       var no_sertifikat = document.getElementById('no_sertifikat').value;
       var luas = document.getElementById('luas').value;
       var jenis = document.getElementById('jenis').value;
       var id = '<?=$data[0]->id?>';
       if (nama == "") {
        alertFunc('danger', 'Anda Belum Mengisi Nama');
    }else if (alamat == ""){
        alertFunc('danger', 'Anda Belum Mengisi Alamat');
    }else if (pekerjaan == ""){
        alertFunc('danger', 'Anda Belum Mengisi Pekerjaan');
           
    }else if (no_hp == ""){
        alertFunc('danger', 'Anda Belum Mengisi Nomor HP');  
    }else if (kelurahan  == ""){
        alertFunc('danger', 'Anda Belum Mengisi Kelurahan');   
    }else if (status == ""){
        alertFunc('danger', 'Anda Belum Mengisi Status Tanah'); 
    }else if (no_sertifikat == ""){
        alertFunc('danger', 'Anda Belum Mengisi Nomor Sertifikat');
    }else if (luas == ""){
        alertFunc('danger', 'Anda Belum Mengisi Nomor Luas Tanah');
    }else {

        location.href = "<?=base_url('Draf_krk/proses_ubah/')?>"+nama+'?alamat='+alamat+'&rt='+rt+'&rw='+rw+'&pekerjaan='+pekerjaan+'&no_hp='+no_hp+'&geo='+geo+'&kelurahan='+kelurahan+'&kelurahan_lokasi='+kelurahan_lokasi+'&alamat_lokasi='+alamat_lokasi+'&rt_lokasi='+rt_lokasi+'&rw_lokasi='+rw_lokasi+'&jenis='+jenis+'&status='+status+'&no_sertifikat='+no_sertifikat+'&nama='+nama+'&luas='+luas+'&id='+id;

    }   
      
 
}
</script>