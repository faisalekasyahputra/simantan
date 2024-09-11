 
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
        <link rel="stylesheet" href="<?=base_url('assets/css/Control.FullScreen1.css')?>" media="screen">
        <script src="<?=base_url('assets/js/Control.FullScreen.js')?>"></script>    
        <script src="https://cdn.jsdelivr.net/npm/@turf/turf@6.3.0/turf.min.js"></script>
        <script src="<?=base_url('assets/draw/Leaflet.draw.js')?>"></script>
        <script src="<?=base_url('assets/draw/Leaflet.Draw.Event.js')?>"></script>

        <link rel="stylesheet" href="<?=base_url('assets/draw/leaflet.draw1.css')?>" media="screen">
        <script src="<?=base_url('assets/draw/Toolbar.js')?>"></script>
        <script src="<?=base_url('assets/draw/Tooltip.js')?>"></script>

        <script src="<?=base_url('assets/draw/GeometryUtil.js')?>"></script>
        <script src="<?=base_url('assets/draw/LatLngUtil.js')?>"></script>
        <script src="<?=base_url('assets/draw/LineUtil.Intersect.js')?>"></script>
        <script src="<?=base_url('assets/draw/Polygon.Intersect.js')?>"></script>
        <script src="<?=base_url('assets/draw/Polyline.Intersect.js')?>"></script>
        <script src="<?=base_url('assets/draw/TouchEvents.js')?>"></script>

        <script src="<?=base_url('assets/draw/DrawToolbar.js')?>"></script>
        <script src="<?=base_url('assets/draw/Draw.Feature.js')?>"></script>
        <script src="<?=base_url('assets/draw/Draw.SimpleShape.js')?>"></script>
        <script src="<?=base_url('assets/draw/Draw.Polyline.js')?>"></script>
        <script src="<?=base_url('assets/draw/Draw.Marker.js')?>"></script>
        <script src="<?=base_url('assets/draw/Draw.Circle.js')?>"></script>
        <script src="<?=base_url('assets/draw/Draw.CircleMarker.js')?>"></script>
        <script src="<?=base_url('assets/draw/Draw.Polygon.js')?>"></script>
        <script src="<?=base_url('assets/draw/Draw.Rectangle.js')?>"></script>

        <script src="<?=base_url('assets/draw/EditToolbar.js')?>"></script>
        <script src="<?=base_url('assets/draw/EditToolbar.Edit.js')?>"></script>
        <script src="<?=base_url('assets/draw/EditToolbar.Delete.js')?>"></script>
        <script src="<?=base_url('assets/draw/Control.Draw.js')?>"></script>
    
       
        <script src="<?=base_url('assets/draw/Edit.Poly.js')?>"></script>
        <script src="<?=base_url('assets/draw/Edit.SimpleShape.js')?>"></script>
        <script src="<?=base_url('assets/draw/Edit.Rectangle.js')?>"></script>
        <script src="<?=base_url('assets/draw/Edit.Marker.js')?>"></script>
        <script src="<?=base_url('assets/draw/Edit.CircleMarker.js')?>"></script>
        <script src="<?=base_url('assets/draw/Edit.Circle.js')?>"></script>
        
    <link rel="stylesheet" href="<?=base_url('assets/css/L.Control.GeoapifyAddressSearch1.css')?>" media="screen">
    <script src="<?=base_url('assets/js/L.Control.GeoapifyAddressSearch.js')?>"></script>
    <script  src="<?=base_url('assets/js/leaflet.ajax.js')?>"></script>
   
    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('assets/images/favicon1.png')?>">
    <!-- Custom CSS -->
    <link href="<?=base_url('assets/css/chartist.min.css')?>" rel="stylesheet">
    <!-- Custom CSS -->
    

<h4 class="card-title text-center">PETA Lokasi Permohonan</h4>
<div class="card form-pendaftaran">
    <div id="map" class="card form-pendaftaran" style="width: 100%; height: 700px;"></div>
    <div id='result' value='' style="display: none;"><?php echo $data[0]->geojson; ?></div>
    <input type="hidden" placeholder="" name="geo" id="geo" class="form-control ps-0 form-control-line">
</div>

<script>
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
   
   var poly1 =L.geoJson( {"type":"FeatureCollection","features":[{"type":"Feature","properties":{},"geometry":{"type":"Polygon","coordinates":[[[109.663467,-6.883482],[109.668446,-6.88655],[109.666042,-6.894559],[109.655914,-6.89473],[109.655571,-6.885016],[109.663467,-6.883482]]]}}]});
   poly1.addTo(map);
   
  var poly2 = L.geoJson({"type":"FeatureCollection","features":[{"type":"Feature","properties":{},"geometry":{"type":"Polygon","coordinates":[[[109.661657,-6.892906],[109.665004,-6.889157],[109.670324,-6.891117],[109.670496,-6.894866],[109.665776,-6.898615],[109.661657,-6.892906]]]}}]});
  poly2.addTo(map);
 var c = turf.lineIntersect(poly1.toGeoJSON(), poly2.toGeoJSON());
 var coords = c.features[0].geometry.coordinates;

 console.log(coords);
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
   
   var marker = null;
   var myAPIKey = "d797ff206eda4d1a804ab31d002f0f41";
   
   const addressSearchControl = L.control.addressSearch(myAPIKey, {
     position: 'topright',
     resultCallback: (address) => {
       if (marker) {
         marker.remove();
       }
       
       if (!address) {
         return;
       }
   
       marker = L.marker([address.lat, address.lon]).addTo(map);
       if (address.bbox && address.bbox.lat1 !== address.bbox.lat2 && address.bbox.lon1 !== address.bbox.lon2) {
         map.fitBounds([[address.bbox.lat1, address.bbox.lon1], [address.bbox.lat2, address.bbox.lon2]], { padding: [100, 100] })
       } else {
         map.setView([address.lat, address.lon], 15);
       }
     },
     suggestionsCallback: (suggestions) => {
       console.log(suggestions);
     }
   });
   
   map.addControl(addressSearchControl);
   
   L.control.zoom({ position: 'topright' });
   
   L.control.layers({
           'google hybrid': osm.addTo(map),
           "osm": L.tileLayer(osmUrl, { maxZoom: 18, attribution: osmAttrib })},
            { 'drawlayer': drawnItems }, 
            { position: 'topright', collapsed: false }).addTo(map);
   
  
  
  
            <?php if ($data[0]->geojson != null || ($data[0]->geojson !='')) { ?>
            var pengajuan = L.geoJson(<?php echo $data[0]->geojson; ?>)   
        <?php } ?>
     
  
    map.on('draw:created', function (event) {
        var type = event.layerType;
        var layer = event.layer;
        var lt = layer.getLatLngs();
        
        all_latlngs = layer._latlngs[0];
        area = L.GeometryUtil.geodesicArea(all_latlngs).toFixed(4);
     
        pola_ruang.eachLayer(function (f,l){
            var s = f.feature.properties['NAMOBJ'];
            var a=f.toGeoJSON();
     
            drawnItems.addLayer(layer);
            var b = drawnItems.toGeoJSON();
            var intersects = turf.intersectPolyByPolyFC(b, a);
            
              
                

               
        
        })
        //pengajuan.addTo(map);



       
     
    
      }); 



    var pola_ruang = new L.GeoJSON.AJAX(["<?=base_url('assets/geojson/pola_ruang2.geojson')?>"],{style:base_awal });  
    function base_awal(feature) { 
            var warna = feature.properties['NAMOBJ'];
            return {weight: '1',
                color : 'white',
                fillopacity : 0.5,
                color: warna1(warna),};
    };

    <?php
        $w_legenda = $this->Buka_peta->fetch_record('tb_legenda',14,'id_map');
        $kembali_warna="";
        foreach ($w_legenda as $w) {
            $kembali_warna = $kembali_warna."d == '".$w->isi."' ? '".$w->warna."':";
        }
        $kembali_warna = $kembali_warna."'#9e5870'";
    ?>
    function warna1(d) {
        return <?=$kembali_warna?>;
    }

    //pola_ruang.addTo(map);
</script>