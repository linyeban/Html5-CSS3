<?php
include("data/conn.php");
session_start();
 if(!isset($_SESSION['username']))
 {
   echo "<script>alert('您还没有登录,请先登录!');history.back();</script>";
   exit;
  }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<table width="790" height="400" border="0" align="left" >
  <tr>
    <td width="563" height="400" valign="top" bgcolor="#FFFFFF">
      <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="20" bgcolor="#69BC2C"><div align="center" style="color: #FFFFFF"><?php echo $_SESSION['username'];?>的所有信息</div></td>
        </tr>
        <tr>
          <td height="160" bgcolor="#555555"><table width="500" height="160" border="0" align="center" cellpadding="0" cellspacing="1">
              <script language="javascript">
		     function chkinput1(form)
			  {
			    if(form.email.value=="")
				{
				  alert("电子邮箱不能为空!");
				  form.email.select();
				  return(false);
				}
				if(form.email.value.indexOf('@')<0)
				{
				  alert("电子邮箱输入错误!");
				  form.email.select();
				  return(false);
				}
				if(form.truename.value=="")
				{
				  alert("真实姓名不能为空!");
				  form.truename.select();
				  return(false);
				}
				if(form.tel.value=="")
				{
				  alert("联系电话不能为空!");
				  form.tel.select();
				  return(false);
				} 
				if(form.dizhi.value=="")
				{
				  alert("联系地址不能为空!");
				  form.dizhi.select();
				  return(false);
				}         
			   
				return(true);
			  }
		   </script>
              <form name="form1" method="post" action="changeuser.php" onSubmit="return chkinput1(this)">
                <?php
		   		$sql=mysqli_query($con,"select * from tb_user where name='".$_SESSION['username']."'");
		   		$info=mysqli_fetch_array($sql);
		  		?>
                <tr bgcolor="#FFFFFF">
                  <td width="100" height="20"><div align="center">昵称：</div></td>
                  <td width="397" ><div align="left"><?php echo $_SESSION['username'];?></div></td>
                </tr>
                
                <tr bgcolor="#FFFFFF">
                  <td height="20" ><div align="center">E-mail：</div></td>
                  <td height="20" ><div align="left">
                      <input type="text" name="email" size="25" class="inputcssnull" value="<?php echo $info['email'];?>">
                  </div></td>
                </tr>
                <tr bgcolor="#FFFFFF">
                  <td height="20" ><div align="center">QQ号码：</div></td>
                  <td height="20" ><div align="left">
                      <input type="text" name="qq" size="25" class="inputcssnull" value="<?php echo $info['qq'];?>">
                  </div></td>
                </tr>
                <tr>
                  <td height="20" bgcolor="#FFFFFF"><div align="center">联系电话：</div></td>
                  <td height="20" bgcolor="#FFFFFF"><div align="left">
                      <input type="text" name="tel" size="25" class="inputcssnull" value="<?php echo $info['tel'];?>">
                  </div></td>
                </tr>
                <tr>
                  <td height="20" colspan="2" bgcolor="#FFFFFF"><div align="center">
                      <input name="submit2" type="submit" class="buttoncss" value="更改">
                      <input name="reset" type="reset" class="buttoncss" value="取消更改">
                  </div></td>
                </tr>
              </form>
          </table></td>
        </tr>
      </table>
     </td>
          <td width="229" align="center" valign="top"></td>
  </tr>
</table>
