<?php
session_start();
$title=$_POST['title'];
$content=$_POST['content'];
$time=date("Y-m-j");
include("data/conn.php");

$sql=mysqli_query($con,"select * from tb_user where name='".$_SESSION['username']."'");
$info=mysqli_fetch_array($sql);
$userid=$info['uid'];
mysqli_query($con,"insert into tb_leaveword (title,content,time,userid) values ('$title','$content','$time','$userid')");
header("location:userleaveword.php");
?>