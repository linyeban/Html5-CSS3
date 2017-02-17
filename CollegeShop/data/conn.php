<?php
     header('Content-type:text/html;charset=utf-8');
     $con = mysqli_connect('127.0.0.1',
     		'root', 'root') or
     		die('连接失败' . mysqli_error($con));
     mysqli_query($con, 'SET NAMES "utf8"');
     mysqli_select_db($con, 'collegeshop') or die('出现错误');
    
//      $conn=mysql_connect("localhost","root","root") or die("���ݿ���������Ӵ���".mysql_error());
//      mysql_select_db("db_database21",$conn) or die("���ݿ���ʴ���".mysql_error());
//      mysql_query("set character set gb2312");
//      mysql_query("set names gb2312");
?>
