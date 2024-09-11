 <html>
<head><title>sadad</title>
<body>
    
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
        <script  src="<?=base_url('assets/js/leaflet.ajax.js')?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/@turf/turf@6.3.0/turf.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.2/leaflet.draw.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.2/leaflet.draw.js"></script>

   
    

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
                   
                    
                    
                });

   osm.addTo(map);
   var pola_ruang = new L.GeoJSON.AJAX(["<?=base_url('assets/geojson/pola_ruang2.geojson')?>"],{style:{color:'white'},onEachFeature:luas}); 

   
            polys2 ={"type":"FeatureCollection",
        "features":[{"type":"Feature",
            "properties":{},"geometry":{
                "type":"Polygon",
                "coordinates":[[
                    [109.665696,-6.893009],[109.666811,-6.893605],[109.665824,-6.894628],[109.664794,-6.893988],[109.665696,-6.893009]
                    ]
                ]
                }
                },
                
                ]
            };
        

            var fc1Layer = pola_ruang;
            fc1Layer.addTo(map);
            var fc2Layer = L.geoJson(polys2);
            fc2Layer.addTo(map);


var count1 = 0;
var count2 = 0;
//showIntersects(pola_ruang, polys2);
function luas(f,layer1) {
    count1 += 1;
    polys2.features.forEach(function(layer2){
        count2 += 1;
        var intersection = turf.intersect(f, layer2);
        if(intersection!=undefined){
             var interLayer=L.geoJson(intersection, {color: 'red',onEachFeature:luas1}).addTo(map);
            

             function luas1(f1,l1) {
                var latlngss = l1.getLatLngs();
                var seeArea = L.GeometryUtil.geodesicArea(latlngss[0]);
                var kode = f.properties['NAMOBJ'];
                console.log(kode);
                console.log(seeArea)
             }
         }
    });
};



/*fc1 and fc2 have features collections*/
function showIntersects(fc1, fc2){
    fc1.features.forEach(function(layer1){
        count1 += 1;
        fc2.features.forEach(function(layer2){
            count2 += 1;
            var intersection = turf.intersect(layer1, layer2);
            if(intersection!=undefined){
                var interLayer=L.geoJson(intersection, {color: 'red',}).addTo(map); 
            }
        });
    });
}
</script>
        </body>
        </html>