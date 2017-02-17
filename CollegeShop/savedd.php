<?php
include("data/conn.php");
session_start();
$sql=mysqli_query($con,"select * from tb_user where name='".$_SESSION['username']."'");
//echo $_SESSION['username'];
$info=mysqli_fetch_array($sql);
$uid=$info['uid'];
$dingdanhao=date("YmjHis").$info['uid'];
//echo $dingdanhao;
$spc=$_SESSION['producelist'];
$slc= $_SESSION['quatity'];
$shouhuoren=$_POST['name2'];
$sex=$_POST['sex'];
$dizhi=$_POST['dz'];
$youbian=$_POST['yb'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$shff=$_POST['shff'];
$zfff=$_POST['zfff'];
if(trim($_POST['ly'])=="")
 {
   $leaveword="";
 }
 else
 {
   $leaveword=$_POST['ly'];
 }
 $xiadanren=$_SESSION['username'];
 $time=date("Y-m-j H:i:s");
 $zt="未作任何处理";
 $total=$_SESSION['total'];
 //echo $leaveword;
 $sql="insert into tb_dingdan(uid,dingdanhao,spc,slc,shouhuoren,sex,dizhi,youbian,tel,email,shff,zfff,leaveword,time,xiadanren,zt,total) values ('$uid','$dingdanhao','$spc','$slc','$shouhuoren','$sex','$dizhi','$youbian','$tel','$email','$shff','$zfff','$leaveword','$time','$xiadanren','$zt','$total')";
 mysqli_query($con,$sql); 
 header("location:showdd.php?dingdanhao=$dingdanhao");
?>
