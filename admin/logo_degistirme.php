<?php  include('../config.php'); ?>
<?php

  if (isset($_POST['logodegistir'])) {
  // Get image name
        $logom = $_FILES['logom']['name'];
        // image file directory
        $target = "../style/images/" . basename($logom);
        if (!move_uploaded_file($_FILES['logom']['tmp_name'], $target)) {
          array_push($errors, "Failed to upload image. Please check file settings for your server");
        }
        $query = "UPDATE logolar SET logom='$logom'WHERE id = 1";   
        if(mysqli_query($conn, $query)){ 
           $msg = "Image uploaded and saved in the Database"; }
    
  }
?>