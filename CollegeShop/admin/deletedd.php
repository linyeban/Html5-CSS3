<?php
  include("../data/conn.php");
  echo $_POST;
  while(list($value,$name)=each($_POST))
   {  
     mysqli_query($con,"delete from tb_dingdan where ddid='".$value."'");
     echo $value;
   }
 header("location:lookdd.php");
?>