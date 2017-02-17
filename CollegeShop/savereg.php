<?php
session_start ();
include("data/conn.php");
$name = $_POST['username'];
$pwd = $_POST['p1'] ;
$email = $_POST ['email'];
$tel = $_POST ['tel'];
$qq = $_POST ['qq'];
$sql = "select * from tb_user where name='" . $name . "'";
$result = mysqli_query($con, $sql);
$info = mysqli_fetch_array ( $result );
//$info= mysqli_num_rows($result);
if ($info == true) {
		echo "<script>alert('该用户名已经存在!');history.back();</script>";
	 	exit ();
	 } else {
	 	$sql = "insert into tb_user (name,pwd,email,tel,qq) values ('$name','$pwd','$email','$tel','$qq')";
	 	$result = $con->query($sql);//返回true或false
	 	$_SESSION["username"]=$name;
	 	//echo $_SESSION["username"];
	 	$producelist="";
	 	$_SESSION["producelist"]=$producelist;
	 	$quatity="";
	 	$_SESSION["quatity"]=$quatity;
	 	
	 	if (!$result)
	 		die("'<p>保存失败:'.$con->error'</p>'");
	 		echo "<script>alert('恭喜，注册成功!');window.location='login.php';</script>";
	 }
	 mysqli_free_result($result);
	 mysqli_close($con);
?>
