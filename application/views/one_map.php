<!DOCTYPE html>

<html lang="en">

<head>

<base target="_top">

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	

	<title>One Map Kota Pekalongan</title>

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

    

    <link rel="stylesheet" href="<?=base_url('assets/css/leaflet.legend.css')?>" media="screen">

    <link rel="stylesheet" href="<?=base_url('assets/css/easy-button.css')?>" media="screen">

    <link rel="stylesheet" href="<?=base_url('assets/css/Control.FullScreen.css')?>" media="screen">

      <link rel="stylesheet" href="<?=base_url('assets/geolet/locate.css')?>" media="screen">

    <link rel="stylesheet" href="<?=base_url('assets/geolet/style.css')?>" media="screen">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.css" />

    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    

    <script src="https://cdn.jsdelivr.net/npm/leaflet@1.7"></script> 

     

     <script src="<?=base_url('assets/geolet/locate.js')?>" ></script>

    <script src="<?=base_url('assets/js/Control.FullScreen.js')?>"></script>

    <script src="<?=base_url('assets/js/Bing.js')?>"></script>

    <script src="<?=base_url('assets/js/leaflet.legend.js')?>"></script>

    <script  src="<?=base_url('assets/js/leaflet.ajax.js')?>"></script>



    <script src="<?=base_url('assets/js/Leaflet.Dialog3.js')?>" ></script>

    

    

    <link rel="stylesheet" href="https://unpkg.com/@highlightjs/cdn-assets@11.3.1/styles/a11y-light.min.css">

    <link rel="stylesheet" href="<?=base_url('assets/css/style-onemap.css')?>">

    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css">

    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">


	<link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('assets/images/favicon1.png')?>">
    <script  src="<?=base_url('assets/js/cari.js')?>"></script>

    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.3.1/highlight.min.js"></script>

    <style>

        html, body {height: 100%;margin: 0;overflow: hidden;}

        #map { width: auto; height: 92%; position: relative;z-index: 1; }

        

        h6 {

            color: #fff;

            padding: 0px;

        }

        .info { 

            width:300px;

            height: auto;

            max-height: 750px;

            min-height: 370px;

            overflow-y: scroll;

            scrollbar-color: rebeccapurple green;

            font-family: 'Poppins', sans-serif;

            background: white; background: rgba(255,255,255,0.8); 

            box-shadow: 0 0 15px rgba(0,0,0,0.2); 

            border-radius: 5px;

            display: block;

            position: relative;

            z-index: 2; }  

        .attr { 

            width:250px;

            max-width: 250px;

            height: auto;

            max-height: 750px;

            min-height: 170px;

            z-index:100;

            font-family: 'Poppins', sans-serif;

            background: white; background: rgba(255,255,255,1); 

            box-shadow: 0 0 15px rgba(0,0,0,0.2); 

            border-radius: 5px;

            display: block;

            position: relative;

            z-index: 2; }  

        .atas {

            width:284px;

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

    height: 30px;

    padding: 6px 8px;

 

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

        #from_admin {display: none;}

        #from_tematik {display: none;}

        #from_rencana {display: none;}

        #from_rencana2 {display: none;}

        #from_renta {display: none;}

      

        .attrhead { width:250px;

            

            position: relative;

            display: inline-block;

            vertical-align: middle;

            text-align: center;

            background: rgba(0,145,168,0.8); 

            box-shadow: 0 0 15px rgba(0,0,0,0.2);

            

           

            }

        .label_kec {width:auto;height:

             auto;font-size: 12px;

             border-color: none;

              border-width : 0;

             background: rgba(255, 255, 255, 0.0);

             font-weight: bold;

             text-shadow: -1px 0 red, 0 1px black, 1px 0 red, 0 -1px red;

             color: white;}



        .leaflet-control-dialog {

            position: absolute;

            background: white; background: rgba(255,255,255,1); 

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

             

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

                <ul class="navbar-nav nav-pills ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 200px;">

                  <li class="nav-item">

                        <a class="nav-link mx-2 menu" aria-current="page" href="<?=base_url('KRK')?>">Home</a>

                  </li>

                  <li class="nav-item">

                    <a class="nav-link mx-2 menu " href="<?=base_url('KRK/One_map')?>">One Map</a>

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

    <input type="hidden" id="butt" value=""/>

    <input type="hidden" id="id_admin" value="0"/>

    <input type="hidden" id="id_tematik" value="0"/>

    <input type="hidden" id="id_rencana" value="0"/>

    <input type="hidden" id="id_rencana2" value="0"/>

    <input type="hidden" id="id_rencana3" value="0"/>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
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

var contents = [

                    "<div class='panelatas card'><div class='panelcenter '><h6 style='padding:0; margin:0;'><b>SELAMAT DATANG</b></h6></div></div><div class ='isi'>Peta DPUPR Kota Pekalongan adalah platform untuk berbagi data geospasial dan peta. Anda dapat mencari data geospasial yang dipublikasikan oleh Pemerintah Kota Pekalongan. Data tersedia untuk di eksplor, browsing, dan dapat digabungkan dengan layanan geospasial berbasis web lainnya.</div>",

].join('');



    var dialog = L.control.dialog()

              .setContent(contents)

              .addTo(map);



    map.on('dialog:opened', function(e){ console.log("dialog opened event fired."); });

   

    map.on('dialog:closehidden', function(e){ console.log("dialog closehidden event fired."); });

    map.on('dialog:closeshown', function(e){ console.log("dialog closeshown event fired."); });

    L.control.scale().addTo(map);

       

     

        L.control.zoom({position:'bottomright'}).addTo(map);

//.-----------------------------------------------------------------



var osmGeocoder = new L.Control.OSMGeocoder({placeholder: 'Cari Jalan/Lokasi...'});

map.addControl(osmGeocoder);

 

    



   //.-----------------------------------------------------------------



   

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

var base = new L.GeoJSON.AJAX(["<?=base_url('assets/geojson/Batas_kecamatan.geojson')?>"],{style:base_awal,onEachFeature:label_kecamatan}); 





function base_awal(feature) {

        

        return {

            weight: '2',

            color : 'white',

            fillopacity : 0,

            fillOpacity : 0,

            fillcolor : 'transparent',

           

           

            

        };

}



map.addLayer(base);



function label_kecamatan(feature, layer){

    layer.bindTooltip(feature.properties['KECAMATAN'], {permanent: true, direction: "center", className: "label_kec"});

}

<?php 





if ($map   !=null) {

    foreach($map as $m) {

    ?>

var <?=$m->alias?> = new L.GeoJSON.AJAX(["<?=base_url('assets/geojson/')?><?=$m->File_Peta?>"],{<?=$m->Function?>});   

    var d1_awal<?=$m->id?> = 0.5;



    function gaya<?=$m->id?>(feature) {

        var warna = feature.properties['<?=$m->attr_legenda?>'];

        return {

            weight: '1',

            color: warna<?=$m->id?>(warna),

            dashArray: '4,2,1,2,1,2,1,2,1,2',

            fillOpacity:d1_awal<?=$m->id?>,

        };

}



    function titik<?=$m->id?>(feature, latlng) {



        var jenis = feature.properties['<?=$m->attr_legenda?>'];;

        var icon_nya = geticon<?=$m->id?>(jenis);

        var Url_nya = '<?=base_url('assets/icons/')?>'+icon_nya;

        <?php if ($m->id == 5)  {?>

            var Icon = L.icon({iconUrl:Url_nya,iconSize: [10, 10],});

        <?php } else { ?>

            var Icon = L.icon({iconUrl:Url_nya,iconSize: [30, 30],});

        <?php } ?>

        var marker = L.marker(latlng, {icon:Icon});

        return marker;

    }



<?php $w_legenda = $this->Buka_peta->fetch_record('tb_legenda',$m->id,'id_map');

$kembali_warna="";

$kembali_titik = "";

foreach ($w_legenda as $w) {



    $kembali_warna = $kembali_warna."d == '".$w->isi."' ? '".$w->warna."':";

    $kembali_titik = $kembali_titik."d == '".$w->isi."' ? '".$w->warna."':";

}

$kembali_warna = $kembali_warna."'#9e5870'";

$kembali_titik = $kembali_titik."cctv1.png";

?>



function onEachFeature<?=$m->id?>(feature, layer) {

		layer.on({

            <?php if ($m->Tipe != 'poin') {?>

			mouseover: highlightFeature<?=$m->id?>,

            mouseout: resetHighlight<?=$m->id?>,

            

			<?php } else { ?>

                mouseover: highlightFeature_p<?=$m->id?>,

                

            <?php } ?>

            click: zoomToFeature

		});

       

}

var <?=$m->alias?>;



	function resetHighlight<?=$m->id?>(e) {

		<?=$m->alias?>.resetStyle(e.target);

		

	}



function highlightFeature<?=$m->id?>(e) {

		var layer = e.target;

        layer.setStyle({

			

			color: '#8f7b7d',

			

			fillOpacity: 0.7

		});



        var ht = '';

        <?php $atribut = $this->Buka_peta->fetch_record('tb_atribut',$m->id,'id_map');

        if ($atribut != null) {

            foreach($atribut as $at) {?>

                ht = ht + '<b><?=$at->alias?></b> : ' + layer.feature.properties['<?=$at->atribut?>'] + ' <?=$at->satuan?><br><br>';

           <?php }

        } 

        ?>

        console.log(ht);

        attr.update('<?=$m->Nama_Peta?>',ht);

}

function highlightFeature_p<?=$m->id?>(e) {

		var layer = e.target;

        



        var ht = '';

        <?php $atribut = $this->Buka_peta->fetch_record('tb_atribut',$m->id,'id_map');

        if ($atribut != null) {

            foreach($atribut as $at) {?>

                ht = ht + '<b><?=$at->alias?></b> : ' + layer.feature.properties['<?=$at->atribut?>'] + ' <?=$at->satuan?><br><br>';

           <?php }

        } 

        ?>

        console.log(ht);

        attr.update('<?=$m->Nama_Peta?>',ht);

}

function warna<?=$m->id?>(d) {

    return <?=$kembali_warna?>

}



function geticon<?=$m->id?>(d) {

    return <?=$kembali_titik?>

}



const legend<?=$m->id?> = L.control.Legend({

            position: "bottomleft",

            title : "Legenda <?=$m->Nama_Peta?>",

            collapsed: false,

            symbolWidth: 24,

            opacity: 0.73,

            column: 3,

            legends: [

                <?php foreach ($w_legenda as $w) { ?>

                {

                label: "<?=$w->isi?>",

                type: "polygon",

                sides: 4,

                color: "<?=$w->warna?>",

                fillColor: "<?=$w->warna?>",

                weight: 2

            },

            <?php } ?>

        ]

        });

       

        const legendtitik<?=$m->id?> = L.control.Legend({

            position: "bottomleft",

            title : "Legenda <?=$m->Nama_Peta?>",

            collapsed: false,

            symbolWidth: 24,

            opacity: 0.73,

            column: 3,

            legends: [

                <?php foreach ($w_legenda as $w) { ?>

                {

                label: "<?=$w->isi?>",

                type: "image",

                url: "<?=base_url('assets/icons/'.$w->warna)?>",

                

            },

            <?php } ?>

        ]

        });   

<?php

}

 

} ?>









function popUp(f,l){

    var layer = l;

    var out = [];

    var data = [] ;

    if (f.properties){    

        l.on('click', function (e){

            var coord = e.latlng.toString().split(',');

            var lat = coord[0].split('(');

            var lng = coord[1].split(')');

            out.length = 0;

            out.push('<b>Nama Toponim :</b>'+f.properties['TOPONIM']);

            out.push('<b>Nama Toponim :</b>'+f.properties['PL']);

            out.push('<b>Koordinat: </b>'+e.latlng.lat+','+e.latlng.lng);

            l.bindPopup(out.join("<br />"));});} 

}







var geocoder = L.control.geocoder(key, {

            fullWidth: 650,

            expanded: true,

            markers: true,

            url: 'https://api.locationiq.com/v1',}).addTo(map);

var geocoderEl = geocoder._container;

geocoderEl.parentNode.insertBefore(geocoderEl, geocoderEl.parentNode.childNodes[0]);

geocoder.focus();

window.addEventListener('hashchange', function () {

    parent.postMessage(window.location.hash, '*')

});









function gaya_sungai(feature) {

    var warna = feature.properties['JNS_SUNGAI'];

    return {

        weight: weight_sungai(warna),

        color: warna_sungai(warna),

        fillOpacity:0.5,

        opacity:0.5,

    };

}



function warna_sungai(d) {

 return d == 'Sungai Besar' ? '#060b79' : '#545bf5';

}



function weight_sungai(d) {

 return d == 'Sungai Besar' ? '3' : '2';

}

function gaya_jalan(feature) {

    var kelas = feature.properties['KLS_JALAN'];

    var das = '4,9';

    var w = '4';

    var warna = '#000000';

    if (kelas != 'Jalur Kereta Api') {

        das = '0'

        warna = '#191b23';

    }

    if (kelas == 'Jalur Kereta Api' )  {

        w = '5';

    }else if (kelas == 'Jalan Nasional') { 

        w = '5';

       warna = '2f124c';

    }else if (kelas == 'Jalan Provinsi') { 

        w = '3';

        warna = '#021e75';

    }else  {

        w = '2';

        warna = 'yellow';

    }

    return {

        opacity:0.5,

        weight: w,

        color: warna,

        dashArray: das,

        legendLabel: feature.properties['KLS_JALAN'],

      

    };

}

function gaya_transport(feature) {

    var kelas = feature.properties['NAMOBJ'];

   

    

    if (kelas == 'Jalan Arteri Primer' )  {

        das = 0;

        w = '5';

        warna = '#203267';

    }else if (kelas == 'Jalan Arteri Sekunder') { 

        das = 0;

        w = '5';

        warna = '#ff0000';

    }else if (kelas == 'Jalan Kolektor Primer') { 

        das = 0;

        w = '3';

        warna = '#00ff00';

    }else if (kelas == 'Jalan Kolektor Sekunder') { 

        das = 0;

        w = '3';

        warna = '#00ff00';

    }else if (kelas == 'Jalan Lokal Sekunder') { 

        das = 0;

        w = '2';

        warna = '#3f3fac';

    }else if (kelas == 'Alur-Pelayaran Masuk Pelabuhan') { 

        das = 0;

        w = '5';

        warna = '#9f6b5f';

    }else if (kelas == 'Jaringan Jalur Kereta Api (KA) Antarkota') { 

        das = 4,9;

        w = '5';

        warna = 'black';

    }else  {

        das = 4,9;

        w = '3';

        warna = 'black';

    }

    return {

        opacity:0.5,

        weight: w,

        color: warna,

        dashArray: das,

        legendLabel: feature.properties['KLS_JALAN'],

      

    };

}

function gaya_jaringan_energi(feature) {

    var kelas = feature.properties['NAMOBJ'];

    if (kelas == 'Saluran Udara Tegangan Tinggi (SUTT)') {

        warna = '#Ff0000';

        w = '5';

    }

    else if (kelas == 'Saluran Udara Tegangan Menengah (SUTM)') {

        warna = '#Ff0000';

        w = '2';

    } else {

        warna = 'blue';

        w = '5'; 

    }

    return {

        opacity:0.5,

        weight: w,

        color: warna,

        legendLabel: feature.properties['NAMOBJ'],

      

    };

}



function gaya_kota(feature) {

    var kelas = feature.properties['NAMOBJ'];

    if (kelas == 'Sistem Jaringan Pejalan Kaki') {

        warna = '#c6e80d';

      

    }

    else if (kelas == 'Jaringan Tersier') {

        warna = '#0a45f1';

    }else if (kelas == 'Jaringan Primer') {

        warna = '#4b6bc8';   

    }  else if (kelas == 'Jaringan Sekunder') {

        warna = '#6f7eaa';

    } else if (kelas == 'Unit Pelayanan') {

        warna = '#ef3c43';

    } else if (kelas == 'Unit Distribusi') {

        warna = '#cf4961';

    

    }else {

        warna = '#ed062f';

   

    }

    return {

        opacity:0.5,

        weight: '4',

        color: warna,

        legendLabel: feature.properties['NAMOBJ'],

      

    };

}

function gaya_jaringan_air(feature) {

    var kelas = feature.properties['NAMOBJ'];

    if (kelas == 'Sistem Pengendalian Banjir') {

        warna = '#2be685';

        w = '5';

    }

    else if (kelas == 'Jaringan Irigasi Primer') {

        warna = '#1e04d4';

        w = '3';

    } else {

        warna = '#be20f4';

        w = '2'; 

    }

    return {

        opacity:0.5,

        weight: w,

        color: warna,

        legendLabel: feature.properties['NAMOBJ'],

      

    };

}



function gaya_telekomuniasi(feature) {

    var kelas = feature.properties['NAMOBJ'];

    if (kelas == 'Jaringan Tetap') {

        warna = '#ff0000';

        w = '5';

    }

   

    return {

        opacity:0.5,

        weight: w,

        color: warna,

        legendLabel: feature.properties['NAMOBJ'],

      

    };

}

</script>

<script>

// Peta

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

var administrasi = [

    <?php if ($map_dasar != null) {

        $i = 0;

        foreach ($map_dasar as $md) {?>

    {"id":'<?=$i?>',

            "nama_peta" : "<?=$md->Nama_Peta?>",

            "tid" : <?=$i?>,

            "layer" : <?=$md->alias?>,

    }, <?php $i++;

    }

}?>

    ];





var isi_administrasi = [];

function find_admin(e) {

    var checkBox = document.getElementById("c"+e);

    var Range = document.getElementById("r"+e);

    var legenda =document.getElementById("ladmin"+e);

    var labellegenda =document.getElementById("lad"+e);

    var id_admin = document.getElementById('id_admin');



    if (checkBox.checked == true){  

        Range.style.display ="inline-block";

        legenda.style.display = "inline-block";

        labellegenda.style.display = "inline-block";

        legenda.checked=false;

        isi_administrasi.push(e);

        let obj = administrasi[e];

        obj.layer.addTo(map);

        id_admin.value ='1';

        

        attr.update(prop,'<center>"Silahkan arahkan cursor mouse anda atau dengan mengklik layer peta untuk melihat informasi peta"</center>')

    } else {

        var index = isi_administrasi.indexOf(e);

        

        isi_administrasi.splice(index,1);

        console.log(isi_administrasi);

        Range.style.display ="none";

        legenda.style.display = "none";

        labellegenda.style.display = "none";

        

        if (isi_administrasi.length === 0) {

            id_admin.value ='0';

        }

        let obj1 = administrasi[e];

        obj1.layer.remove(map);

        if (e == 0) {

            legend1.remove(map);

        }else if (e ==1 ) {

            legend2.remove(map);

            

        }else if (e ==2 ) {

            legend_jalan.remove(map);

        }else if (e ==3 ) {

            legend4.remove(map);

        }else if (e ==4 ) {

            legendtitik5.remove(map);

        }

    }

}

var l_admin =[0,1,2,3,4];

function ladmin(e) {

    var legenda =document.getElementById("ladmin"+e);

    if (legenda.checked == false){

        var index_l = l_admin.indexOf(e);

        l_admin.splice(index_l,1);

        

       

        if (e==0) {

            legend1.remove(map);

        }else if(e==1){

            legend2.remove(map);

        }else if(e==2){

            legend_jalan.remove(map);

        }else if(e==3){

            legend4.remove(map);

        }else if(e==4){

            legendtitik5.remove(map);

        }

        

    }else{

        l_admin.push(e);

       

        if (e==0) {

            legend1.addTo(map);

        }else if(e==1){

            legend2.addTo(map);

        }else if(e==2){

            legend_jalan.addTo(map);

        }else if(e==3){

            legend4.addTo(map);

        }else if(e==4){

            legendtitik5.addTo(map);

        }

    }

      

}

var base_admin='';

var isi_r_admin = [];

    for(let i = 0; i < administrasi.length; i++) {

        let obj = administrasi[i];

        isi_r_admin[i] = '';

        base_admin = base_admin + '<input type="checkbox"  name="cek" onClick="find_admin('+

        obj.tid+')" id="c'+obj.tid+'" value="'+obj.layer+'"><label for="html">'+

        obj.nama_peta+'</label><br><input type="range" id="r'+

        obj.tid+'" style="display:none" oninput="set_transp(this.value,'+

        obj.tid+')" min="0" max="10" value = "5"  name="fav_language" ><input type="checkbox" onClick="ladmin('+

        obj.tid+')" id="ladmin'+

        obj.tid+'" checked="false" style="display:none"><p id="lad'+

        obj.tid+'" style="display:none">Legenda</p><hr>';

}



function set_transp(s,id_map){

    var opacity = s/10;

    console.log(id_map);

    isi_r_admin[id_map] = s;

    let peta_ne = administrasi[id_map];

    peta_ne.layer.setStyle({fillOpacity:opacity,opacity :opacity }) 

    if (id_map == 0) {

        d1_awal1 = opacity;

    }else if(id_map ==1 ){

        d1_awal2 = opacity;

    }else if(id_map ==2 ){

        d1_awal3 = opacity;

    }else if(id_map ==3 ){

        d1_awal3 = opacity;

    }else if(id_map ==4 ){

        d1_awal5 = opacity;

    }

}

</script>

















<script>

    // Panel

    var tem = [

    <?php if ($map_tematik != null) {

        $i = 0;

        foreach ($map_tematik as $mt) {?>

    {"id":'admin<?=$i?>',

            "nama_peta" : "<?=$mt->Nama_Peta?>",

            "tid" : <?=$i?>,

            "layer" : <?=$mt->alias?>,

    }, <?php $i++;

    }

}?>

    ];



    function ltema(e) {

      

    var legenda =document.getElementById("ltem"+e);

    if (legenda.checked == false){

        var index_l = l_admin.indexOf(e);

        l_admin.splice(index_l,1);

        

       

        if (e==0) {

            legend6.remove(map);

        }else if(e==1){

            legend7.remove(map);

        }else if(e==2){

            legend8.remove(map);

        }else if(e==3){

            legend9.remove(map);

        }else if(e==4){

            legend11.remove(map);

        }

        

    }else{

        l_admin.push(e);

       

        if (e==0) {

            legend6.addTo(map);

        }else if(e==1){

            legend7.addTo(map);

        }else if(e==2){

            legend8.addTo(map);

        }else if(e==3){

            legend9.addTo(map);

        }else if(e==4){

            legend11.addTo(map);

        }

    }

      

}

var isi_tematik = [];

function find_tematik(e) {



    var checkBox = document.getElementById("t"+e);

    var Range = document.getElementById("rt"+e);

    var id_tematik = document.getElementById('id_tematik');

    var legenda =document.getElementById("ltem"+e);

    var labellegenda =document.getElementById("lte"+e);

    if (checkBox.checked == true){  

        Range.style.display ="inline-block";

        legenda.style.display ="inline-block";

        legenda.checked = false;

        labellegenda.style.display ="inline-block";

        isi_tematik.push(e);

        let peta_tematik = tem[e];

        peta_tematik.layer.addTo(map);

        id_tematik.value ='1';

        

    }else {

        var index = isi_tematik.indexOf(e);

        console.log(index);

        isi_tematik.splice(index,1)

        Range.style.display ="none";

        legenda.style.display ="none";

        labellegenda.style.display ="none";

        let peta_tematik1 = tem[e];

        peta_tematik1.layer.remove(map);

        if (isi_tematik.length === 0) {

            id_tematik.value ='0';

        }

        if (e == 0) {

            legend6.remove(map);

            

        }else if (e == 1) {

            legend7.remove(map);

        }else if (e == 2) {

            legend8.remove(map);

        }else if (e == 3) {

            legend9.remove(map);

        }else if (e == 4) {

            legend11.remove(map);

        }

    }

}

var base_tematik ='';

var isi_r_tem = [];

for(let i = 0; i < tem.length; i++) {

        let obj = tem[i];

        isi_r_tem[i] = '';

        base_tematik = base_tematik + '<input type="checkbox"  name="cek" onClick="find_tematik('+

        obj.tid+')" id="t'+obj.tid+'" value="'+obj.layer+'"><label for="html">'+

        obj.nama_peta+'</label><br><input type="range" id="rt'+

        obj.tid+'" style="display:none" oninput="set_transp_tem(this.value,'+

        obj.tid+')" min="0" max="10" value = "5"  name="fav_language" ><input type="checkbox" onClick="ltema('+

        obj.tid+')" id="ltem'+

        obj.tid+'" checked="false" style="display:none"><p id="lte'+

        obj.tid+'" style="display:none">Legenda</p><hr>';

}



function set_transp_tem(s,id_map){

    var opacity = s/10;

    console.log(id_map);

    isi_r_tem[id_map] = s;

    let peta_ne = tem[id_map];

    peta_ne.layer.setStyle({fillOpacity:opacity,opacity :opacity }) 

    if (id_map == 0) {

        d1_awal6 = opacity;

    }else if (id_map == 1) {

        d1_awal7 =opacity

    }else if (id_map == 2) {

        d1_awal8 =opacity

    }else if (id_map == 3) {

        d1_awal9 =opacity

    }else if (id_map == 4) {

        d1_awal11 =opacity

    }

}





var ren1 = [

    <?php if ($map_polaruang != null) {

        $i = 0;

        foreach ($map_polaruang as $pl) {?>

    {"id":'admin<?=$i?>',

            "nama_peta" : "<?=$pl->Nama_Peta?>",

            "tid" : <?=$i?>,

            "layer" : <?=$pl->alias?>,

    }, <?php $i++;

    }

}?>

    ];





    var isi_ren1 = [];

    var isi_ = [];

function find_ren1(e) {



    var checkBox = document.getElementById("ren1"+e);

    var Range = document.getElementById("rt_ren1"+e);

    var id_rencana = document.getElementById("id_rencana");

    var legenda =document.getElementById("lren1"+e);

    var labellegenda =document.getElementById("lre1"+e);

    if (checkBox.checked == true){  

        Range.style.display ="inline-block";

        legenda.style.display ="inline-block";

        labellegenda.style.display ="inline-block";

        legenda.checked=false;

        isi_ren1.push(e);

        isi_.push(e);

        let peta_rencana = ren1[e];

        peta_rencana.layer.addTo(map);

        id_rencana.value ='1';

       

    }else {

        var index = isi_ren1.indexOf(e);

        var ind = isi_.indexOf(e);

        console.log(index);

        isi_ren1.splice(index,1);

        isi_.splice(ind,1)

        Range.style.display ="none";

       

        legenda.style.display ="none";

        labellegenda.style.display ="none";

        let peta_rencana1 = ren1[e];

        peta_rencana1.layer.remove(map);

        if (isi_.length === 0) {

            id_rencana.value ='0';

        }

        if (e == 0) {

            legend10.remove(map);

        }

        

    }

}

function lrenc1(e) {

    var legenda =document.getElementById("lren1"+e);

    if (legenda.checked == false){

        var index_l = l_admin.indexOf(e);

        l_admin.splice(index_l,1);

        

       

        if (e==0) {

            legend10.remove(map);

        }

        

    }else{

        l_admin.push(e);

       

        if (e==0) {

            legend10.addTo(map);

        }

    }

      

}

var base_ren1 ='';

var isi_ren1 = [];

var isi_r_ren1 = [];

for(let i = 0; i < ren1.length; i++) {

        let obj = ren1[i];

        isi_ren1[i] = '';

        base_ren1 = base_ren1 + '<input type="checkbox"  name="cek" onClick="find_ren1('+

        obj.tid+')" id="ren1'+obj.tid+'" value="'+obj.layer+'"><label for="html">'+

        obj.nama_peta+'</label><br><input type="range" id="rt_ren1'+

        obj.tid+'" style="display:none" oninput="set_transp_ren1(this.value,'+

        obj.tid+')" min="0" max="10" value = "5"  name="fav_language" ><input type="checkbox" onClick="lrenc1('+

        obj.tid+')" id="lren1'+

        obj.tid+'" checked="false" style="display:none"><p id="lre1'+

        obj.tid+'" style="display:none">Legenda</p><hr>';

}            

function set_transp_ren1(s,id_map){

    var opacity = s/10;

    console.log(id_map);

    isi_r_ren1[id_map] = s;

    let peta_ne = ren1[id_map];

    peta_ne.layer.setStyle({fillOpacity:opacity,opacity :opacity }) 

    if (id_map == 0) {

        d1_awal10 = opacity;

    }

}



var energi = group = new L.FeatureGroup();

energi.addLayer(jaringan_energi);

energi.addLayer(jaringan_energi2);



var air = group = new L.FeatureGroup();

air.addLayer(sumber_daya_air);

air.addLayer(sumber_daya_air2);



var telkom = group = new L.FeatureGroup();

telkom.addLayer(telokomunikasi);

telkom.addLayer(telokomunikasi_point);



var trans = group = new L.FeatureGroup();

trans.addLayer(transportasi);

trans.addLayer(transportasi1);



var kota = group = new L.FeatureGroup();

kota.addLayer(sistem_perkotaan);

kota.addLayer(sistem_perkotaan1);



var ren2 = [

    <?php if ($map_strukturuang != null) {

        $i = 0;

        foreach ($map_strukturuang as $pl) {?>

    {"id":'admin<?=$i?>',

            "nama_peta" : "<?=$pl->Nama_Peta?>",

            "tid" : <?=$i?>,

            "layer" : <?=$pl->alias?>,

    }, <?php $i++;

    }

}?>

    ];





var ren3 = [{

    "id" : 'peta0', 

    "nama_peta"   : "Rencana",

    "tid" : 0,

    "layer" : pola_ruang

   

},{

    "id" : 'peta1', 

    "nama_peta"   : "Rencana Sistem Pelayanan",

    "tid" : 1,

    "layer" : kota

   

},{

    "id" : 'peta2', 

    "nama_peta"   : "Rencana Kawasan Strategis",

    "tid" : 2,

    "layer" : kawasan_strategis

   

},{

    "id" : 'peta3', 

    "nama_peta"   : "Rencana Jaringan Transportasi",

    "tid" : 3,

    "layer" : trans

   

},];





function highlightenergi(e) {

		var layer = e.target;



		

		if (!L.Browser.opera && !L.Browser.edge) {

			layer.bringToFront();

		}



		attr.update('layer.feature.properties','');

	}

function energi(feature, layer) {

		layer.on({

			

		

		});

	}



var isi_ren2 = [];

var isi_ = [];

function find_ren2(e) {



    var checkBox = document.getElementById("ren2"+e);

    var Range = document.getElementById("rt_ren2"+e);

    var legenda =document.getElementById("lren2"+e);

    var labellegenda =document.getElementById("lre2"+e);

    var id_rencana2 = document.getElementById("id_rencana2");

    if (checkBox.checked == true){  

        Range.style.display ="inline-block";

        legenda.style.display ="inline-block";

        legenda.checked=false;

        labellegenda.style.display ="inline-block";

        isi_ren2.push(e);

        isi_.push(e);

        console.log(isi_);

        let peta_rencana2 = ren2[e];

        peta_rencana2.layer.addTo(map);

        id_rencana2.value ='1';

        

    }else {

        var index = isi_ren2.indexOf(e);

        var ind = isi_.indexOf(e);

        isi_ren2.splice(index,1);

        isi_.splice(ind,1);

        console.log(isi_);

        Range.style.display ="none";

        legenda.style.display ="none";

        labellegenda.style.display ="none";

        let peta_rencana21 = ren2[e];

        peta_rencana21.layer.remove(map);

        if (isi_.length === 0) {

            id_rencana2.value ='0';

        }

        if (e == 0) {

            legend_jalan.remove(map);

            

        }

    }

}



function lrenc2(e) {

    var legenda =document.getElementById("lren2"+e);

    if (legenda.checked == false){

        var index_l = l_admin.indexOf(e);

        l_admin.splice(index_l,1);

        

       

        if (e==0) {

            legend_jalan.remove(map);

           

        }



        

    }else{

        l_admin.push(e);

       

        if (e==0) {

            legend_jalan.addTo(map);

        }

    }

      

}

function lrenc3(e) {

    var legenda =document.getElementById("lren3"+e);

    if (legenda.checked == false){

        var index_l = l_admin.indexOf(e);

        l_admin.splice(index_l,1);

        

       

        if (e==0) {

            legend14.remove(map);

            

        }else if(e==1){

            legend23.remove(map);

            legendtitik24.remove(map);

        }else if(e==2){

            legend13.remove(map);

            

        }else if(e==3){

            legend21.remove(map);

            legendtitik22.remove(map);

        }



        

    }else{

        l_admin.push(e);

       

        if (e==0) {

            legend14.addTo(map);

           

        }else if(e==1){

            legend23.addTo(map);

            legendtitik24.addTo(map);

        }else if(e==2){

            legend13.addTo(map);

            

        }else if(e==3){

            legend21.addTo(map);

            legendtitik22.addTo(map);

        }

    }

      

}

var base_ren2 ='';



var isi_r_ren2 = [];

for(let i = 0; i < ren2.length; i++) {

        let obj = ren2[i];

        isi_ren2[i] = '';

        base_ren2 = base_ren2 + '<input type="checkbox"  name="cek" onClick="find_ren2('+

        obj.tid+')" id="ren2'+obj.tid+'" value="'+obj.layer+'"><label for="html">'+

        obj.nama_peta+'</label><br><input type="range" id="rt_ren2'+

        obj.tid+'" style="display:none" oninput="set_transp_ren2(this.value,'+

        obj.tid+')" min="0" max="10" value = "5"  name="fav_language" ><input type="checkbox" onClick="lrenc2('+

        obj.tid+')" id="lren2'+

        obj.tid+'" checked="false" style="display:none"><p id="lre2'+

        obj.tid+'" style="display:none">Legenda</p><hr>';

}  



var isi_ren3 = [];

function find_ren3(e) {



var checkBox = document.getElementById("ren3"+e);

var Range = document.getElementById("rt_ren3"+e);

var legenda =document.getElementById("lren3"+e);

var labellegenda =document.getElementById("lre3"+e);

var id_rencana3 = document.getElementById("id_rencana3");

if (checkBox.checked == true){  

    Range.style.display ="inline-block";

    legenda.style.display ="inline-block";

    legenda.checked=false;

    labellegenda.style.display ="inline-block";

    isi_ren3.push(e);

    isi_.push(e);

    console.log(isi_);

    let peta_rencana3= ren3[e];

    peta_rencana3.layer.addTo(map);

    id_rencana3.value ='1';

    

}else {

    var index = isi_ren3.indexOf(e);

    var ind = isi_.indexOf(e);

    isi_ren3.splice(index,1);

    isi_.splice(ind,1);

    console.log(isi_);

    Range.style.display ="none";

    legenda.style.display ="none";

    labellegenda.style.display ="none";

    let peta_rencana21 = ren3[e];

    peta_rencana21.layer.remove(map);

    if (isi_.length === 0) {

        id_rencana3.value ='0';

    }

    if (e==0) {

            legend14.remove(map);

            

        }else if(e==1){

            legend23.remove(map);

            legendtitik24.remove(map);

        }else if(e==2){

            legend13.remove(map);

            

        }else if(e==3){

            legend21.remove(map);

            legendtitik22.remove(map);

        }

}

}

var base_ren3 ='';



var isi_r_ren3 = [];

for(let i = 0; i < ren3.length; i++) {

        let obj = ren3[i];

        isi_ren3[i] = '';

        base_ren3 = base_ren3 + '<input type="checkbox"  name="cek" onClick="find_ren3('+

        obj.tid+')" id="ren3'+obj.tid+'" value="'+obj.layer+'"><label for="html">'+

        obj.nama_peta+'</label><br><input type="range" id="rt_ren3'+

        obj.tid+'" style="display:none" oninput="set_transp_ren3(this.value,'+

        obj.tid+')" min="0" max="10" value = "5"  name="fav_language" ><input type="checkbox" onClick="lrenc3('+

        obj.tid+')" id="lren3'+

        obj.tid+'" checked="false" style="display:none"><p id="lre3'+

        obj.tid+'" style="display:none">Legenda</p><hr>';

}

function set_transp_ren2(s,id_map){

    var opacity = s/10;

    console.log(id_map);

    isi_r_ren2[id_map] = s;

    let peta_ne = ren2[id_map];

    peta_ne.layer.setStyle({fillOpacity:opacity,opacity :opacity }) 

    if (id_map == 0) {

        d1_awal3 = opacity;

    }

}



function set_transp_ren3(s,id_map){

    var opacity = s/10;

    console.log(id_map);

    isi_r_ren3[id_map] = s;

    let peta_ne = ren3[id_map];

    peta_ne.layer.setStyle({fillOpacity:opacity,opacity :opacity }) 

    if (id_map == 0) {

        d1_awal14 = opacity;

    }else if (id_map == 1) {

        d1_awal23 =opacity

    }else if (id_map == 2) {

        d1_awal13 =opacity

    }else if (id_map == 3) {

        d1_awal21 =opacity

    }

}



function zoomToFeature(e) {

		map.fitBounds(e.target.getBounds());

	}



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







//disclaimer.addTo(map);

function hid_bese() {

    var f = document.getElementById('from_base');

        f.style.display="none";

        var d = document.getElementById('dr_atas');

        d.innerHTML = '<a href="#" onclick="show_bese()" ><img src="<?=base_url('assets/img/arrow_down.png')?>"></a>'

    }



function show_bese() {

        var f = document.getElementById('from_base');

        f.style.display="block";

        var d = document.getElementById('dr_atas');

        d.innerHTML = '<a href="#" onclick="hid_bese()" ><img src="<?=base_url('assets/img/arrow_up.png')?>"></a>'

    }



function hid_admin() {

     

        var f = document.getElementById('from_admin');

        f.style.display="none";

        var d = document.getElementById('dr_atas1');

        d.innerHTML = '<a href="#" onclick="show_admin()" ><img src="<?=base_url('assets/img/arrow_down.png')?>"></a>'

    }

function show_admin() {

        var f = document.getElementById('from_admin');

        f.style.display="block";

        var d = document.getElementById('dr_atas1');

        d.innerHTML = '<a href="#" onclick="hid_admin()" ><img src="<?=base_url('assets/img/arrow_up.png')?>"></a>'

    }

function hid_tematik() {

    var f = document.getElementById('from_tematik');

    f.style.display="none";

    var d = document.getElementById('dr_tem');

    d.innerHTML = '<a href="#" onclick="show_tematik()" ><img src="<?=base_url('assets/img/arrow_down.png')?>"></a>'



     

}



function show_tematik() {

    var f = document.getElementById('from_tematik');

    f.style.display="block";

    var d = document.getElementById('dr_tem');

    d.innerHTML = '<a href="#" onclick="hid_tematik()" ><img src="<?=base_url('assets/img/arrow_up.png')?>"></a>'

}

function hid_rencana() {

    var f = document.getElementById('from_rencana');

    f.style.display="none";

    var d = document.getElementById('dr_ren');

    d.innerHTML = '<a href="#" onclick="show_rencana()" ><img src="<?=base_url('assets/img/arrow_down.png')?>"></a>'



     

}

function show_rencana() {

    var f = document.getElementById('from_rencana');

    f.style.display="block";

    var d = document.getElementById('dr_ren');

    d.innerHTML = '<a href="#" onclick="hid_rencana()" ><img src="<?=base_url('assets/img/arrow_up.png')?>"></a>'

}



function hid_rencana2() {

    var f = document.getElementById('from_rencana2');

    f.style.display="none";

    var d = document.getElementById('dr_ren2');

    d.innerHTML = '<a href="#" onclick="show_rencana2()" ><img src="<?=base_url('assets/img/arrow_down.png')?>"></a>'



     

}

function show_rencana2() {

    var f = document.getElementById('from_rencana2');

    f.style.display="block";

    var d = document.getElementById('dr_ren2');

    d.innerHTML = '<a href="#" onclick="hid_rencana2()" ><img src="<?=base_url('assets/img/arrow_up.png')?>"></a>'

}







function show_renta() {

    var f = document.getElementById('from_renta');

    f.style.display="block";

    var d = document.getElementById('dr_renta');

    d.innerHTML = '<a href="#" onclick="hid_renta()" ><img src="<?=base_url('assets/img/arrow_up.png')?>"></a>'

}

function hid_renta() {

    var f = document.getElementById('from_renta');

    f.style.display="none";

    var d = document.getElementById('dr_renta');

    d.innerHTML = '<a href="#" onclick="show_renta()" ><img src="<?=base_url('assets/img/arrow_down.png')?>"></a>'



     

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



    admin = L.DomUtil.create('div', 'atas');

    admin.innerHTML= '<div class="center"><h6><b>Administrasi</b></h6></div>';

    this._arrow_admin = L.DomUtil.create('div', 'drop');

    this._arrow_admin.id = 'dr_atas1';

    this._arrow_admin.innerHTML = '<a href="#" onclick="show_admin()" ><img src="<?=base_url('assets/img/arrow_down.png')?>"></a>';

    admin.append(this._arrow_admin)

    

    frame_admin = L.DomUtil.create('div', 'box_basemap');

    frame_admin.id = "from_admin"

    frame_admin.innerHTML=base_admin;;

    this._div.append(admin);

    this._div.append(frame_admin);



    tematik = L.DomUtil.create('div', 'atas');

    tematik.innerHTML= '<div class="center"><h6><b>Fisik Alam</b></h6></div>';

    this._div.append(tematik);

    this._arrow_tem = L.DomUtil.create('div', 'drop');

    this._arrow_tem.id = 'dr_tem';

    this._arrow_tem.innerHTML = '<a href="#" onclick="show_tematik()"><img src="<?=base_url('assets/img/arrow_down.png')?>"></a>';

    tematik.append(this._arrow_tem);



    frame_tematik = L.DomUtil.create('div', 'box_basemap');

    frame_tematik.id = "from_tematik";

    frame_tematik.innerHTML = base_tematik;

    this._div.append(frame_tematik);



    rencana = L.DomUtil.create('div', 'atas');

    rencana.innerHTML= '<div class="center"><h6><b>Kependudukan</b></h6></div>';

    this._div.append(rencana);

    this._arrow_ren = L.DomUtil.create('div', 'drop');

    this._arrow_ren.id = 'dr_ren';

    this._arrow_ren.innerHTML = '<a href="#" onclick="show_rencana()" ><img src="<?=base_url('assets/img/arrow_down.png')?>"></a>';

    rencana.append(this._arrow_ren);

    frame_rencana = L.DomUtil.create('div', 'box_basemap');

    frame_rencana.id = "from_rencana";

    frame_rencana.innerHTML = base_ren1;

    this._div.append(frame_rencana);



    rencana2 = L.DomUtil.create('div', 'atas');

    rencana2.innerHTML= '<div class="center"><h6><b>Infrastruktur Kota</b></h6></div>';

    this._div.append(rencana2);

    this._arrow_ren2 = L.DomUtil.create('div', 'drop');

    this._arrow_ren2.id = 'dr_ren2';

    this._arrow_ren2.innerHTML = '<a href="#" onclick="show_rencana2()" ><img src="<?=base_url('assets/img/arrow_down.png')?>"></a>';

    rencana2.append(this._arrow_ren2);

    frame_rencana2 = L.DomUtil.create('div', 'box_basemap');

    frame_rencana2.id = "from_rencana2";

    frame_rencana2.innerHTML = base_ren2;

    this._div.append(frame_rencana2);



    renta = L.DomUtil.create('div', 'atas');

    renta.innerHTML= '<div class="center"><h6><b>Rencana</b></h6></div>';

    this._div.append(renta);

    this._arrow_renta = L.DomUtil.create('div', 'drop');

    this._arrow_renta.id = 'dr_renta';

    this._arrow_renta.innerHTML = '<a href="#" onclick="show_renta()" ><img src="<?=base_url('assets/img/arrow_down.png')?>"></a>';

    renta.append(this._arrow_renta);

    frame_renta = L.DomUtil.create('div', 'box_basemap');

    frame_renta.id = "from_renta";

    frame_renta.innerHTML = base_ren3;

    this._div.append(frame_renta);



    this._div.setAttribute("onmouseleave", "enab()");

    this._div.setAttribute("onmouseover", "temporary_disabled()");

  

    return this._div;



}



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





    const legend_jalan = L.control.Legend({

            position: "bottomleft",

            title : "Legenda Jaringan Jalan",

            collapsed: false,

            symbolWidth: 24,

            opacity: 0.73,

            column: 2,

            legends: [{

                label: "Jalan Nasional",

                type: "polyline",

                color: "#2f124c",

                fillColor: "#2f124c",

                weight: 5,

               

            },{

                label: "Jalan Provinsi",

                type: "polyline",

                color: "#021e75",

                fillColor: "#021e75",

                weight: 3,

               

            },{

                label: "Jalan Kota",

                type: "polyline",

                color: "yellow",

                fillColor: "yellow",

                weight: 2,

               

            },  

            

            {

                label: "Jaringan Kereta Api",

                type: "polyline",

                color: "black",

                fillColor: "black",

                dashArray: [5, 5],

                weight: 3

            } ]

        });

        info.addTo(map);

      

        

   window.onclick = function (e) {

    dialog.remove(map);

}        

   

 lc = L.control

  .locate({

    strings: {

      title: "Show me where I am, yo!"

    }

  })

  .addTo(map);

 

</script



</body>

</html>