<?php
error_reporting(0);
include("connection.php");
$Name=$_POST["Name"];
$insert="INSERT INTO VotedName(Name) 
Value('$Name')";
 $h=mysqli_query($connection,$insert);
    if($h==true){
        header("location:Voting.html");
    }else{
        echo "data is not inserted".mysqli_error($connection);
    }
?>