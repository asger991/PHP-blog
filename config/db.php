<?php
  // Create Connection
  $conn = mysqli_connect('localhost', 'root', 'root', 'phpblog');

  // Check Connection
  if(mysqli_connect_errno()){
    // Failed to connect
    echo 'Failed to connect to MySQL '. mysqli_connect_errno();
  }
?>
