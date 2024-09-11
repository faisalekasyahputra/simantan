<!DOCTYPE html>
<html lang="en">
<head>
		<?php include "layout_admin/head.php"?>
		
</head>

<body class="adminbody" >
<!-- style="background-image: url('<?=base_url("assets/images/batik.png")?>');" -->
<div id="main">

	<!-- top bar navigation -->
	<?php include "layout_admin/header.php"?>
		
	<!-- End Navigation -->
	
 
	<!-- Left Sidebar -->
	<?php include "layout_admin/side.php"?>
	<!-- End Sidebar -->


    <?=$content?>
	<!-- END content-page -->
    
	<?php include "layout_admin/footer.php"?>
<!-- END Java Script for this page -->

</body>
</html>