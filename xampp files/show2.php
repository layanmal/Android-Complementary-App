<?php 
require "conn.php";
 $flag[]="";
 
 $result=array();
 $result11=array();
$title=$_POST["user_name"];
$company=$_POST["password"];
//$email="rania.kaid@hotmail.com";
//$company="RedCrow";
//$title="IT Developer";
$par1="";
$par2="";
$query=mysqli_query($conn,"SELECT * FROM announcment where title like '$title' and company like '$company' ");
if($query)
{
while($row=mysqli_fetch_array($query)){

$flag["id"]=$row['0'];
$flag["title"]=$row['1'];
$flag["company"]=$row['2'];
$flag["type"]=$row['3'];
//$flag["pic"]=base64_encode($row['4']);
 $flag["country"]=$row['5'];
 $flag["about"]=$row['7'];
 $flag["goal"]=$row['8'];
 //$flag["logo"]=base64_encode($row['9']);
 $flag["date"]=$row['10'];
 $flag["sponsors"]=$row['11'];
  //$flag["sponsorsimage"]=base64_encode($row['12']);
 $flag["organizers"]=$row['13'];
 //$flag["orgimage"]=base64_encode($row['14']);
 $flag["website"]=$row['15'];
 $flag["email"]=$row['16'];
 $flag["telephone"]=$row['17'];
//$flag["typepic"]=base64_encode($row['18']);
$flag["path"]=$row['19'];

//array_push($result["data"],$flag);

array_push($result,$flag);
}
echo json_encode($result);    



}
mysqli_close($conn);
?>