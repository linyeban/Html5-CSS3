<?php
include("../data/conn.php");
while(list($name,$value)=each($_POST))
 {
     $id=$value;
     mysqli_query($con,"delete from tb_pingjia where pjid=".$id."");
 
 }
print "<script>alert(\"你好\");</script>";
header("location:editpinglun.php");
?>