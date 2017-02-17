<?php
include("../data/conn.php");
$username=$_POST['name'];
$userpwd=$_POST['pwd'];
 class chkinput{
   var $name;
   var $pwd;
  
   function chkinput($x,$y){
     $this->name=$x;
     $this->pwd=$y;
    }

   function checkinput(){
     include("../data/conn.php");
     
     $sql="select * from tb_admin where name='".$this->name."'";
   	 $result=mysqli_query($con,$sql);
	 $info=mysqli_fetch_array($result);
     if($info==false){
          echo "<script language='javascript'>alert('不存在此管理员！');history.back();</script>";
          exit;
       }
      else{
          
          if($info['pwd']==$this->pwd){
               header("location:default.html");
           }
          else{
             echo "<script language='javascript'>alert('密码输入错误！');history.back();</script>";
             exit;
           }
      }    
   }
 }
    $obj=new chkinput(trim($username),trim($userpwd));
    $obj->checkinput();
?>