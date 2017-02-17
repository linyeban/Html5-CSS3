<?php
include("../data/conn.php");
while(list($name,$value)=each($_POST))
  {
  	echo $value;
  	mysqli_query($con,"delete from tb_dingdan where uid=".$value."");
    mysqli_query($con,"delete from tb_user where uid='".$value."'");
// 	mysqli_query($con,"delete from tb_pingjia where userid=".$value."");
// 	mysqli_query($con,"delete from tb_leaveword where userid=".$value."");
  }
//header("location:edituser.php");
?>