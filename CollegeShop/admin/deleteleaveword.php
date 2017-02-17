<?php
include("../data/conn.php");
while(list($name,$value)=each($_POST))
{
   mysqli_query($con,"delete from tb_leaveword where lwid='".$value."'");

}
header("location:lookleaveword.php");
?>