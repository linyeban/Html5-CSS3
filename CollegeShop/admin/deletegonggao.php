<?php
 include("../data/conn.php");
  while(list($name,$value)=each($_POST))
  {
  	echo $value;
    mysqli_query($con,"delete from tb_gonggao where ggid='".$value."'");
  
  }
 header("location:admingonggao.php");  
?>