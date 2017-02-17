<?php
include ("data/conn.php");
$username = $_POST ['username'];
$userpwd = $_POST ['userpwd'];
$yz = $_POST ['yz'];
$num = $_POST ['num'];
if (strval ( $yz ) != strval ( $num )) { // 判断用户输入的验证码与系统记录的验证码是否相同
	echo "<script>alert('验证码输入错误!');history.go(-1);</script>";
	exit ();
}
class chkinput { // 定义密码验证类
	var $name;
	var $pwd;
	// 用构造函数对数据成员进行初始化
	function chkinput($x, $y) {
		$this->name = $x;
		$this->pwd = $y;
	}
	function checkinput() { // 该成员函数的作用是验证用户提交的信息是否正确
		include ("data/conn.php");
		// $sql=mysql_query("select * from tb_user where name='".$this->name."'",$conn);
		$sql = "select * from tb_user where name='" . $this->name . "'";
		$result = mysqli_query ( $con, $sql );
		$info = mysqli_fetch_array ( $result );
		if ($info == false) {
			echo "<script language='javascript'>alert('不存在此用户！');history.back();</script>";
			exit ();
		}
		if ($info ['pwd'] == $this->pwd) {
			session_start ();	
			$_SESSION['username']=$this->name;
		//echo	$_SESSION['username'];
		//	$username=$this->name;
			$_SESSION ["producelist"]= "";
 			//$producelist = "";
// 			$_SESSION ["producelist"];
			
			$_SESSION ["quatity"]= "";
			//$quatity = "";
			header ( "location:index2.php" );
			exit ();
			
		} else {
			echo "<script language='javascript'>alert('密码输入错误！');history.back();</script>";
			exit ();
		}
	}
}

$obj = new chkinput ( trim ( $username ), trim ( $userpwd ) );
$obj->checkinput ();
?>