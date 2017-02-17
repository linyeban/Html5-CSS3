<?php
include("../data/conn.php");
if(is_numeric($_POST['shichangjia'])==false || is_numeric($_POST['huiyuanjia'])==false)
 {
   echo "<script>alert('价格只能为数字！')</script>";
   exit;
 }
if(is_numeric($_POST['shuliang'])==false)
 {
   echo "<script>alert('数量只能为数字！')</script>";
   exit;
 }
$mingcheng=$_POST['mingcheng'];
$shichangjia=$_POST['shichangjia'];
$huiyuanjia=$_POST['huiyuanjia'];
$typeid=$_POST['typeid'];
$xinghao=$_POST['xinghao'];
$pinpai=$_POST['pinpai'];
$shuliang=$_POST['shuliang'];
$tupian=$_POST['tupian'];//图片文件域
//echo "<script>alert($upfile);history.back();</script>";

$jianjie=$_POST['jianjie'];
$sql="insert into tb_shangpin(mingcheng,jianjie,xinghao,tupian,typeid,shichangjia,huiyuanjia,pinpai,shuliang,cishu)values('$mingcheng','$jianjie','$xinghao','$tupian','$typeid','$shichangjia','$huiyuanjia','$pinpai','$shuliang','0')";
mysqli_query($con,$sql);
echo "<script> alert('商品".$mingcheng."添加成功!')</script>";
header("location:editgoods.php");
mysqli_close($con);
?>