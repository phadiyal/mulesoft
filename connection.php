<?php 
$connection=new mysqli("localhost","root","","project");
  if($connection->connect_errno)
  {
    echo $connection->connect_error;
    exit;
  } 
  ?>