<?php 
require "conn.php";
 $flag[]="";
 $flag11[]="";
 $result=array();
 $result11=array();
$username=$_POST["user_name"];

$job='';
$result1 = mysqli_query($conn,"SELECT * FROM registration where email like '$username' ");

if($result1->num_rows > 0){
    $row = mysqli_fetch_assoc($result1);
    $email=$row['email'] ; 
   
    $query1= mysqli_query($conn,"SELECT * FROM notify3 where email like '$email' ");
    if($query1)
    {
    while($row2=mysqli_fetch_array($query1)){
    
   $job=$row2['2'];

    }}

    
   $query2= mysqli_query($conn,"SELECT * FROM jobs where title like '$job' ");
   if($query2)
   {
   while($row3=mysqli_fetch_array($query2)){

       $flag["companyjob"]=$row3['1'];
       $flag["title"]=$row3['2'];
       $flag["path"]=$row3['12'];
       array_push($result,$flag);
  
   }}

   
}
echo json_encode($result);   


  
?>