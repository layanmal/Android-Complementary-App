<?php
require "conn.php";
$username=$_POST["user_name"];
$password=$_POST["password"];


$result = mysqli_query($conn,"SELECT * FROM registration where email like '$username' and password like '$password'");
$row = mysqli_fetch_assoc($result);

if($result->num_rows > 0){
     echo "Success";
 }
 else {
     echo"failed to login";
 }


?>