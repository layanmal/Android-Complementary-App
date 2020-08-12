<?php 
require "conn.php";
 $flag[]="";
 
 $result=array();
 $result11=array();
$email=$_POST["user_name"];
//$email="rania.kaid@hotmail.com";


$query2= mysqli_query($conn,"SELECT * FROM registration where email like '$email' ");
if($query2->num_rows > 0)
{
while($row2=mysqli_fetch_array($query2)){

 $query1= mysqli_query($conn,"SELECT * FROM notify1 where email like '$email' ");
    if($query1->num_rows > 0)
    {
    while($row1=mysqli_fetch_array($query1)){
    
        $flag["company"]=$row1['3'];
        $flag["user"]=$row1['1'];
        $flag["path"]=$row2['9'];
        array_push($result,$flag);

    }}
}}
echo json_encode($result);  
    ?>