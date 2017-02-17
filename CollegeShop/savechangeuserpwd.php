<?php
echo "aaa";
session_start();
$p1=trim($_POST['p1']);
$p2=trim($_POST['p2']);

$name=$_SESSION['username'];
class chkchange
   {
	   var $name;
	   var $p1;
	   var $p2;
	   function chkchange($x,$y,$z)
	    {
		  $this->name=$x;
		  $this->p1=$y;
		  $this->p2=$z;
		
		}
	   function changepwd()
	   {
	 
		include("data/conn.php");
	    $sql=mysqli_query($con,"select * from tb_user where name='".$this->name."'");
	    $info=mysqli_fetch_array($sql);
		if($info['pwd']!=$this->p1)
		 {
		   echo "<script>alert('原密码输入错误!');history.back();</script>";
		   exit;
		 }
		 else
		 {
		   mysqli_query($con,"update tb_user set pwd='".$this->p2."' where name='$this->name'");
		   echo "<script>alert('密码修改成功!');history.back();</script>";
		   exit;
		 }
	   }
  }
 $obj=new chkchange($name,$p1,$p2); 
 $obj->changepwd() 
?>