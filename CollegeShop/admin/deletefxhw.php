<?php
 include("../data/conn.php");
 while(list($name,$value)=each($_POST))
  {	
  	//echo $value;
  	mysqli_query($con,"delete from tb_dingdanmingxi where ddmxid='".$value."'");
  	mysqli_query($con,"delete from tb_dingdan where ddid='".$value."'");
  	mysqli_query($con,"delete from tb_shangpin where spid='".$value."'");
  	
//    $sql=mysqli_query($con,"select tupian from tb_shangpin where spid='".$value."'");
// 	  $info=mysqli_fetch_array($sql);
// 	  $sql1=mysqli_query($con,"select * from tb_dingdan ");
// 	  while($info1=mysqli_fetch_array($sql1))
// 	  {  $id1=$info1['spid'];
// 	     $array=explode("@",$info1['spc']);
// 	     for($i=0;$i<count($array);$i++){
// 	        if($array[$i]==$value)
// 			 {
// 			   mysqli_query($con,"delete from tb_dingdan where spid='".$id1."'");
// 			 }
// 	      }
// 	  }
//       mysqli_query($con,"delete from tb_shangpin where spid='".$value."'");
// 	  mysqli_query($con,"delete from tb_pingjia where pjid='".$value."'");
  }
 header("location:editgoods.php"); 
?>