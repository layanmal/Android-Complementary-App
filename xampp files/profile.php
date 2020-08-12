<?php

require "conn.php";
 $flag[]="";
 
 $result=array();
 $count=0;
$email=$_POST["user_name"];
//$email="rania.kaid@hotmail.com";


$result1 = mysqli_query($conn,"SELECT * FROM registration where email like '$email' ");

if($result1->num_rows > 0){
   while( $row = mysqli_fetch_assoc($result1)){
   $id=$row['id'];

   $result2 = mysqli_query($conn,"SELECT * FROM followers where idname like '$id' ");

   if($result2->num_rows > 0){
    while($row2 = mysqli_fetch_assoc($result2)){
        $count++;
    }}
    $fname=$row['firstname'];
    $lname=$row['lastname'];
    $country=$row['country'];
    $city=$row['city'];
    $flag["email"]=$row['email'];
    $flag['name']=$fname.' '.$lname;
    $flag["location"]=$country.','.$city;
    $flag['bio']=$row['bio'];
    $flag["path"]=$row['path'];
    $flag["count"]=$count;
    array_push($result,$flag);
   
   
    }}

    echo json_encode($result);   


?>