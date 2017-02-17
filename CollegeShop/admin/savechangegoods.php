<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
include("../data/conn.php");
$mingcheng=$_POST['mingcheng'];
$shichangjia=$_POST['shichangjia'];
$huiyuanjia=$_POST['huiyuanjia'];
$xinghao=$_POST['xinghao'];
$shuliang=$_POST['shuliang'];
$tupian=$_POST['tupian'];
$jianjie=$_POST['jianjie'];

//echo $_GET['id'];
$sql=mysqli_query($con,"select * from tb_shangpin where spid=".$_GET['id']."");
//$info=mysqli_fetch_array($sql);
mysqli_query($con,"update tb_shangpin set mingcheng='$mingcheng',jianjie='$jianjie',xinghao='$xinghao',
		tupian='$tupian',shichangjia='$shichangjia',huiyuanjia='$huiyuanjia',shuliang='$shuliang' where spid=".$_GET['id']."");
//echo "<script>alert('保存".$_GET['id']."成功');</script>";
 echo "<script>alert('保存".$mingcheng."成功');history.back();;</script>";
 header("location:editgoods.php");
?>