<?php
include("data/conn.php");
// $sql="select count(*) as total from tb_shangpin where spid ";
$sql="select * from tb_shangpin where spid ";
$result=mysqli_query($con,$sql);
// $info=mysqli_fetch_array($result);
// $total=$info['total'];

$index=0;
$showus=array();
while ($info = mysqli_fetch_assoc($result)){

	$showus[$index]=$info;
	$index++;
	//echo $info['mingcheng'];
}
 echo  json_encode($showus);
?>