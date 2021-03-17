
<?php
$conn = mysqli_connect("localhost", "root", "", "projem");
 $results = mysqli_query($conn, "SELECT * FROM logolar");
  $logolar = mysqli_fetch_all($results, MYSQLI_ASSOC);
?>
<div class="header">
	<div class="logo">
		<a href="<?php echo BASE_URL .'admin/dashboard.php' ?>">
			<h1>Admin Paneli</h1>
			<?php foreach ($logolar as $logo): ?>
			<img src="<?php echo '../style/images/' . $logo['logom'] ?>" width="90" height="90" alt="">
			<?php endforeach; ?> 
		</a>
	</div>
	
	<div class="user-info">
		<span><?php echo $_SESSION['user']['username'] ?></span> &nbsp; &nbsp; 
		<a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout-btn">logout</a>
	</div>
</div>