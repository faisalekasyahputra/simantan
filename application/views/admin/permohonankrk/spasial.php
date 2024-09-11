<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin=""/>

<script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>

<script  src="<?=base_url('assets/js/leaflet.ajax.js')?>"></script>

<script src="https://cdn.jsdelivr.net/npm/@turf/turf@6.3.0/turf.min.js"></script>

        <script src="<?=base_url('assets/draw_pr/Leaflet.draw.js')?>"></script>

        <script src="<?=base_url('assets/draw_pr/Leaflet.Draw.Event.js')?>"></script>

        <link rel="stylesheet" href="<?=base_url('assets/draw_pr/leaflet.draw1.css')?>" media="screen">

        <script src="<?=base_url('assets/draw_pr/Toolbar.js')?>"></script>

        <script src="<?=base_url('assets/draw_pr/Tooltip.js')?>"></script>



        <script src="<?=base_url('assets/draw_pr/GeometryUtil.js')?>"></script>

        <script src="<?=base_url('assets/draw_pr/LatLngUtil.js')?>"></script>

        <script src="<?=base_url('assets/draw_pr/LineUtil.Intersect.js')?>"></script>

        <script src="<?=base_url('assets/draw_pr/Polygon.Intersect.js')?>"></script>

        <script src="<?=base_url('assets/draw_pr/Polyline.Intersect.js')?>"></script>

        <script src="<?=base_url('assets/draw_pr/TouchEvents.js')?>"></script>



        <script src="<?=base_url('assets/draw_pr/DrawToolbar.js')?>"></script>

        <script src="<?=base_url('assets/draw_pr/Draw.Feature.js')?>"></script>

        <script src="<?=base_url('assets/draw_pr/Draw.SimpleShape.js')?>"></script>

        <script src="<?=base_url('assets/draw_pr/Draw.Polyline.js')?>"></script>

        <script src="<?=base_url('assets/draw_pr/Draw.Marker.js')?>"></script>

        <script src="<?=base_url('assets/draw_pr/Draw.Circle.js')?>"></script>

        <script src="<?=base_url('assets/draw_pr/Draw.CircleMarker.js')?>"></script>

        <script src="<?=base_url('assets/draw_pr/Draw.Polygon.js')?>"></script>

        <script src="<?=base_url('assets/draw_pr/Draw.Rectangle.js')?>"></script>



        <script src="<?=base_url('assets/draw_pr/EditToolbar.js')?>"></script>

        <script src="<?=base_url('assets/draw_pr/EditToolbar.Edit.js')?>"></script>

        <script src="<?=base_url('assets/draw_pr/EditToolbar.Delete.js')?>"></script>

        <script src="<?=base_url('assets/draw_pr/Control.Draw.js')?>"></script>

    

       

        <script src="<?=base_url('assets/draw_pr/Edit.Poly.js')?>"></script>

        <script src="<?=base_url('assets/draw_pr/Edit.SimpleShape.js')?>"></script>

        <script src="<?=base_url('assets/draw_pr/Edit.Rectangle.js')?>"></script>

        <script src="<?=base_url('assets/draw_pr/Edit.Marker.js')?>"></script>

        <script src="<?=base_url('assets/draw_pr/Edit.CircleMarker.js')?>"></script>

        <script src="<?=base_url('assets/draw_pr/Edit.Circle.js')?>"></script>





<div class="row">

    <div class="col-md-8">

        <div id="map" class="card form-pendaftaran" style="width: 100%; height: 400px;"></div>

        

    </div>

    <div class="col-md-4">

        <div class="card mb-3">

            <div class="card-header">

			    <h3><i class="fa fa-table"></i> Ringkasan Pola Ruang</h3>

			</div>

           	<div id="ringkasan">

                

            </div>						

        </div>

    </div>

</div>

<div id='result' value='' style="display:none;"></div>

<input type="hidden" placeholder="" name="geo" id="geo">

<button type="submit" onclick="ubah(<?=$data[0]->id?>)" class="btn btn-primary" name="uploadImage">Ubah</button>

<script>

var osmUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',

            osmAttrib = '&copy; <a href="http://openstreetmap.org/copyright">OpenStreetMap</a> contributors',

            osm = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{

            maxZoom: 20,subdomains:['mt0','mt1','mt2','mt3']}),

            map = new L.map('map',{

                    center: L.latLng([-6.8904456,109.6849576]),

                    zoom: 12.5,

                    maxBounds: [[-7.09, 109.4071054],[-6.6,109.9205119]],

                   

                    

                    

                });



                var drawnItems = new L.FeatureGroup();

     map.addLayer(drawnItems);

     <?php if ($data[0]->geojson != null || ($data[0]->geojson !='')) { ?>

    var dibuat = L.geoJson(<?php echo $data[0]->geojson; ?>,{style:{fillopacity:0.7,color:'red',weight:6,lineJoin: "miter",	fillColor: "none",}}).addTo(map);   

    <?php } ?>  

    map.fitBounds(dibuat.getBounds())

    polys2 =<?php echo $data[0]->geojson; ?>;

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

             

         }

     });



map.addControl(drawControl);

    L.control.layers({

        'google hybrid': osm.addTo(map),

        "osm": L.tileLayer(osmUrl, { maxZoom: 18, attribution: osmAttrib })},

         { '': drawnItems }, 

         { position: 'topright', collapsed: false }).addTo(map);

   var pola_ruang = new L.GeoJSON.AJAX(["<?=base_url('assets/geojson/pola_ruang2.geojson')?>"],{style:gaya,onEachFeature:luas}).addTo(map); 

   var sawah = new L.GeoJSON.AJAX(["<?=base_url('assets/geojson/lsd.geojson')?>"],{style:sawah}).addTo(map); 

   

    var d1_awal= 0.2;

function gaya(feature) {

    var warna = feature.properties['NAMOBJ'];    

    return {

            weight: '1',

            color: 'warna1(warna)',

            dashArray: '4,2,1,2,1,2,1,2,1,2',

            fillOpacity:d1_awal,

    };

}

function sawah(feature) {

    return {

            weight: '1',

            color: 'green',

            dashArray: '4,2,1,2,1,2,1,2,1,2',

            fillOpacity:0.8,

    };

}

<?php

$w_legenda = $this->Buka_peta->fetch_record('tb_legenda',14,'id_map');

$kembali_warna="";

$kembali_titik = "";

foreach ($w_legenda as $w) {



    $kembali_warna = $kembali_warna."d == '".$w->isi."' ? '".$w->warna."':";

    $kembali_titik = $kembali_titik."d == '".$w->isi."' ? '".$w->warna."':";

}

$kembali_warna = $kembali_warna."'#9e5870'";

$kembali_titik = $kembali_titik."cctv1.png";

?>





function warna1(d) {

    return <?=$kembali_warna?>;

}    



         





var head = '<table class="table table-responsive-xl table-bordered"><thead><tr> <th scope="col">#</th><th scope="col">Peruntukkan</th><th scope="col">Luas</th>';

var isi ='';

var bot ='</tbody></table>';

var tab = document.getElementById('ringkasan');

var c = 0;

var jum = 0;

function luas(f,layer1) {

    

    polys2.features.forEach(function(layer2){

       

        var intersection = turf.intersect(f, layer2);

        if(intersection!=undefined){

            c +=1;

             var interLayer=L.geoJson(intersection, {color: 'white',}).addTo(map);

             interLayer.eachLayer(function (l1) {

                var latlngss = l1.getLatLngs();

                var seeArea = L.GeometryUtil.geodesicArea(latlngss[0]);

                var kode = layer1.feature.properties['NAMOBJ'];

                if (jum <=5) {

                    if (seeArea > 0){

                        jum +=1;

                        isi = isi + '</tr></thead><tbody><tr><th scope="row">'+c+'</th><td>'+kode+'</td><td>'+seeArea.toFixed(2)+' m<sup>2</sup></td></tr>';

                    }

                }

            }); 

         }

    });

    var tabel = head+isi+bot;

    tab.innerHTML = tabel;

};

map.on('draw:created', function (event) {

    var layer = event.layer,

        feature = layer.feature = layer.feature || {};

    feature.type = feature.type || "Feature";

    var props = feature.properties = feature.properties || {};

    drawnItems.addLayer(layer);

    var hasil = $('#result').html(JSON.stringify(drawnItems.toGeoJSON()));

       

       var cookieValue = document.getElementById('result').innerHTML;

       document.getElementById('geo').value = cookieValue;

    poly2 = drawnItems.toGeoJSON();

    var head = '<table class="table table-responsive-xl table-bordered"><thead><tr> <th scope="col">#</th><th scope="col">Peruntukkan</th><th scope="col">Luas</th>';

    var isi ='';

    var bot ='</tbody></table>';

    var tab = document.getElementById('ringkasan');

    var c = 0;

    var jum = 0;

    pola_ruang.eachLayer(function (layer1) {

        poly2.features.forEach(function(layer2){

            poly1 = layer1.toGeoJSON();

            var intersection = turf.intersect(poly1, layer2);

            if(intersection!=undefined){

                c +=1;

                var interLayer=L.geoJson(intersection, {color: 'red',});

                interLayer.eachLayer(function (l1) {

                    var latlngss = l1.getLatLngs();

                    var seeArea = L.GeometryUtil.geodesicArea(latlngss[0]);

                    var kode = layer1.feature.properties['NAMOBJ'];

                    if (jum <=5) {

                        if (seeArea > 0){

                            jum +=1; 

                            isi = isi + '</tr></thead><tbody><tr><th scope="row">'+c+'</th><td>'+kode+'</td><td>'+seeArea.toFixed(2)+' m<sup>2</sup></td></tr>';

                        }

                    }

                });

            }

        });

    });

    var tabel = head+isi+bot;

    tab.innerHTML = tabel;

});



var base = '<input type="checkbox"  name="cek" checked="true" onClick="find(0)" id="s0" value="Pola Ruang">'+

            '<label for="html">Pola Ruang</label>'+

            '<br><input type="range" id="r0" style="display:inline-block;width:90px" oninput="trans(this.value,1)" min="0" max="10" value = "2"  name="fav_language" >'+

            '<br><input type="checkbox"  name="cek" checked="true" onClick="find(1)" id="s1" value="LSD">'+

            '<label for="html">LSD</label>'+

            '<br><input type="range" id="r1" style="display:inline-block;width:90px" oninput="trans(this.value,2)" min="0" max="10" value = "8"  name="fav_language" >';

var info = L.control({position: 'topright'});

var ren1 = [

  

  {"id":'admin14',

          "nama_peta" : "Pola Ruang",

          "tid" : 14,

          "layer" : pola_ruang,

  }, 

  {"id":'admin15',

          "nama_peta" : "LSD",

          "tid" : 15,

          "layer" : sawah,

  },

  ];

function trans(s,id_map){

    

    var opacity = s/10;

    d1_awal = opacity;

  

    if (id_map==1) {

        

       ren1[0].layer.setStyle({fillOpacity:opacity,opacity :d1_awal }) 

    }else{

        ren1[1].layer.setStyle({fillOpacity:opacity,opacity :d1_awal }) 

    }

   

    

}

function find(e){

 

    var checkBox = document.getElementById("s"+e);

    var Range = document.getElementById("r"+e);

   

    if (checkBox.checked == true){  

       

        if (e==0){

         pola_ruang.addTo(map)

         

        }else{

            sawah.addTo(map)

        }

        Range.style.display ="inline-block";

    }else{

       

        if (e==0){

            pola_ruang.remove(map)

        }else{

            sawah.remove(map)

        }

        Range.style.display ="none";

    }

}

info.onAdd = function (map) {

    this._div = L.DomUtil.create('div', 'info');

    this._div.id = "tubuh";

   

    frame_base_map = L.DomUtil.create('div', 'box_basemap');

    frame_base_map.id ="from_base";

    frame_base_map.innerHTML= base;

    this._div.append(frame_base_map);

    this._div.setAttribute("onmouseleave", "enab()");

    this._div.setAttribute("onmouseover", "temporary_disabled()");

    return this._div;

}

info.addTo(map);



function enab(){

   

   map._handlers.forEach(function(handler) {

       handler.enable();

       });

}

function temporary_disabled(){

   

   map._handlers.forEach(function(handler) {

           handler.disable();

       });

}

</script>



