<?php 
  session_start(); 

if(isset($_POST['boyname'])){
  $_SESSION['status'] = "active";
}
if(isset($_POST['girlname'])){
  $_SESSION['status'] = "active";
}

?>
