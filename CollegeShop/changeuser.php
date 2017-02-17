<?php
include("data/conn.php");
session_start();
$email=$_POST['email'];
$tel=$_POST['tel'];
$qq=$_POST['qq'];
mysqli_query($con,"update tb_user set email='$email',tel='$tel',qq='$qq' WHERE name ='" .$_SESSION['username']."'");
echo "<script>alert('修改成功，返回用户中心');</script>";
echo "<meta http-equiv='Refresh' content='0;URL=usercenter.php'>";//content后面的0就是表示0秒后跳转
//header("location:usercenter.php");
?>