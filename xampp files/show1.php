<?php 
require "conn.php";
 $flag[]="";
 
 $result=array();
 $result11=array();
$company=$_POST["user_name"];
$title=$_POST["password"];
//$email="rania.kaid@hotmail.com";
//$company="RedCrow";
//$title="IT Developer";
$par1="";
$par2="";
$query2= mysqli_query($conn,"SELECT * FROM jobs where company like '$company' and title like '$title' ");
if($query2->num_rows > 0)
{
while($row=mysqli_fetch_array($query2)){
$day=$row['day'];
$month=$row['month'];
$year=$row['year'];
$country=$row['country'];
$city=$row['city'];
$descriptions=$row['9'];

//par2.=  nl2br ("$descriptions");
$req=$row['10'];
//$par1.=  nl2br ("$req");
    $flag["id"]=$row['0'];
    $flag["company"]=$row['1'];
    $flag["title"]=$row['2'];
    $flag['date']=$day."-".$month."-".$year;
    $flag["job"]=$row['6'];
    $flag["country"]=$country.",".$city;
    $flag["description"]=$descriptions;
   
    $flag["req"]=$req;
    $flag["path"]=$row['12'];
    array_push($result,$flag);
     
    

    }}

echo json_encode($result);  
    ?>