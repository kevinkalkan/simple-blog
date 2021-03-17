<?php include('logo_degistirme.php'); ?>
<?php include(ROOT_PATH . '/admin/includes/head_section.php'); ?>
<?php include(ROOT_PATH . '/admin/includes/navbar.php'); ?>

<?php 
	$results = mysqli_query($conn, "SELECT * FROM logolar");
	$logolar = mysqli_fetch_all($results,MYSQLI_ASSOC);
?>
<body>
	<div class="container content">
		<?php include(ROOT_PATH . '/admin/includes/menu.php') ?>		
	
		<h1 class="page-title">Logo Değiştirme</h1>
		<form method="post" enctype="multipart/form-data" action="logodegistir.php">
			 <div class="text-center img-placeholder"  onClick="triggerClick()">
                <h4>Update image</h4>
              </div>
            <img src="../style/images/logo.png" onClick="triggerClick()" id="profileDisplay">
            <input type="file" name="logom" onChange="displayImage(this)" id="logom" class="form-control" style="display: none;">
			<button type="submit" name="logodegistir">Değiştir</button>
		</form>
	</div>

</body>
<script src="script.js"></script>