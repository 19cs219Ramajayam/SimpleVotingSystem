<?php
error_reporting(0);
if(!isset($_get['name'])){
  unset($_['name']);
}
header("location:adminLoginForm.php");
?>