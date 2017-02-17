<?php
 include("../data/conn.php");
 $title=$_POST['title'];
 $content=$_POST['content'];
 $time=date("Y-m-j");
 mysqli_query($con,"insert into tb_gonggao (title,content,time) values ('$title','$content','$time')");
 echo "<script>alert('公告添加成功!');history.back();</script>";
?>