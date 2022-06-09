<?php
include("connection.php");
error_reporting(0);
if(!empty($_POST['username'])){
   if(!empty($_POST['password'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT*from admins where username='$username' && password='$password'";
    $result=mysqli_query($connection,$sql);
    if(mysqli_num_rows($result)>0){
      $_SESSION["name"]=$username;
       header("Location:Final.php");
    }else{
      header("location:adminLoginForm.php?alert=invalid username and password !");
      exit(0);
    }
   }else{
      header("location:adminLoginForm.php?alert=password is required !");
      exit(0);
  }
  }else{
      header("location:adminLoginForm.php?alert=username is required !");
      exit(0);
  }
  ?>