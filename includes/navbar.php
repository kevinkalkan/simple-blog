<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<?php
$results = mysqli_query($conn, "SELECT * FROM logolar");
  $logolar = mysqli_fetch_all($results, MYSQLI_ASSOC);
 $sonuclar = mysqli_query($conn, "SELECT * FROM topics");
 $topics = mysqli_fetch_all($sonuclar, MYSQLI_ASSOC);
 ?>
<div class="navbar">
	<div class="logo_div">
		<div class="logo">
		<a href="index.php"><h1>Proje</h1></a>
			<?php foreach ($logolar as $logo): ?>
			<img src="<?php echo '../style/images/' . $logo['logom'] ?>" width="90" height="90" alt="">
			<?php endforeach; ?> 
	</div>
	</div>
	<ul>
	  <li><a class="active" href="index.php">Home</a></li>
	 <?php foreach ($topics as $topic): ?>
	<li><a href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $topic['id'] ?>">
		<?php echo $topic['name']; ?>
		</a> </li>
	<?php endforeach ?>
	  <?php if (!isset($_SESSION['user'])): ?>
	  	<li><a href="login.php">Admin Girişi</a></li>
	  	<?php endif ?>
	   <?php if (isset($_SESSION['user'])): ?>
	  	<li><a href="./admin/dashboard.php">Admin Paneli</a></li>
	  	<?php endif ?>
	</ul>
</div>