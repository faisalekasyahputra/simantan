<!DOCTYPE html>
<html lang="en">
<head>
<base target="_top">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Peta Pola Ruang Kota Pekalongan</title>
     <!-- Favicon -->
     <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?=base_url('assets/ico/apple-touch-icon-57x57.png')?>" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url('assets/ico/apple-touch-icon-114x114.png')?>" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url('assets/ico/apple-touch-icon-72x72.png')?>" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url('assets/ico/apple-touch-icon-144x144.png')?>" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?=base_url('assets/ico/apple-touch-icon-60x60.png')?>" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?=base_url('assets/ico/apple-touch-icon-120x120.png')?>" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?=base_url('assets/ico/apple-touch-icon-76x76.png')?>" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?=base_url('assets/ico/apple-touch-icon-152x152.png')?>" />
    <link rel="icon" type="image/png" href="<?=base_url('assets/ico/favicon-196x196.png')?>" sizes="196x196" />
    <link rel="icon" type="image/png" href="<?=base_url('assets/ico/favicon-96x96.png')?>" sizes="96x96" />
    <link rel="icon" type="image/png" href="<?=base_url('assets/ico/favicon-32x32.png')?>" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?=base_url('assets/ico/favicon-16x16.png')?>" sizes="16x16" />
    <link rel="icon" type="image/png" href="<?=base_url('assets/ico/favicon-128.png')?>" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="<?=base_url('assets/ico/mstile-144x144.png')?>" />
    <meta name="msapplication-square70x70logo" content="<?=base_url('assets/ico/mstile-70x70.png')?>" />
    <meta name="msapplication-square150x150logo" content="<?=base_url('assets/ico/mstile-150x150.png')?>" />
    <meta name="msapplication-wide310x150logo" content="<?=base_url('assets/ico/mstile-310x150.png')?>" />
    <meta name="msapplication-square310x310logo" content="<?=base_url('assets/ico/mstile-310x310.png')?>" />
    <!-- endFavicon -->
    <script src="<?=base_url('assets/js/jquery-2.2.3.min.js')?>"></script>
    <link rel="stylesheet" href="<?=base_url('assets/css/leaflet.legend.css')?>" media="screen">
    <link rel="stylesheet" href="<?=base_url('assets/css/easy-button.css')?>" media="screen">
    <link rel="stylesheet" href="<?=base_url('assets/css/Control.FullScreen1.css')?>" media="screen">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('assets/images/favicon1.png')?>">
    <script src="<?=base_url('assets/js/Control.FullScreen.js')?>"></script>
    <script src="<?=base_url('assets/js/Bing.js')?>"></script>
    <script src="<?=base_url('assets/js/leaflet.legend.js')?>"></script>
    <script  src="<?=base_url('assets/js/leaflet.ajax.js')?>"></script>

    <script src="<?=base_url('assets/js/Leaflet.Dialog_polaruang.js')?>" ></script>
    <script src="<?=base_url('assets/js/geolet.js')?>" ></script>
   
    <link rel="stylesheet" href="https://unpkg.com/@highlightjs/cdn-assets@11.3.1/styles/a11y-light.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/css/style-onemap.css')?>">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">
    <script src="https://cdn.jsdelivr.net/npm/@turf/turf@6.3.0/turf.min.js"></script>
    
    <script src="<?=base_url('assets/js/cari.js')?>" ></script>
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.3.1/highlight.min.js"></script>


    
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


    
    <style>
        html, body {height: 100%;margin: 0;overflow: hidden;}
        #map { width: auto; height: 92%; position: relative;z-index: 1; }
        
        h6 {
            color: #fff;
            padding: 0px;
        }
        .info { 
            width:250px;
            height: auto;
            
          
            font-family: 'Poppins', sans-serif;
            background: white; background: rgba(255,255,255,0.8); 
            box-shadow: 0 0 15px rgba(0,0,0,0.2); 
            border-radius: 5px;
            display: block;
            position: relative;
            z-index: 2; }  
        .attr { 
            width:250px;
            max-width: 450px;
            height: 450px;
            overflow-y: scroll;
            scrollbar-color: rebeccapurple green;
            z-index:100;
            font-family: 'Poppins', sans-serif;
            background: white; background: rgba(255,255,255,1); 
            box-shadow: 0 0 15px rgba(0,0,0,0.2); 
            border-radius: 5px;
            display: block;
            position: relative;
            z-index: 2; }  
            
        .atas {
            width:250px;
            height: 30px;
            padding: 6px 8px; 
            font-family: 'Poppins', sans-serif;
            background: rgba(0,145,168,0.8); 
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            vertical-align: text-top; 
            border-radius: 2px;}
        .ataspencarian {
    
    position: relative;
    display: flex;
    vertical-align: middle;
    text-align: center;
    background: rgba(0,145,168,0.8);
    /* width: 235px; */
    height: 30px;
    padding: 6px 8px;
    /* font-family: 'Poppins', sans-serif; */
    /* background: rgba(0,145,168,0.8); */
    /* box-shadow: 0 0 15px rgb(0 0 0 / 20%); */
    /* vertical-align: text-top; */
    /* border-radius: 2px; */
    align-items: baseline;
    justify-content: center;
        }
        .box_basemap {
           
            margin: 10px 5px 5px 10px;
            border-radius: 5px;
        }
        .center {
                margin: 0;
                position: absolute;
                justify-content: center;
                align-items: center;
            }
        .drop {padding-top: 10px;margin-left:250px}
 
        #from_rencana {display: block;}
      
      
        .attrhead { width:230px;
            
            position: relative;
            display: inline-block;
            vertical-align: middle;
            text-align: center;
            background: rgba(0,145,168,0.8); 
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            
           
            }
        .label_kec {width:auto;height:
             auto;font-size: 11px;
             border-color: white;
             background: rgba(255, 255, 255, 0.0);
             font-weight: bold;
             text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
             color: white;}

        .leaflet-control-dialog {
            height: auto;
            position: absolute;
            background: white; background: rgba(255,255,255,0.8); 
            padding: 0px;
            text-align: center;
            border-radius: 4px;
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.65);
        }
        .panelatas {
            /* width:384px; */
            /* height: 10px; */
            padding: 3px 0px;
    font-family: 'Poppins', sans-serif;
    background: rgba(0,145,168,0.8);
    box-shadow: 0 0 15px rgb(0 0 0 / 20%);
    vertical-align: text-top;
    border-radius: 2px;
}
        .panelcenter {
            
    padding: 7px;
    /* position: relative; */
    display: flex;
    vertical-align: middle;
    /* text-align: center; */
    /* font-size: 10px; */
    /* background: rgba(0,145,168,0.8); */
    /* box-shadow: 0 0 15px rgb(0 0 0 / 20%); */
    /* border-radius: 5px; */
    align-items: center;
    justify-content: center;
            }
        .leaflet-control-dialog-close {
            position: absolute;
            width: 20px;
            height: 20px;
            top: 0px;
            right: 0px;
            padding: 2px;
            font-size: 16px;
            line-height: 16px;}
        .isi {padding: 20px 15px;}
        .sticky-header1{
            background-color: #0091a8;
            color: #000000;
            display: flex;
            
 
  align-items: center;
            
        }
        .content-scroll1{
            margin-top: 0px;
            height:100%;
            
        }
        .banner {
           
            display: inline;
            margin-top: 10px;
            margin-left: 15px ;
            margin-bottom: 10px;
            
            
        }
        .banner1 {
            
            display: inline;
            margin-left: 10px ;
            font-weight: bold;
            
           

        }
        .banner2 {
            color : black;
            margin-top: 31px;
            display: inline;
            margin-left: 15px ;
            width: 1100px;
            position: relative;
            text-align: right;
        }
        .dinas1 {
            font-size: 28px;
            color: white;
            
        }
        .dinas2 {
            
            font-size: 22px;
            color: white;
        }
        .pencarian{
            width:250px;
            max-width: 250px;
            min-height: 90px;
            z-index:100;
            font-family: 'Poppins', sans-serif;
            background: white; background: rgba(255,255,255,1); 
            box-shadow: 0 0 15px rgba(0,0,0,0.2); 
           
            display: block;
            position: relative;
            z-index: 2; }  
    </style>
</head>
<body>
<nav class="navbar nav-first navbar-expand-lg">
            <div class="container">
            <div class="row ">
                    <div class="col d-flex" style="align-content: center; align-items: center;">
                        <a href="#"><img class="me-3" src="<?=base_url('assets/img/logo-icon-fix.png')?>" width="22px" alt="logo-text-brand"></a> 
                        <a href="#"><img src="<?=base_url('assets/img/logo-krk.png')?>" width="30px" alt="logo-text-brand"></a>
                        <div class="col ps-2">
                        <a href="#"><img src="<?=base_url('assets/img/logo-text-simantan.png')?>" width="110px" alt="logo-text-brand"></a>
                             </div>

                        </div>
                </div>
             
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav nav-pills ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 200px;">
                  <li class="nav-item">
                        <a class="nav-link mx-2 menu" aria-current="page" href="<?=base_url('KRK')?>">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mx-2 menu " href="<?=base_url('KRK/one_map')?>">One Map</a>
                  </li>
                   <li class="nav-item">
                    <a class="nav-link mx-2 menu " href="<?=base_url('KRK/pola_ruang')?>">Pola Ruang</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mx-2 menu " href="<?=base_url('KRK/landing')?>">Pelayanan</a>
                  </li>
				   <li class="nav-item">
                    <a class="nav-link mx-2 menu " href="<?=base_url('KRK/pengaduan')?>">Pengaduan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mx-2 menu " href="<?=base_url('KRK/unduh')?>">Unduh</a>
                  </li>
               
                  <!-- <li class="nav-item dropdown">
                    <a class="nav-link  mx-2 menu dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      GALERI
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                    </ul>
                </li>      -->
                </ul>
              </div>
            </div>
          </nav>

<div class="content-scroll1">

	<div id="map"</div>
    
</div>
<script>

var key = 'pk.87f2d9fcb4fdd8da1d647b46a997c727';
var map = L.map('map', {zoom: 12.5,
    center: L.latLng([-6.8904456,109.6849576]),
    maxBounds: [[-7.09, 109.4071054],[-6.6,109.9205119]],
    maxZoom:25,
    minZoom:12,
    attributionControl: false,
    zoomControl: false, 
    fullscreenControl: true,
    fullscreenControlOptions: {
    position: 'bottomright'
  }}),
peta1 = new L.TileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
peta2 = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
            maxZoom: 20,subdomains: ['mt0', 'mt1', 'mt2', 'mt3']});
peta3 = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
            maxZoom: 20,subdomains:['mt0','mt1','mt2','mt3']});    
peta4 =  L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
            maxZoom: 20,subdomains:['mt0','mt1','mt2','mt3']}); 
peta5 = new L.BingLayer("AvZ2Z8Jve41V_bnPTe2mw4Xi8YWTyj2eT87tSGSsezrYWiyaj0ldMaVdkyf8aik6", {type: 'Road'});
peta6 = new L.BingLayer("AvZ2Z8Jve41V_bnPTe2mw4Xi8YWTyj2eT87tSGSsezrYWiyaj0ldMaVdkyf8aik6", {type: 'AerialWithLabels'});
map.addLayer(peta3);
var osmGeocoder = new L.Control.OSMGeocoder({placeholder: 'Cari Jalan/Lokasi...'});
map.addControl(osmGeocoder);
 
var pola_ruang = new L.GeoJSON.AJAX(["<?=base_url('assets/geojson/pola_ruang2.geojson')?>"],{style:gaya,onEachFeature:onEachFeature}).addTo(map); 
function onEachFeature(feature, layer) {
		layer.on({
			//mouseover: highlightFeature,
			mouseout: resetHighlight,
			click: highlightFeature
		});
	}
var pola_ruang;
function resetHighlight(e) {
	pola_ruang.resetStyle(e.target);
		
}

var d1_awal= 0.5;
function gaya(feature) {
    var warna = feature.properties['NAMOBJ'];    
    return {
            weight: '1',
            color: warna1(warna),
            dashArray: '4,2,1,2,1,2,1,2,1,2',
            fillOpacity:d1_awal,
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
var drawnItems = new L.FeatureGroup();
     map.addLayer(drawnItems);
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
map.on('draw:created', function (event) {
var layer = event.layer,
        feature = layer.feature = layer.feature || {};
    
    feature.type = feature.type || "Feature";
    var props = feature.properties = feature.properties || {};
    drawnItems.addLayer(layer);
    poly2 = drawnItems.toGeoJSON();
    con ="";
    con= "<div class='panelatas'><div class='panelcenter'><h6 style='padding:0; margin:0;'><b>RINGKASAN TATA RUANG</b></h6></div></div><div class ='isi'>";
    con = con + "<table style=' background: white; background: rgba(255,255,255,0.8)' class='table table-striped'><thead><tr><td><b>Zona Peruntukan</b></td><td><b>Luas Area</b></td></thead></tr>";
    var jum = 0;
    pola_ruang.eachLayer(function (layer1) {
        poly2.features.forEach(function(layer2){
            poly1 = layer1.toGeoJSON();
            var intersection = turf.intersect(poly1, layer2);
            if(intersection!=undefined){
                var interLayer=L.geoJson(intersection, {color: 'red',});
               
                interLayer.eachLayer(function (l1) {
                    var latlngss = l1.getLatLngs();
                    var seeArea = L.GeometryUtil.geodesicArea(latlngss[0]);
                    var kode = layer1.feature.properties['NAMOBJ'];
                    if (jum <=9) {
                        
                       
                        if (seeArea > 0){
                            jum +=1; 
                            console.log(jum);
                            con = con + "<tr><td>"+kode+"</td><td>"+seeArea.toFixed(2)+" m<sup>2</sup></td></tr>"
                        }
                    }
                    
                });
            }
        });
    });
    con = con + "</table></div>";
    dialog(con);
  
});

function dialog(isi) {
    var contents = [isi].join('');
    var dialog = L.control.dialog().setContent(contents).addTo(map);

    map.on('dialog:opened', function(e){ console.log("dialog opened event fired."); });
    map.on('dialog:closehidden', function(e){ console.log("dialog closehidden event fired."); });
    map.on('dialog:closeshown', function(e){ console.log("dialog closeshown event fired."); });
};

var attr= L.control({
        position : 'topleft'
    });
    attr.onAdd = function(map) {
        this._div = L.DomUtil.create('div', 'attr');
        header = L.DomUtil.create('div', 'attrhead');
        this._div.append(header,'');
        box = L.DomUtil.create('div', 'box_basemap'); 
        this._div.append(box);
        this.update('<h6><b>Informasi Peta</b></h6>','<center>"Arahkan cursor mouse anda atau dengan mengklik layer peta untuk melihat informasi peta"</center>');
        return this._div;
    }
    attr.update = function (props,attribut) {
		var contents = props;
		header.innerHTML = `<h6>${contents}</h6>`;
        box.innerHTML=attribut;
	};
    attr.addTo(map);
    function highlightFeature(e) {
		const layer = e.target;
		console.log(e.latlng.lat,e.latlng.lng);
		layer.setStyle({
			color: '#8f7b7d',
			fillOpacity: 0.7
		});
        layer.bringToFront();
        var kode = layer.feature.properties['Kode'];
        var ht = '';
       
       
        var zona = '';
        var s_zona = '';
        var s_jenis = '';
        var dijinkan='';
        var dijinkan_syarat='';
        var kdb='';
        var klb='';
        var kdh='';
		var lat = e.latlng.lat.toString();
		var lng = e.latlng.lng.toString();
		var t_lat = lat.substr(0,7);
		var t_lng = lng.substr(0,7);
		var a = 'https://www.google.com/maps/@'+lat+','+lng+',21z'
        $.ajax({
            type: 'POST',
          	url: "<?=base_url('KRK/view_data/')?>"+kode,
          	cache:false,
          	success: function(data){
              var json = data,
              obj = JSON.parse(json);
              zona = obj.Zona;
              s_zona = obj.sub_zona;
              s_jenis = obj.jenis_pola_ruang;
              dijinkan = obj.di_izinkan;
              dijinkan_syarat = obj.di_izinkan_bersyarat;
              dijinkan_terbatas = obj.di_izinkan_terbatas;
              kdb = obj.kdb;
              klb = obj.klb;
              kdh = obj.kdh;
            
              ht = ht + '<b>zona :</b></br>';
              ht = ht + zona+'<br><br>';
              ht = ht + '<b>Sub Zona :</b></br>';
              ht = ht + s_zona+'<br><br>';
              ht = ht + '<b>Jenis Pola Ruang :</b></br>';
              ht = ht + s_jenis+'<br><br>';
              ht = ht + '<b>Lokasi:</b></br>';
              ht = ht + layer.feature.properties['KELURAHAN']+'<br>';
              ht = ht + layer.feature.properties['KECAMATAN']+'<br><br>';
              ht = ht + '<b>Luas :</b></br>';
              ht = ht + layer.feature.properties['Luas__Ha_']+' Ha<br><br>';
			        ht = ht + '<b>Koordinat :</b></br>';
              ht = ht + '<a href='+a+' target="_blank">'+t_lat+' , '+t_lng+'</a><br><br>'
             
              ht = ht + '<b>Di Izinkan :</b></br>';
              ht = ht + dijinkan+'<br><br>';
              ht = ht + '<b>Di Izinkan Bersyarat :</b></br>';
              ht = ht + dijinkan_syarat+'<br><br>';
              ht = ht + '<b>Di Izinkan Terbatas :</b></br>';
              ht = ht + dijinkan_terbatas+'<br><br>';
              ht = ht + '<b>KDB  :</b>' + kdb + '%; <b>KLB :</b>'+klb+';<b>KDH :</b>' + kdh;
              attr.update('Pola Ruang',ht);
            }
        });
        
	
	}  
    var base = [{
    "id" : 'peta1', 
    "nama_peta"   : "Opensteet Map",
    "tid" : 0,
    "layer" : peta1
   
},{
    "id" : 'peta2', 
    "nama_peta"   : "Google Road Map",
    "tid" : 1,
    "layer" : peta2
},{
    "id" : "peta3", 
    "nama_peta"   : "Google Hybrid",
    "tid" : 2,
    "layer" : peta3
},{
    "id" : "peta4", 
    "nama_peta"   : "Google Satelit",
    "tid" : 3,
    "layer" : peta4
},{
    "id" : "peta5", 
    "nama_peta"   : "Bing Road Map",
    "tid" : 4,
    "layer" : peta5
},{
    "id" : "peta6", 
    "nama_peta"   : "Bing Aerial",
    "tid" : 5,
    "layer" : peta6
}];


var base_label='';
for(let i = 0; i < base.length; i++) {
    let obj = base[i];
    if (i == 2) {
        base_label = base_label + '<input type="radio" id="ra'+
        obj.id+'" onClick="find_base('+obj.tid+')" checked ="true" name="peta" value="'+
        obj.id+'"><label for="html">'+obj.nama_peta+'</label><br>';
    }else{
        base_label = base_label + '<input type="radio" id=ra"'+
        obj.id+'" onClick="find_base('+obj.tid+')" name="peta" value="'+
        obj.id+'"><label for="html">'+obj.nama_peta+'</label><br>';
    }

}


var ren1 = [
  
  {"id":'admin14',
          "nama_peta" : "Pola Ruang",
          "tid" : 14,
          "layer" : pola_ruang,
  }, 
  ];
  var base_ren1 ='';
var isi_ren1 = [];
var isi_r_ren1 = [];
for(let i = 0; i < ren1.length; i++) {
        let obj = ren1[i];
        isi_ren1[i] = '';
        base_ren1 = base_ren1 + '<input type="checkbox"  name="cek" checked="true" onClick="find_ren1('+
        obj.tid+')" id="ren1'+obj.tid+'" value="'+obj.layer+'"><label for="html">'+
        obj.nama_peta+'</label><br><input type="range" id="rt_ren1'+
        obj.tid+'" style="display:inline-block" oninput="set_transp_ren1(this.value,'+
        obj.tid+')" min="0" max="10" value = "5"  name="fav_language" ><hr>';
}            


function set_transp_ren1(s,id_map){
    var opacity = s/10;
    d1_awal = opacity;
    isi_r_ren1[0] = s;
    let peta_ne = ren1[0];
    peta_ne.layer.setStyle({fillOpacity:opacity,opacity :d1_awal }) 
    
}

var info = L.control({position: 'topright'});
info.onAdd = function (map) {
    this._div = L.DomUtil.create('div', 'info');
    this._div.id = "tubuh";
    head = L.DomUtil.create('div', 'atas');
    this._dalamatas = L.DomUtil.create('div', 'center');
    this._dalamatas.innerHTML = '<h6><b>Base Maps</b></h6>';
    this._arrow = L.DomUtil.create('div', 'drop');
    this._arrow.id = 'dr_atas';
    this._arrow.innerHTML = '<a href="#" onclick="hid_bese()" ><img src="<?=base_url('assets/img/arrow_up.png')?>"></a>';
       
    head.append(this._dalamatas);
    head.append(this._arrow);
    this._div.append(head);

    frame_base_map = L.DomUtil.create('div', 'box_basemap');
    frame_base_map.id ="from_base";
    frame_base_map.innerHTML= base_label;
    this._div.append(frame_base_map);
    
    rencana = L.DomUtil.create('div', 'atas');
    rencana.innerHTML= '<div class="center"><h6><b>Peta Rencana Pola Ruang</b></h6></div>';
    this._div.append(rencana);
    this._arrow_ren = L.DomUtil.create('div', 'drop');
    this._arrow_ren.id = 'dr_ren';
   
    rencana.append(this._arrow_ren);
    frame_rencana = L.DomUtil.create('div', 'box_basemap');
    frame_rencana.id = "from_rencana";
    frame_rencana.innerHTML = base_ren1;
    this._div.append(frame_rencana);

    
    this._div.setAttribute("onmouseleave", "enab()");
    this._div.setAttribute("onmouseover", "temporary_disabled()");
  
    return this._div;

}
function find_base(e) {
    var radio = document.getElementById("ra"+e);
    for (let i = 0 ; i < base.length; i++) {
        let obj = base[i];
        if (i == e) {
            obj.layer.addTo(map);
        }else{
            obj.layer.remove(map);
        }
    }
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
var isi_ren1 = [];
    var isi_ = [];
function find_ren1(e) {

    var checkBox = document.getElementById("ren1"+e);
    var Range = document.getElementById("rt_ren1"+e);
    var id_rencana = document.getElementById("id_rencana");

    if (checkBox.checked == true){  
        Range.style.display ="inline-block";

        isi_ren1.push(e);
        isi_.push(e);
        let peta_rencana = ren1[e];
        pola_ruang.addTo(map);
        id_rencana.value ='1';
      
    }else {
        var index = isi_ren1.indexOf(e);
        var ind = isi_.indexOf(e);
      
        isi_ren1.splice(index,1);
        isi_.splice(ind,1)
        Range.style.display ="none";
        pola_ruang.remove(map);
        
        
    }
}
L.geolet({position: 'bottomright'}).addTo(map);
L.control.zoom({position:'bottomright'}).addTo(map);
L.control.scale().addTo(map);
</script>

</body>
</html>