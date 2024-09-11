<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Monsterlite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Monster admin lite design, Monster admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Monster Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Dashboard Permohonan</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
    <script  src="<?=base_url('assets/js/leaflet.ajax.js')?>"></script>
    <link rel="stylesheet" href="<?=base_url('assets/css/Control.FullScreen1.css')?>" media="screen">
    <script src="<?=base_url('assets/js/Control.FullScreen.js')?>"></script>    
    <script src="<?=base_url('assets/js/cari_daftar.js')?>"></script>
	<link rel="stylesheet" href="https://rawgit.com/k4r573n/leaflet-control-osm-geocoder/master/Control.OSMGeocoder.css" />
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
    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('assets/images/favicon1.png')?>">
    <!-- Custom CSS -->
    <link href="<?=base_url('assets/css/chartist.min.css')?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?=base_url('assets/css/style.min1.css')?>" rel="stylesheet">
   

    
   


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    
<![endif]-->
<style>
      html,
      body {
        height: 100%;
      }
      .overlay {
        position: absolute;
        display: none;
        top: 100px;
        right: 0;
        bottom: 0;
        left: 80px;
        background: rgba(255, 255, 255, 0.5);
        z-index: 2;
      }
      .overlay2 {
        position: absolute;
        overflow-y: scroll;
        scrollbar-color: rebeccapurple green;
        display: none;
        top: 300px;
        right: 0;
        bottom: 0;
        left: 80px;
        background: rgba(255, 255, 255, 0.5);
        z-index: 2;
      }
      .popup {
        position: absolute;
        width: 60%;
        height: 60%;
        top: 0%;
        left: 5%;
        text-align: left;
        background: white;
      }
     
      .popup h3 {
        font-size: 15px;
        height: 50px;
        line-height: 50px;
        color: black;
      }
      .CloseIcon{
        cursor: pointer;
      }
      .center{
        color: #000;
      }
      
    </style>