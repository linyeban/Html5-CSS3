<?php  
 foreach($_POST['zts'] as $value)
 	 $zt=$value; '<br/>';
// echo $zt;
include("../data/conn.php");
//$sql3=mysql_query("select * from tb_dingdan where ddid='".$_GET[id]."'",$con);
 $sql3="select * from tb_dingdan where ddid='".$_GET['id']."'";
 $result3=mysqli_query($con,$sql3);
 $info3=mysqli_fetch_array($result3);
 if(trim($info3['zt'])=="未作任何处理")
 {
 $sql="select * from tb_dingdan where ddid='".$_GET['id']."'";
 $result=mysqli_query($con,$sql);
 $info=mysqli_fetch_array($result);
 $array=explode("@",$info['spc']);
 $arraysl=explode("@",$info['slc']);
   for($i=0;$i<count($array);$i++)
    { 
      $id=$array[$i];
      $num=$arraysl[$i];
      mysqli_query($con,"update tb_shangpin set cishu=cishu+'".$num."' ,shuliang=shuliang-'".$num."' where ddid='".$id."'");
    }
  }
  mysqli_query($con,"update tb_dingdan set zt='".$zt."'where ddid='".$_GET['id']."'");
  header("location:lookdd.php");
?>