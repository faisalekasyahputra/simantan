
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
								<div class="card-header">
									<h3><i class="fa fa-table"></i> <?=$jdl_hal?></h3>
									Berisikan daftar pemohon KRK
								</div>
									
								<div class="card-body">
									<div class="table-responsive">
									<div id="map" class="img-thumbnail" style="width: 100%; height: 500px;">
									</div>
                                    
                                   
                                        
            
              
                                       
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
        <?php foreach ($batas as $b) {?>
            var batas = L.geoJson(<?php echo $b->batas; ?>,{style:base_awal,onEachFeature:label_kecamatan}).addTo(map);   
        <?php } ?>
        function base_awal(feature) {
        
        return {
            weight: '2',
            color : 'white',
            fillopacity : 0,
            fillOpacity : 0,
            fillcolor : 'transparent',
        };}
        function label_kecamatan(feature, layer){
            layer.bindTooltip(feature.properties['KECAMATAN'], {permanent: true, direction: "center", className: "label_kec"});
        }
        var drawnItems = new L.FeatureGroup();
        map.addLayer(drawnItems);
        L.control.layers({
        'google hybrid': osm.addTo(map),
        "osm": L.tileLayer(osmUrl, { maxZoom: 18, attribution: osmAttrib })},
         { 'drawlayer': drawnItems }, 
         { position: 'topright', collapsed: false }).addTo(map);
         <?php 
         if ($data != null) {
            foreach ($data as $d) {
                if ($d->geojson != null || ($d->geojson !='')) { 
                    $has= $d->geojson;             
                    $kal = strpos($has, "properties") +13;
                    $awal= substr($has,0,$kal);
                    $tengah = '"id":"'.$d->id.'","pemilik":"'.$d->nama.'"';
                    $geo = $awal.$tengah.substr($has,$kal); ?>
                    var dibuat = L.geoJson(<?php echo $geo; ?>,{style:{fillopacity:1,color:'blue',weight:3},onEachFeature:popUp}).addTo(map);   
        <?php }
        }
     } ?>

        
        function popUp(f,l) {
            var out = [];
            out.length = 0;
            out.length = 0;
            l.bringToFront();
            var a = "<?=base_url('PermohonanKRK/detail_permohonan/')?>"+l.feature.properties['id'];
            out.push('Nomor  : '+l.feature.properties['id']);
            out.push('Pemilik : '+l.feature.properties['pemilik']);
            out.push("<center><a href="+a+" >"+'Lihat detail Permohonan'+"</a></center>");
            l.bindPopup( out.join("<br />"));   
        }

       
    
    
    
    </script>