<?php 
require 'conn.php';

$username=$_POST["first_name"];
echo $username;
$lastname=$_POST["last_name"];
$email=$_POST["email_name"];
$password=$_POST["password"];
echo $password;
$confirm=$_POST["confirm"];

if($confirm === $password){
$res="INSERT INTO registration(firstname,lastname,password,email)VALUES('$username','$lastname','$password','$email')";
$result=mysqli_query($conn,$res);
if($result){
    
     echo"hello khara";
}
else{
     echo"no hello for you";
}


 }
?>