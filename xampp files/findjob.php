<?php  
require "conn.php";
$flag[]="";
$result=array();
$query=mysqli_query($conn,"SELECT * FROM jobs");
if($query)
{
while($row=mysqli_fetch_array($query)){

$flag["id"]=$row['0'];
$flag["company"]=$row['1'];
$flag["title"]=$row['2'];

$flag["job"]=$row['6'];
$flag["country"]=$row['7'];

$flag["path"]=$row['12'];
array_push($result,$flag);
}
echo json_encode($result);    

}
mysqli_close($conn);
?>