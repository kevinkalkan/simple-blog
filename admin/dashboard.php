<?php  include('../config.php'); ?>
	<?php include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
	<?php include(ROOT_PATH . '/admin/includes/head_section.php'); ?>
	
	<title>Admin | Dashboard</title>
</head>
<body>

	
	<div class="navbar">
	<div class="logo_div">
		<div class="logo">
		<a href="../index.php"><h1>Proje</h1></a>
	</div>
	</div>
	<ul>
	  <li><a class="active" href="../index.php">Home</a></li>
	  <li><a href="#news">News</a></li>
	  <li><a href="#contact">Contact</a></li>
	  <li><a href="#about">About</a></li>
	</ul>
</div>
	<?php include('./includes/navbar.php'); ?>
	<div class="container dashboard">
		<h1>Welcome</h1>
		<div class="stats">
			<a href="logodegistir.php" class="first">
				<span>Logo Değiştir</span> <br>
				
			</a>
			<a href="posts.php">
				<span>43</span> <br>
				<span>Published posts</span>
			</a>
			<a>
				<span>43</span> <br>
				<span>Published comments</span>
			</a>
		</div>
		<br><br><br>
		<div class="buttons">
			<a href="users.php">Add Users</a>
			<a href="posts.php">Add Posts</a>
		</div>
	</div>
</body>
</html>